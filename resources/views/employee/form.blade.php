@extends('layouts')
	
	@section('content')
	
	<h2 class="divider">Employee - {{ $action }} </h2>

	<hr/>

	{!! Form::model($model , ['enctype' => 'multipart/form-data']) !!}
	  
	   <div class="form-group">
	    <label>Position</label>
	  
	    {!! Form::select('position_id' , $positions ,  null , ['class' => 'form-control']) !!}
	  
	  	<div class="larabsent_error">
	  		
	  		{{ $errors->first('position_id') }}
	  			
	  	</div>
	  
	  </div>

	  <div class="form-group">
	    <label>Nip</label>
	  
	    {!! Form::text('nip' ,  null , ['class' => 'form-control']) !!}
	  
	  	<div class="larabsent_error">
	  		
	  		{{ $errors->first('nip') }}
	  			
	  	</div>
	  
	  </div>

	  <div class="form-group">
	    <label>Name</label>
	  
	    {!! Form::text('name' ,  null , ['class' => 'form-control']) !!}
	  
	  	<div class="larabsent_error">
	  		
	  		{{ $errors->first('name') }}
	  			
	  	</div>
	  
	  </div>

	  <div class="form-group">
	    <label>Gender</label>
	  
	    {!! Form::select('gender' ,  ['p' => 'Pria' ,  'w' => 'Wanita'] , null , ['class' => 'form-control' ]) !!}
	  
	  	<div class="larabsent_error">
	  		
	  		{{ $errors->first('gender') }}
	  			
	  	</div>
	  
	  </div>
	  
	  <div class="form-group">
	    <label>Phone</label>
	  
	    {!! Form::text('phone' ,  null , ['class' => 'form-control' ,'maxlength' => 15]) !!}
	  
	  	<div class="larabsent_error">
	  		
	  		{{ $errors->first('phone') }}
	  			
	  	</div>
	  
	  </div>

	  <div class="form-group">
	    <label>Email</label>
	  
	    {!! Form::text('email' ,  null , ['class' => 'form-control']) !!}
	  
	  	<div class="larabsent_error">
	  		
	  		{{ $errors->first('email') }}
	  			
	  	</div>
	  
	  </div>

	  <div class="form-group">
	    <label>Photo</label>
	  
	    {!! Form::file('photo') !!}
	  
	  	<div class="larabsent_error">
	  		
	  		{{ $errors->first('photo') }}
	  			
	  	</div>
	  
	  </div>

	  @if(!empty($model->photo))

	  	<div class="form-group">
		    <label>Old Photo</label>
		  	<br/>
		    <img src="{{ \Larabsent::assetUrl(\Larabsent::contents().'/'.$model->photo) }}" width = '200' height="200" />
		  
		  	<div class="larabsent_error">
		  		
		  		{{ $errors->first('photo') }}
		  		<input type = 'hidden' name = 'oldPhoto' value = '{{ $model->photo }}' />
		  	</div>
		  
		  </div>

	  @endif

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




