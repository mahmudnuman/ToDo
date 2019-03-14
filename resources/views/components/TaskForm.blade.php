{{ Form::open(['route' => 'task.store','method'=> 'POST'])  }}

{{ Form::label('name','Task Name', ['class' => 'control-label'])}}
{{ Form::text('name','', ['class' => 'form-control form-control-lg','Placeholder' =>'Name of The Task'])}}

{{ Form::label('description','Description', ['class' => 'control-label'])}}
{{ Form::textarea('description','', ['class' => 'form-control','Placeholder' =>'Task Description'])}}

{{ Form::label('due_date','Due Date', ['class' => 'control-label'])}}
{{ Form::date('due_date',\Carbon\Carbon::now(),['class' => 'form-control'])}}

	<div class="row justify-content-center mt-3">

		<div class="col-sm-6">
			
			<button class="btn btn-block btn-success" type="Submit">Submit</button>

		</div>

	</div>

{{  Form::close()  }}