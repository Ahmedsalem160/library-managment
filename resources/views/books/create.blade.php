@extends('default')
@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="module-head">
            <h3>Add Books</h3>
        </div>
        <div class="column is-8">
            <form method="post" action="{{ route('books.store') }}">
                <div class="control-group">
                    <label class="control-label">Title Of Book</label>
                    <div class="controls">
                        <input type="text" name="name" placeholder="Enter the title of the book here..." class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Author Name</label>
                    <div class="controls">
                        <input type="text" name="author" placeholder="Enter the name of author for the book here..." class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Description of Book</label>
                    <div class="controls">
                        <textarea class="span8" name="description" rows="5" placeholder="Enter few lines about the book here"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" name="send" value="Add Book" class="btn btn-dark btn-block">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop