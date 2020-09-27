@extends('default')
@section('content')
    <div class="container-fluid" style="margin-top: 5vh">
        <div class="row">
            <div class="col-lg-7">
                <div class="card border-info mb-3">
                    <div style="display: flex; flex: 1 1 auto;">
                        <div class="img-square-wrapper">
                            <img src="{{asset('upload_img/'.$book->book_img)}}" width="300px" height="380px">
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
            <div class="col-5 d-none d-lg-block" >
                <div class="col-lg-12">
                    <embed id="file-book" src="{{asset('upload_file/'.$book->book_file)}}" style="width:400px; height:388px;" frameborder="0">
                </div>
                <div class="col-lg-12 flex">
                    <a style="width: 200px; margin-bottom: 5px" class="btn btn-success" href="{{asset('upload_file/'.$book->book_file)}}" download><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    <a style="width: 180px; margin-bottom: 5px" class="btn btn-primary" href="{{asset('upload_file/'.$book->book_file)}}" onclick="window.open('{{asset('upload_file/'.$book->book_file)}}', '_self', 'fullscreen=yes'); return false;"><i class="fas fa-book-open"></i> Open Full Screen</a>
                </div>
            </div>
        </div>
        <div class="col-xl-12 d-lg-none d-md-block" >
            <a style="width: 45%;" class="btn btn-success" href="{{asset('upload_file/'.$book->book_file)}}" download><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            <a style="width: 45%;" class="btn btn-primary" href="{{asset('upload_file/'.$book->book_file)}}" onclick="window.open('{{asset('upload_file/'.$book->book_file)}}', '_self', 'fullscreen=yes'); return false;"><i class="fas fa-book-open"></i> Open Full Screen</a>
        </div>

    </div>

@stop