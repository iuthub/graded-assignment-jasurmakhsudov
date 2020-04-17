@extends('layouts.master')

@section('content')

@include('partials.info_block')

@include('partials.error_block')

<div class="article">

	<div class="">
	    <form action="{{ route('adminEditPost') }}" method="post">
	        <div id="myDIV" class="header">
	          <h2>Task detail</h2>
	          @csrf
	          <input type="text" 
	          name="task_name" 
	          value="{{ $post->task }}" 
	          placeholder="Title...">
	          <input type="hidden" name="id" value="{{ $post->id }}">
	          <button type="submit" class="addBtn">Edit</button>
	        </div>
	    </form>
	</div>
	
@endsection
