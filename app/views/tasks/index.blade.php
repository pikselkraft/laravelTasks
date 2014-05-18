@extends('layouts.master')

@section('content')


	<h1>All Tasks</h1>

		@foreach($tasks as $task)
			<li>
				<img src="http://placehold.it/25x25" alt="gravatar">
				{{ link_to("tasks/$task->id", $task->title) }}
			</li>
		@endforeach

@stop