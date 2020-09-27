<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $books=Book::all();
        return view('students.index',compact('books'));
    }

    public function showDetail($id)
    {
        $book = book::find($id);
        return view("students.detailBook", compact('book'));
    }
}
