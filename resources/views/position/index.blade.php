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

		<a href = '{{ url("position/create") }}' class="btn btn-success">Tambah Data</a>
		
		<hr />
	    
	    <table class="table" id="larabsent-table">
	        <thead>
	            <tr>
	                <th>Position</th>
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




