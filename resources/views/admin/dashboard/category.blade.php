@extends('admin.dashboard.default')
@section('content')
    <div class="content" style="box-shadow: 0 0 3px rgba(0,0,0,0.1); border-color: #e9e9e9; margin-bottom: 20px; background-color: #ffffff; border-radius: 4px; -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05); box-shadow: 0 1px 1px rgba(0,0,0,.05);">
        <div class="header" style="color: #767676; background-color: #f6f6f6; border-color: #e9e9e9; padding: 10px 15px; border-bottom: 1px solid transparent; border-top-right-radius: 3px; border-top-left-radius: 3px;">
            <h3 style="font-size: 14px; line-height: 20px; height: 20px; margin: 0">Add Category</h3>
        </div>
        <div class="container" style="padding: 15px">
            <form method="post" action="{{ route('category.store') }}" >
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name of Category</label>
                    <div class="col-sm-10">
                        <input type="text" name="category" placeholder="Enter the Category of Your books here..." class="form-control">
                    </div>
                </div>

            </form>
        </div>
    </div>

    @stop
