@extends('layouts.nav')

@section('content')
    <div class="container mt-3">
        <div class="row">
            @foreach($articles as $article)
                <div class="card text-dark bg-light mb-3 mx-3 shadow" style="max-width: 18rem;">
                    <div class="card-header my-2">{{ $article->author }}</div>
                    <div class="card-body">
                        <h5 class="card-title mb-2">{{ $article->title }}</h5>
                        <p class="card-text mb-2">{{ $article->content }}</p>
                        <p class="card-footer mt-2">{{$article->created_at}}</p>
                        <p>{{ $article->id }}</p>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <a class="btn btn-info " href="{{ route('articles.show', $article->id) }}">Pokaż wpis</a>
                        </div>
                        <div class="col-6 mb-3">
                            <a class="btn btn-info " href="{{ route('user.show', $article->user_id) }}">Pokaż wpisy tego autora</a>
                        </div>
                        <div class="col-6 mb-3">
                            @if($article->user_id == Auth::user()->id)
                                <a class="btn btn-warning " href="{{ route('articles.edit', $article->id) }}">Edytuj
                                    swój wpis</a>
                            @endif
                        </div>
                        <div class="col-6 mb-3">
                            @if($article->user_id == Auth::user()->id)
                                <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger btn">Usuń swój wpis</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
