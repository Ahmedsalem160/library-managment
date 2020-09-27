
@extends('admin.dashboard.default')
@section('content')
    <table class="table table-hover" style="text-align: center">
        <thead class=" thead-light">
        <tr>
            <th scope="col">#book</th>
            <th scope="col">#book Cover</th>
            <th scope="col">Book Name</th>
            <th scope="col">Author Name</th>
            <th scope="col">Description</th>
            <th scope="col">Show Details</th>
            <th scope="col">Click borrow it</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td><img src="{{asset('upload_img/'.$book->book_img)}}" width="70px" height="70px"></td>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->description}}</td>
                <td><a href="{{route("stdbooks.show",$book->id)}}" class="btn btn-info btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-info-circle" aria-hidden="true" style="color: #212c69"></i></a></td>
                <td><a href="{{route("stdbooks.edit",$book->id)}}" class="btn btn-success btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-shopping-bag"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
