@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Task</h1>
        <form method="post" action="{{route('tasks.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp"
                       placeholder="Enter Task Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
