@extends('layout')
@section('content')
<div id="extra" class="container">
    <div class="title">
        <h2>Praesent scelerisquet</h2>
        <span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span> </div>
        <div id="three-column">            
            
                <div class="box{{ $articles->title }}">                                   
                    <div class="box">
                    <p>{{ $articles->body}}</p>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection