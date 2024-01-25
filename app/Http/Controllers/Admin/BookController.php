<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Book;
use App\Models\BookImage;
use App\Models\BookAuthor;
use App\Models\MasterAuthor;
use App\Models\MasterCategory;
use App\Models\MasterLanguage;
use App\Models\MasterPublisher;
use App\Models\MasterEdition;
use App\Models\MasterReadingAgeGroup;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::whereIn('status', [0, 1])->orderby('created_at', 'ASC')->get();
        return view('admin.book.index', ['books' => $books]);
    }


    public function add()
    {
        $data = (Object) array();
        $data->stock_no = 'HB-' . ((Book::orderBy('created_at', 'desc')->first()->id ?? 0) + 1);
        $data->author = MasterAuthor::where('status', 1)->get();
        $data->category = MasterCategory::where('status', 1)->get();
        $data->language = MasterLanguage::where('status', 1)->get();
        $data->publisher = MasterPublisher::where('status', 1)->get();
        $data->edition = MasterEdition::where('status', 1)->get();
        $data->readingAgeGroup = MasterReadingAgeGroup::where('status', 1)->get();

        return view('admin.book.add', ['data' => $data]);
    }


    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'stock_quantity' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'publication_date' => 'required|string|max:255',
            'edition' => 'required|string|max:255',
            'pages_count' => 'required|string|max:255',
            'reading_age_group' => 'required|string|max:255',
            'length' => 'required|string|max:255',
            'width' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
            'isbn_10' => 'required|string|max:255',
            'isbn_13' => 'required|string|max:255',
        ]);

        $book = new Book;
        $book->stock_no = $request->get('stock_no');
        $book->title = $request->get('title');
        $book->price = $request->get('price');
        $book->stock_quantity = $request->get('stock_quantity');
        $book->category_id = $request->get('category');
        $book->description = $request->get('description');
        $book->language_id = $request->get('language');
        $book->publisher_id = $request->get('publisher');
        $book->publication_date = $request->get('publication_date');
        $book->edition_id = $request->get('edition');
        $book->pages_count = $request->get('pages_count');
        $book->reading_age_group_id = $request->get('reading_age_group');
        $book->length = $request->get('length');
        $book->width = $request->get('width');
        $book->height = $request->get('height');
        $book->weight = $request->get('weight');
        $book->isbn_10 = $request->get('isbn_10');
        $book->isbn_13 = $request->get('isbn_10');

        $book->save();


        $bookAuthors = new BookAuthor;
        $bookAuthors->book_id = $book->id;
        $bookAuthors->author_id = $request->get('author');

        $bookAuthors->save();
        

        for ($i = 1; $i < 7; $i++) {
            if ($request->hasFile('book_image_' . $i)) {

                $file = $request->file('book_image_' . $i);
                $name = 'book_image_' . $book->id . '_' . $i . '.' . $file->getClientOriginalExtension();
                $docFolder = public_path('img/books');
                $docFilePath = $docFolder . $name;
                $file->move(public_path('img/books'), $name);

                if ($i == 1) {
                    Book::where('id', $book->id)->update(["cover_image_path" => '/img/books/' . $name]);
                }

                $bookImages = new BookImage;
                $bookImages->book_id = $book->id;
                $bookImages->image_path = '/img/books/' . $name;
                $bookImages->save();
            }

        }

        return redirect()->route('admin.add-book')->with('success', 'Book added sucessfully !!!');
    }


    public function edit($id)
    {
        $book = Book::with('bookImage', 'bookAuthor')->find($id);

        $data = (Object) array();
        $data->author = MasterAuthor::where('status', 1)->get();
        $data->category = MasterCategory::where('status', 1)->get();
        $data->language = MasterLanguage::where('status', 1)->get();
        $data->publisher = MasterPublisher::where('status', 1)->get();
        $data->edition = MasterEdition::where('status', 1)->get();
        $data->readingAgeGroup = MasterReadingAgeGroup::where('status', 1)->get();

        return view('admin.book.edit', ['book' => $book, 'data' => $data]);
    }


    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'stock_quantity' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'publication_date' => 'required|string|max:255',
            'edition' => 'required|string|max:255',
            'pages_count' => 'required|string|max:255',
            'reading_age_group' => 'required|string|max:255',
            'length' => 'required|string|max:255',
            'width' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
            'isbn_10' => 'required|string|max:255',
            'isbn_13' => 'required|string|max:255',
        ]);

        $model = Book::where('id', $request->get('id'))->update(
            [
                'title' => $request->get('title'),
                'price' => $request->get('price'),
                'stock_quantity' => $request->get('stock_quantity'),
                'category_id' => $request->get('category'),
                'description' => $request->get('description'),
                'language_id' => $request->get('language'),
                'publisher_id' => $request->get('publisher'),
                'publication_date' => $request->get('publication_date'),
                'edition_id' => $request->get('edition'),
                'pages_count' => $request->get('pages_count'),
                'reading_age_group_id' => $request->get('reading_age_group'),
                'length' => $request->get('length'),
                'width' => $request->get('width'),
                'height' => $request->get('height'),
                'weight' => $request->get('weight'),
                'isbn_10' => $request->get('isbn_10'),
                'isbn_13' => $request->get('isbn_13'),
            ]
        );


        $model2 = BookAuthor::where('book_id', $request->get('id'))->update(
            [
                'author_id' => $request->get('author'),
            ]
        );

        
        for ($i = 1; $i < 7; $i++) {
            if ($request->hasFile('book_image_' . $i)) {

                $file = $request->file('book_image_' . $i);
                $name = 'book_image_' . $request->get('id') . '_' . $i . '.' . $file->getClientOriginalExtension();
                $docFolder = public_path('img/books');
                $docFilePath = $docFolder . $name;
                $file->move(public_path('img/books'), $name);

                if ($i == 1) {
                    Book::where('id', $request->get('id'))->update(["cover_image_path" => '/img/books/' . $name]);
                }

                if ($request->get('book_image_url_' . $i) == '') {
                    $bookImages = new BookImage;
                    $bookImages->book_id = $request->get('id');
                    $bookImages->image_path = '/img/books/' . $name;
                    $bookImages->save();
                } else {
                    BookImage::where('image_path', $request->get('book_image_url_' . $i))->update([
                        'image_path' => '/img/books/' . $name
                    ]);
                }
            }

        }

        return redirect()->back()->with('success', 'Book updated successfully !!! ');
    }


    public function delete($id)
    {
        $obj = Book::where('id', $id)->update([
            'status' => 2
        ]);

        return redirect()->back()->with('success', 'Book deleted successfully !!!');
    }


    public function status($id, $status)
    {
        if ($status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }

        $obj = Book::where('id', $id)->update([
            'status' => $status
        ]);

        return redirect()->back()->with('success', 'Book Status updated successfully !!!');
    }


}
