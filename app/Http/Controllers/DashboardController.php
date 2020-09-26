<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Traits\BookTrait;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use BookTrait;


    public function allBooks(){
        $books=Book::all();
        return view('admin.dashboard.books',compact('books'));
    }
    //'id','name', "description",'author','borrowed','roof_id','category_id'
    public function create()
    {
        return view("books.create");
    }

    public function addBook(Request $request){
        $book= new Book();
        $book->name=$request->name;
        $book->description=$request->description;
        $book->author=$request->author;
        $book->borrowed=null;
        $book->roof_id=null;
        $book->category_id=null;
        //
        $img=$request->book_img;
        $filePdf=$request->book_file;
        $book->book_img=$this->SaveFile($img,'uploads');
        $book->book_file=$this->SaveFile($filePdf,'uploads');
        $book->save();
        return redirect()->route('allBooks');
    }
    public function editBook($id)
    {
        $book = book::findOrFail($id);
        return view("books.edit", compact('book'));
    }

    public function updateBook(Request $request, $id)
    {
        $book = book::find($id);
        $book->name=$request->name;
        $book->author=$request->author;
        $book->description=$request->description;
        $book->save();
        return redirect()->route('allBooks');
    }
    public function destroyBook($id)
    {
        book::find($id)->delete();
        return redirect()->route('allBooks');
    }

}
