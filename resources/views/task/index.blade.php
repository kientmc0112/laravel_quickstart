@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">{{ __('list task')}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    {{ __('list task') }}
                    <a href="/new_task" class="btn btn-primary btn-sm float-right">{{ __('create task') }}</a>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($tasks as $task)
                            <li class="list-group-item">
                                {{ $task->name }}
                                <a href="/tasks/{{ $task->id }}/delete" class="btn btn-danger btn-sm float-right mr-2">{{ __('delete') }}</a>
                                <a href="/tasks/{{ $task->id }}/edit" class="btn btn-success btn-sm float-right mr-2">{{ __('edit') }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
