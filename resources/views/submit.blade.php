@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h1>Submit a link</h1>
      <form action="/submit" method="post">
        {!! csrf_field() !!}

        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops! Something went wrong!</strong>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>

        <div class="form-group">
          <label for="url">Url</label>
          <input type="text" class="form-control" id="url" name="url" placeholder="URL">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
@stop