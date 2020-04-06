@extends('layouts.app')

@section('title')
    All authors
@endsection
  
@section('content')

  <div class="d-flex justify-content-between align-items-start">
    <h1>All authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Add new</a>
  </div>

  @foreach($authors as $author)

    <hr>
    <div class="d-flex justify-content-between align-items-start">
      <div>
        <a href="{{ route('authors.show', $author->id) }}">
          <h2>{{ $author->name }}</h2>
        </a>
        <p>{{ $author->bio }}</p>
      </div>
    
      <div>
        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('authors.delete', $author->id) }}" class="btn btn-danger">Delete</a>
      </div>
    </div>

  @endforeach

  {!! $authors->render() !!}

@endsection