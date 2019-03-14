{{ Form::open(['route' => 'task.update',$task->id,'method'=> 'POST'])  }}

{{ Form::label('name','Task Name', ['class' => 'control-label'])}}
{{ Form::text('name',$task->name, ['class' => 'form-control form-control-lg','Placeholder' =>'Name of The Task'])}}

{{ Form::label('description','Description', ['class' => 'control-label'])}}
{{ Form::textarea('description',$task->description, ['class' => 'form-control','Placeholder' =>'Task Description'])}}

{{ Form::label('due_date','Due Date', ['class' => 'control-label'])}}
{{ Form::date('due_date',$task->due_date,['class' => 'form-control'])}}
{{Form::hidden('_method','PUT')}}

	<div class="row justify-content-center mt-3">

		<div class="col-sm-6">
			
			<button class="btn btn-block btn-success" type="Submit">Submit</button>

		</div>

	</div>

{{  Form::close()  }}