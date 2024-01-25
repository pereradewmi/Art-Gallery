<?php
namespace App\Logging;

use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Routing\Router;

class AddUserInformation
{
    protected $request;
    protected $router;

    public function __construct(Request $request = null, Router $router)
    {
        $this->request = $request;
        $this->router = $router;
    }

    public function __invoke(Logger $logger)
    {
        if ($this->request) {
            foreach ($logger->getHandlers() as $handler) {
                $handler->pushProcessor(function ($record) {
                    return $this->processLogRecord($record);
                });
            }
        }
    }

    public function processLogRecord($record)
    {
        $record['extra'] += [
            'route' => $this->getCurrentRoute(),
            'user' => $this->request->user()->id ?? 'guest',
            'ip' => $this->request->getClientIp(),
            'request' => $this->getRequestParameters(),

        ];

        return $record;
    }

    protected function getCurrentRoute(): ?string
    {
        if ($route = $this->router->current()) {
            return $route->getName();
        }

        return null;
    }

    protected function getRequestParameters(): array
    {
        $allParams = $this->request->all();

        // Filter out sensitive information (e.g., passwords and files)
        $filteredParams = $this->filterSensitiveParams($allParams);

        return $filteredParams;
    }

    protected function filterSensitiveParams(array $params): array
    {
        // List of keys to filter
        $sensitiveKeys = ['password', 'file', 'cv', 'profile'];

        foreach ($sensitiveKeys as $key) {
            if (array_key_exists($key, $params)) {
                $params[$key] = '*** FILTERED ***';
            }
        }

        return $params;
    }
}
