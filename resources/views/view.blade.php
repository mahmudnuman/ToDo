@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials._messages')
            <div class="panel panel-default">

                <div class="panel-heading">View Task</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Form::open()  }}

{{ Form::label('name','Task Name', ['class' => 'control-label'])}}
{{ Form::text('name',$task->name, ['class' => 'form-control form-control-lg','readonly','Placeholder' =>'Name of The Task'])}}

{{ Form::label('description','Description', ['class' => 'control-label'])}}
{{ Form::textarea('description',$task->description, ['class' => 'form-control','readonly','Placeholder' =>'Task Description'])}}

{{ Form::label('due_date','Due Date', ['class' => 'control-label'])}}
{{ Form::date('due_date',$task->due_date,['class' => 'form-control','readonly'])}}
{{Form::hidden('_method','PUT')}}

    

{{  Form::close()  }}

<div class="row justify-content-center mt-4">

        <div class="col-sm-2">
            
          <a href="/"><button class="btn btn-block btn-success" >Go Back</button></a>

        </div>

    </div>
                    {{--  @component('components.EditForm')
                     @endcomponent --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection