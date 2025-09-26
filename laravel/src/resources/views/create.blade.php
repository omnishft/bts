@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    <form method="POST" action="{{route('tasks.store')}}">
        @csrf
        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" placeholder="Enter title">
        </div>
        <div>
            <label for="description">
                Description
            </label>
        <textarea name="description" id="description" rows="5" placeholder="Enter description"></textarea>
        </div>
        <div>
            <label for="long_description">
                Long description
            </label>
        <textarea name="long_description" id="long_description" rows="10" placeholder="Enter description"></textarea>
        </div>
        <div>
            <button type="submit">Add task</button>
        </div>
    </form>
@endsection
