@extends('layouts.app')
@section('title', 'Create Task')
@section('content')
<div class="row">
    <div class="col-md-4 ml-auto mr-auto">
        <h2> Create Task</h2>
        {!! Form::open(['route' => 'task.store', 'method' => 'POST' ]) !!}
            @component('components.taskForm')
            @endcomponent
        {!! Form::close() !!}
    </div>
</div>
@endsection()
