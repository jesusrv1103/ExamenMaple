<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BooksController extends Controller
{

    /**
     * INSTRUCTIONS
     *
     * - Clone this repository into a new one
     * - Create the Books Model with Migrations, Factory and Seeder
     * - Table books columns: id,title,category,author,realease_date,publish_date
     * - php artisan db:seed should populate the User and Books tables
     * - The index page should show a datatable using ajax loading using JQUERY
     * - The datatable should get the info from BooksController@api
     * - The dates should be shown in the format d/M/y
     * - Extra points for bootstrap 4 styling
     * - Push your changes into your new repository in Github
     * - Share your github URL
     *
     */


    /**
     * Show index page
     */
    public function index()
    {
        //
    }

    /**
     * Return user books via AJAX API REQUEST [json]
     */
    public function api(Request $request)
    {
        if ($request->ajax('https://datatables.yajrabox.com/fluent/carbon-data')) {
            $books = Book::select(['id', 'name', 'category', 'author', 'realease_date','publish_date']);

            return datatables()->of($books)
            ->editColumn('realease_date', function ($book) {
                return $book->realease_date ? with(new Carbon($book->realease_date))->format('d/M/Y') : '';
            })
            ->editColumn('publish_date', function ($book) {
                return $book->publish_date ? with(new Carbon($book->publish_date))->format('d/M/Y') : '';
            })
              ->toJson();
        }


        return view('books.index');
    }
}
