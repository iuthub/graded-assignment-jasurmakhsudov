@extends('layouts.master')

@section('content')

@include('partials.info_block')

@include('partials.error_block')

<div class="">
    <form action="{{ route('adminCreatePost') }}" method="post">
        <div id="myDIV" class="header">
          <h2>Task detail</h2>
          @csrf
          <input type="text" name="task_name" placeholder="Task..." >
          <button type="submit" class="addBtn">Add</button>
        </div>
    </form>
</div>

<ul id="myUL">
    @foreach($tasks as $item)
        <li>
            <div class="task">
                {{$item->task}}
            </div>
            <div class="action">
                <a href="{{ route('adminEdit', ['id'=> $item->id ]) }}"><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href="{{ route('adminDelete', ['id'=>  $item->id ]) }}"><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
    @endforeach
</ul>

@endsection