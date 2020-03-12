@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New article</h1> 

        <form method="POST" action="{{ url('articles/'.$article->id) }}">
                @csrf
                @method('PUT')
                <div class="form-row">
                     <div class="form-group col-md-6">
                     <label for="colomn" >Colomn</label>
                        <input  class="form-control" name="colomn" id="colomn"  value="{{ $article->colomn}} {{old('colomn')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input  class="form-control" name="title" id="title" value="{{ $article->title}} {{old('title')}}">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="excerpt" >excerpt</label>
                        <input  class="form-control"  name="excerpt" id="excerpt" value="{{ $article->excerpt}} {{old('excerpt')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="body" value="">body</label>
                    <input type="text" class="form-control" name="body" id="body" placeholder="1234 Main St" value="{{ $article->body}} {{old('body')}}">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

        </div>
    </div>
    
@endsection