

{{ Form::label('name', 'Task Name', ['class' => 'label-control']) }}
{{ Form::text('name', null, ['class' => 'form-control',]) }}

{{ Form::label('description', 'Description', ['class' => 'label-control mt-3']) }}
{{ Form::textarea('description', null, ['class' => 'form-control','rows' => 4, 'cols' => 10]) }}


{{ Form::label('due_date', 'Due date', ['class' => 'label-control mt-3']) }}
{{ Form:: date('due_date', null,  ['class' => 'form-control']) }}

<div class="row justify-content mt-3">
    <div class="col-md-4">
        <button class="btn btn-group-sm btn-block btn-success" type="submit">Save task</button>
    </div>
    {{-- <div class="col-md-2">
    <a href="{{ route('task.index')}}" class="btn btn-group-sm btn-block btn-secondary ml-3">Task list</a>
    </div> --}}
</div>

