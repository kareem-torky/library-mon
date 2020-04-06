@extends('layouts.app')

@section('title')
  Latest authors
@endsection


@section('content')

<h1>Latest authors</h1>

@foreach($authors as $author)

  <hr>
  <h2>{{ $author->name }}</h2>
  <p>{{ $author->bio }}</p>

@endforeach

@endsection