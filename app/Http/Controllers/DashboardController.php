<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Traits\BookTrait;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function AllStudent(){
        $students=User::all();
        return view('students.list',compact('students'));
    }


}
