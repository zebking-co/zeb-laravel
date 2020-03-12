@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New article</h1> 

        <form method="POST" action="{{ url('articles')}}">
                <div class="form-row">
                    @csrf
                     <div class="form-group col-md-6">
                        <label for="colomn">Colomn</label>
                     <input  class="form-control" name="colomn" id="colomn" value = "{{old('colomn')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input  class="form-control" name="title" id="title" value = "{{old('title')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="excerpt">excerpt</label>
                        <input  class="form-control"  name="excerpt" id="excerpt" value = "{{old('excerpt')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="body">body</label>
                    <input type="text" class="form-control" name="body" id="body" placeholder="1234 Main St" value = "{{old('body')}}">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

        </div>
    </div>
    
@endsection()