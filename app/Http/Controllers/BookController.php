<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
<<<<<<< HEAD
use File;
=======
use App\Traits\BookTrait;
>>>>>>> a016873fb0c44f7bd30b704b6534db5bf609383a

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
<<<<<<< HEAD
        if($request->hasFile('book_img')){
            $file = $request->file('book_img');
            $extension =$file->getClientOriginalExtension();
            $filename= "image".time() . '.' . $extension;
            $file->move('upload_img/' , $filename );
            $book->book_img =$filename;
        }else {
            return $request;
            $book->book_img = "";
        }
        if($request->hasFile('book_file')){
            $file = $request->file('book_file');
            $extension =$file->getClientOriginalExtension();
            $filename= "file".time() . '.' . $extension;
            $file->move('upload_file/' , $filename );
            $book->book_file =$filename;
        }else {
            return $request;
            $book->book_file = "";
        }
        //$request->file('book_img');
        //echo $request->file('book_img')->store('upload');
=======
        $img=$request->book_img;
        $filePdf=$request->book_file;
        $book->book_img=$this->SaveFile($img,'uploads');
        $book->book_file=$this->SaveFile($filePdf,'uploads');
>>>>>>> m2
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
        if($request->hasFile('book_img')){
            File::delete('upload_img/'.$book->book_img);
            $file = $request->file('book_img');
            $extension =$file->getClientOriginalExtension();
            $filename= "imageEdit".time() . '.' . $extension;
            $file->move('upload_img/' , $filename );
            $book->book_img =$filename;
        }else {
            return $request;
            $book->book_img = "";
        }
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
<<<<<<< HEAD
        $book= book::find($id);
        File::delete('upload_img/'.$book->book_img);
        File::delete('upload_file/'.$book->book_file);
        $book->delete();
        //File::delete('uploads/'.$book->book_img);
=======
        book::findOrFail($id)->delete();
>>>>>>> a016873fb0c44f7bd30b704b6534db5bf609383a
        return redirect()->route('books.index');
    }
    public function showAll()
    {
        $books = Book::all();
<<<<<<< HEAD

        return view("books.showAll",["books"=>$books]);
=======
        return view("books.showall",compact('books'));
>>>>>>> m2
    }
}
