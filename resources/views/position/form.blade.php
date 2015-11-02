@extends('layouts')
	
	@section('content')
	
	<h2 class="divider">Position - {{ $action }} </h2>

	<hr/>

	{!! Form::model($model) !!}
	  
	  <div class="form-group">
	    <label>Position</label>
	  
	    {!! Form::text('position' ,  null , ['class' => 'form-control']) !!}
	  
	  	<div class="larabsent_error">
	  		
	  		{{ $errors->first('position') }}
	  			
	  	</div>
	  
	  </div>
	  
	  <button type="submit" class="btn btn-info">Submit</button>
	  
	{!! Form::close() !!}
	
	<script>
		$(function() {
		    $('#larabsent-table').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: '{{ url("position/data") }}',
		        columns: [
		            { data: 'position', name: 'position' },
		            { data: 'action', name: 'action' },
		        ]
		    });
		    
		    
		});

	</script>


	@endsection

@stop




