@extends('layouts.postsTemplate')

@section('articleCover')
    <div class="container-xxl" style="background-image: url({{asset('storage/'.$article->coverImage)}}); 
    height: 500px; background-repeat: no-repeat; background-size:cover;">
@endsection

@section('articleTitle')
    {{ $article->title }}
@endsection

@section('subTitle')
    {{ $article->subtitle }} 
@endsection

@section('date')
    Posted by {{ $article->author }} on {{ $article->created_at }} 
    @isset($article->updated_at)
        ; Updated on {{ $article->updated_at }}
    @endisset
@endsection

@section('content')
    <br><br>
    <p class="lead text-justify" style="text-indent: 40px">
        {{ $article->content }}
    </p>
    
@endsection

