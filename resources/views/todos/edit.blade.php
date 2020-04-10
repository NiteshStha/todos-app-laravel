@extends('layouts.app')

@section('title')
Edit Todo
@endsection

@section('content')

<h1 class="text-center my-4">Create Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Edit todo</div>
            <div class="card-body">
                @if($errors->any())
                <div class="div alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <li class="list-group-item">
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="/update" method="POST">
                    @csrf
                    <input type="hidden" name="todo_id" value="{{ $todo->id }}" />
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Decription" name="description" cols="5" rows="5">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
