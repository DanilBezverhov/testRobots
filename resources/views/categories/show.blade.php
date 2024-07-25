@extends('layout.app')
@section('content')
<head>
    <title>Категория: {{ $category->name }}</title>
</head>
<body>
    <h1>Категория: {{ $category->name }}</h1>
    <nav>
        <ul>
            @foreach($categories as $cat)
                <li><a href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a></li>
            @endforeach
        </ul>
    </nav>
    <div>
        
        @foreach($articles as $article)
            <h2><a href="{{ route('article.show', [$category->slug, $article->slug]) }}">{{ $article->title }}</a></h2>
            <p>{{ $article->excerpt }}</p>
        @endforeach

        {{ $articles->links() }}
    </div>
</body>
@endsection