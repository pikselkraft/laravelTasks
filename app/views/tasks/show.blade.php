@extends('layouts.master')

@section('content')

	<h1>Task</h1>

	<article>{{ $task->body }}</article>

	<p>{{ link_to('/', 'Go back') }}</p>
@stop