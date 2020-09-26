<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();
        //dd($books);
        return view("books.list", ["books" => $books]);
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
        // book::create($request->all());
        // return redirect()->route('books.index');
        $book= new Book();
        $book->borrowed=1;
        $book->roof_id=1;
        $book->category_id=1;
        $book->name=$request->name;
        $book->author=$request->author;
        $book->description=$request->description;
        if($request->hasFile('book_img')){
            $file = $request->file('book_img');
            $extension =$file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('uploads' , $filename);
            $book->book_img =$filename;
        }else {
            return $request;
            $book->book_img = "";
        }
        if($request->hasFile('book_file')){
            $file = $request->file('book_file');
            $extension =$file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('upload' , $filename);
            $book->book_file =$filename;
        }else {
            return $request;
            $book->book_file = "";
        }
        //$request->file('book_img');
        //echo $request->file('book_img')->store('upload');
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
        $book = book::find($id);
        return view("books.show", ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::find($id);
        //return ('welcom');
        return view("books.edit", ['book' => $book]);
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
        $book = book::find($id);
        $book->borrowed=1;
        $book->roof_id=1;
        $book->category_id=1;
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
        $book= book::find($id);
        File::delete('uploads/'.$book->book_img);
        File::delete('upload/'.$book->book_file);
        $book->delete();
        //File::delete('uploads/'.$book->book_img);
        return redirect()->route('books.index');
    }
    public function showall()
    {
        $books = Book::all();

        return view("books.showall",["books"=>$books]);
    }
}
