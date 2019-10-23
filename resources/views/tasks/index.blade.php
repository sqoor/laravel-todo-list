@extends('layouts.app')

@section('content')
    <h1>index</h1>

    <table class="table">
        <tr>
            <th>Task Name</th>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <td>
                    {{$task->task}}
                </td>
                <td>
                    <a href="/tasks/{{$task->id}}/edit" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form method="post" action="/tasks/{{$task->id}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
