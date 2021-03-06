@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-13 col-md">

		


				<h4 style="text-align: center;margin-top: 0px;color: green">Pending Tasks</h4> 

            @include('partials._messages')
            
            <div class="panel panel-default">
		
		


		<div class="panel-body">


			<div class="table-responsive">

  <table class="table">
    <thead>
      <tr>
        <th>Sl</th>
        <th>Task Name </th>
        <th>Description</th>
        <th>Task Date</th>
        <th>Created At</th>
        @if (Auth::user())
        <th>Actions</th>
        @endif
        
      </tr>
    </thead>
    <tbody>
    	<?php $sl=0; ?>
    	@foreach($tasks as $task)
      <tr>
        <td>{{++$sl}}</td>
        <td>{{$task->name}}</td>
        <td>{{ str_limit($task->description, $limit = 50, $end = '') }}<a href="/view/{{$task->id}}">....</a></td>
        <td>{{$task->due_date}}</td>
        <td>{{-- {{$task->created_at}} --}}{{date('d-m-Y h:i a', strtotime($task->created_at))}}</td>
        @if (Auth::user())
        <td>

        	<a href="/done/{{$task->id}}" class="btn btn-success" role="button">Done</a>

        	<a href="/edit/{{$task->id}}" class="btn btn-primary" role="button">Edit</a>
        	
        	<a href="/destroy/{{$task->id}}" class="btn btn-danger" role="button">Delete</a>

        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

			
			
		</div>
		
	
</div>
</div>
@endsection()