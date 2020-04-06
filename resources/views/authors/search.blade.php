@extends('layouts.app')
  
@section('title')
  Search authors
@endsection
  

@section('content')

<h1>Search results</h1>

@foreach($authors as $author)

  <hr>
  <h2>{{ $author->name }}</h2>
  <p>{{ $author->bio }}</p>

@endforeach

@endsection