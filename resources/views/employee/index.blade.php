@extends('layouts')
	
	@section('content')
	
	@if(\Session::has('message'))

		{!! Larabsent::message('Sukses' , \Session::get('message') , 'success' , 'Close') !!}
	
	@endif

	@if(\Session::has('info'))

		{!! Larabsent::message('Info' , \Session::get('info') , 'info' , 'Close') !!}
	
	@endif

	<h2 class="divider">Position</h2>

	
	<div id = 'larabsent_table'>

		<a href = '{{ url("employee/create") }}' class="btn btn-success">Tambah Data</a>
		
		<hr />
	    
	    <table class="table" id="larabsent-table">
	        <thead>
	            <tr>
	           		<th>Name</th>
	           		<th>Nip</th>
	                <th>Position</th>
	                <th>E-Mail</th>
	                <th>Aksi</th>
	            </tr>
	        </thead>
	    </table>
	
	 </div>  	
	
	<script>
		$(function() {
		    $('#larabsent-table').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: '{{ url("employee/data") }}',
		        columns: [
		            { data: 'name', name: 'employees.name' },
		            { data: 'nip', name: 'employees.nip' },
		            { data: 'position', name: 'positions.position' },
		            { data: 'email', name: 'employees.email' },
		            { data: 'action', name: 'action' },
		        ]
		    });
		    
		    
		});

	</script>


	@endsection

@stop




