@extends('layout')
@section('content')

<div id="extra" class="container">
		<div class="title">
			<h2>Praesent scelerisquet</h2>
            <span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span> </div>
            <div id="three-column">            
                @foreach($articles as $article) 
                    <div class="box{{$article->colomn}}">                                   
                        <div class="box">
						<p>{{ $article->title}}
                        </p>
                        <p>{{ $article->excerpt}}
						</p>
						<p>{{ $article->body}}
						</p>
                        </div>
                    </div>
                @endforeach
            </div>
			
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
    </div>
</div>
@endsection
