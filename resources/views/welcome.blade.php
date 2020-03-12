@extends('layout')
@section('content')

<div id="wrapper">
	
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>Etiam rhoncus volutpat</h2>
				<span class="byline">Proin gravida porttitor accumsan</span> </div>
			<ul class="actions">
				<li><a href="#" class="button">Etiam posuere</a></li>
			</ul>
		</div>
	</div>

    
	<div id="page" class="container">
    
<div class="title">
	  <h2>Nulla luctus eleifend</h2>
	  <span class="byline">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span> </div>
		<p> Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor.</p>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
  </div>

  <div id="featured">
		<div class="container">
        <img src="{{ ('public/images/banner.jpg') }}" alt="" width="1000" height="333" />
			<div class="title">
				<h2>Fusce ultrices fringilla metus</h2>
				<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span> </div>
			<p>This is <strong>BarbedFlower</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
		</div>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div>
    
    
	<div id="extra" class="container">
		<div class="title">
			<h2>Praesent scelerisquet</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span> </div>
		<div id="three-column">
			<div class="boxA">
				<div class="box">
					<p>Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
				</div>
			</div>
			<div class="boxB">
				<div class="box">
					<p>Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis.</p>
				</div>
			</div>
			<div class="boxC">
				<div class="box">
					<p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus.</p>
				</div>
			</div>
		</div>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div>
    
</div>


@endsection