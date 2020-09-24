@extends('default')
@section('content')
    <div class="container-fluid" style="margin-top: 5vh">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card border-info mb-3">
                    <div style="display: flex; flex: 1 1 auto;">
                        <div class="img-square-wrapper">
                            <img class="" src="http://via.placeholder.com/300x380" alt="Card image cap">
                        </div>
                        <div class="card-body text-info">
                            <h4 class="card-title">Book Name : <span style="font-size: 20px">{{$book->name}}</span></h4>
                            <h4 class="card-title">Book Author : <span style="font-size: 20px">{{$book->author}}</span></h4>
                            <p class="card-text"><h5 style="margin:0;">Description:</h5>{{$book->description}}</p>
                        </div>
                    </div>
                    <div class="card-footer card-footer bg-transparent border-info text-center">
                        <small class="text-muted">Created at : {{$book->created_at}}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
