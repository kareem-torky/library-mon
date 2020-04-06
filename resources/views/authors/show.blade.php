@extends('layouts.app')
  
@section('title')
  show author - {{ $author->name }}
@endsection
  

@section('content')

<h1>Show author {{ $author->id }}</h1>

<h2>{{ $author->name }}</h2>
<p>{{ $author->bio }}</p>

<a href="{{ route('authors.index') }}">Back</a>

@endsection