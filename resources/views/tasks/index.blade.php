@extends('layouts.app')
@section('title','Tasks')
@section('content')

@if ($tasks->count() == 0)
    <p class="lead"> There are no tasks for you </p>
@else
<div class="row  wow slideInRight" data-wow-duration="2s">
    @foreach ($tasks as $task )
 <div class="col-md-4 mb-2">
<div class="card">
    <div class="card-header text-center">
            <h2 class="h2">{{$task->name}}</h2>
            <small>{{$task->created_at}}</small>
    </div>
    <div class="card-body">
            <p>{{$task->description}}</p>
            <h5>Due Date: {{$task->due_date}}</h5>


             {!! Form::open(['route'=>['task.update', $task->id], 'method'=>'DELETE']) !!}
             <a href="{{ route('task.edit', $task->id) }}" class="btn btn-group-sm btn-primary">Update</a>
                <button class="btn btn-group-sm btn-danger" type="submit">Delete</button>
             {!! Form::close() !!}
    </div>


    </div>
</div>


    @endforeach
</div>
@endif



    <div class="row justify-content-center mt-5">
        <div class="col-10 text-center ml-auto mr-auto">
            {{$tasks->links()}}
        </div>
    </div>

@endsection
