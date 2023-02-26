@extends('layouts.nav')

@section('content')
    <div class="container col-6 mt-5 border border-3 rounded-3 border-danger shadow">
        <div class="row">
            <div class="container col-12 h1 text-center">
                Edytuj swój post
            </div>
            <form class="mt-3" method="post" action="{{ route('articles.update', $article->id) }}">
                <div class="row d-flex justify-content-center">
                    <div class="col-7 mb-2">
                        <input class="form-control" type="text" name="title"  placeholder="Tytuł: {{ $article->title }}">
                    </div>
                    <div class="col-7 mb-5">
                        <input class="form-control" type="text" name="content" placeholder="Treść: {{ $article->content }}">
                    </div>
                    <div class="col-7 mb-5">
                        <input class="form-control" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div>
                        <input class="form-control" type="hidden" name="author" value="{{Auth::user()->name}}">
                        @csrf
                    </div>
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-success">Edytuj</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
