@extends('_master')
		
@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
	<a href="/">Go Home</a>
	<h1>Lorem Ipsum Generator</h1>
	<p>Create random filler text for your applications.</p>
	<form method="post">
		How many paragraphs? (max:99): <input type="text" name="paragraphNumber" required><br><br>
		<input class="btn btn-default" type="submit" value="submit">
	</form>
@stop
