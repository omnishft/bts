@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>{{$task->description}}</p>
    <p>{{$task->long_description}}</p>
    <p>{{$task->completed}}</p>
@endsection
