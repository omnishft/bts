@extends('layouts.app')

@section('title', "Tasks List")

@section('content')
    @if($tasks)
        <ul>
            @foreach($tasks as $task)
                <li><a href="{{route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a></li>
            @endforeach
        </ul>
    @else
        <p> No Tasks </p>
    @endif

@endsection
