@extends('templates/default')

@section('content')

<div class="introduction hero-unit">

	<center><img src="{{ Asset::getUrl('img/brand-logo.png') }}" alt="Platform 2 Logo" /></center>
	<br>
	@content('synopsis')

</div>

<div class="row">
	<div class="span4">@content('packages')</div>
	<div class="span4">@content('extensions')</div>
	<div class="span4">@content('themes')</div>
</div>

<div class="row">

	<footer>

		<p class="copyright">Created, developed, and designed by <a href="http://twitter.com/#!/Cartalyst">@Cartalyst</a></p>
		<p class="licence">The BSD 3-Clause License - Copyright © 2011-2013, Cartalyst LLC</p>

	</footer>

</div>

@stop
