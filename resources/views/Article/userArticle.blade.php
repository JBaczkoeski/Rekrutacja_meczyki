@extends('layouts.nav')

@section('content')
    <div class="container mt-3 mt-5">
        <div class="row">
            @foreach($articles_user as $article)
                <div class="card text-dark bg-light mb-3 mx-3 shadow" style="max-width: 18rem;">
                    <div class="card-header my-2">{{ $article->author }}</div>
                    <div class="card-body">
                        <h5 class="card-title mb-2">{{ $article->title }}</h5>
                        <p class="card-text mb-2">{{ $article->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
