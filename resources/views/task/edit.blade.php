@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">{{ __('edit task') }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">{{ __('edit task') }}</div>
                <div class="card-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $task->name }}">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="list-group">
                                        @foreach($errors->get('name') as $error)
                                            <li class="list-group-item">
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">{{ __('save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
