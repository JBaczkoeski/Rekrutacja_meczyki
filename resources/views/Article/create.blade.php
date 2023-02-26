@extends('layouts.nav')

@section('content')
    <div class="container col-6 mt-5 border border-3 rounded-3 border-danger">
        <div class="row">
            <div class="container col-12 h1 text-center">
                Stwórz swój post
            </div>
            <form class="mt-3" method="post" action="{{ route('articles.store') }}">
                <div class="row d-flex justify-content-center">
                    <div class="col-7 mb-2">
                        <input class="form-control" type="text" name="title" placeholder="Tytuł">
                    </div>
                    <div class="col-7 mb-5">
                        <input class="form-control" type="text" name="content" placeholder="Wpisz treść...">
                    </div>
                    <div class="col-7 mb-5">
                        <input class="form-control" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div>
                        <input class="form-control" type="hidden" name="author" value="{{Auth::user()->name}}">
                        @csrf
                    </div>
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-success">Dodaj</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
