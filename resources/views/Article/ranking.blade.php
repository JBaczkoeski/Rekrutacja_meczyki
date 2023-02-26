@extends('layouts.nav')

@section('content')
    <div class="container mt-3 text-center justify-content-center d-flex">
        <div class="row">
            <div class="h1 text-center text-bg-danger">
                Oto 3 najwięcej postujących
            </div>
            @foreach($articles_ranking as $article)
                <div class="card text-dark bg-light mb-3 mx-3 shadow" style="max-width: 18rem;">
                    <div class="card-header my-2">{{ $article->author }}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
