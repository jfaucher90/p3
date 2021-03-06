@extends('_master')
		
@section('title')
	Developer's Best Friend
@stop

@section('content')
	<h1>Developer's Best Friend</h1>
	<blockquote><h4>by Jared Faucher<br>Dynamic Web Applications, Summer 2014</h4></blockquote>
	<br>
	<h2>Loren Ipsum Generator</h2>
	<p>Create random filler text for your applications.</p>
	<a href="/lorem-ipsum">Generate some random text!</a>
	<br>
	<br>
	<h2>Random User Generator</h2>
	<p>Create random user data for your application. Like Lorem Ipsum, but for people.</p>
	<a href="/user-generator">Generate some random users!</a>
@stop