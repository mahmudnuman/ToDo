@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials._messages')
            <div class="panel panel-default">

                <div class="panel-heading">Create New Task</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     @component('components.TaskForm')
                     @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
