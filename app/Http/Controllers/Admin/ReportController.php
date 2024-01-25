<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;
class ReportController extends Controller
{

    function reportsUI(Request $request){

        $query = Order::with('customer')->whereIn('status', [1, 2, 3, 4]);

        if ($request->start_date && $request->end_date) {
            $start_date = Carbon::parse($request->start_date);
            $end_date = Carbon::parse($request->end_date);

            $query->whereBetween('created_at', [$start_date, $end_date]);
        }

        $table = $query->orderBy('created_at', 'asc')->get();

        $sales=0;$revenue=0;$couriers_charges=0;$processing_fee=0;$order_count=sizeOf($table);
        foreach ($table as $key => $row) {
            $sales += $row->net_total;
            $revenue += $row->sub_total;
            $couriers_charges += $row->delivery_fee;
            $processing_fee += $row->processing_fee;
        }



        return view('admin.reports.orders',
            [
                'table' => $table,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'sales'=>$sales,
                'revenue'=>$revenue,
                'couriers_charges'=>$couriers_charges,
                'processing_fee'=>$processing_fee,
                'order_count'=>$order_count,

            ]);

    }
}
