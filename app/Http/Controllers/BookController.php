<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Traits\BookTrait;

class BookController extends Controller
{
    use BookTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct()
    {
        return $this->middleware('auth:admin');
    }*/

    public function index()
    {
        $books = book::all();
        return view("books.list", compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $book= new Book();
        $book->borrowed=null;
        $book->roof_id=null;
        $book->category_id=null;
        $book->name=$request->name;
        $book->author=$request->author;
        $book->description=$request->description;
        $img=$request->book_img;
        $filePdf=$request->book_file;
        $book->book_img=$this->SaveFile($img,'uploads');
        $book->book_file=$this->SaveFile($filePdf,'uploads');
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::findOrFail($id);
        return view("books.show", compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::findOrFail($id);
        return view("books.edit", compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = book::findOrFail($id);
        $book->borrowed=null;
        $book->roof_id=null;
        $book->category_id=null;
        $book->name=$request->name;
        $book->author=$request->author;
        $book->description=$request->description;
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        book::findOrFail($id)->delete();
        return redirect()->route('books.index');
    }
    public function showall()
    {
        $books = Book::all();
        return view("books.showall",compact('books'));
    }
}
