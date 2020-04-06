@extends('layouts.app')

@section('title')
  Edit author - {{ $author->name }}
@endsection

@section('content')

@include('inc.errors')

<form method="POST" action="{{ route('authors.update', $author->id) }}">

  @csrf

  <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="name" value="{{ $author->name }}">
  </div>
  
  <div class="form-group">
    <textarea class="form-control" name="bio" rows="8" placeholder="biography">{{ $author->bio }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection