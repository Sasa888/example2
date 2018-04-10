@extends('admin::layouts.admin')

@section('admin-content')
	
<link href="css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">



	<div class="admin-header">
		<h1>Users</h1>
		<span class="last-update"></span>
		<div class="button-wrap">
			
		</div>
	</div>

	<div class="admin-content">
		<div class="pages-list">
			<table class="table" id="users-info">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">First Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">Naional Number</th>
				      <th scope="col">Device</th>
				      <th scope="col">Reimbursment</th>
				      <th scope="col">Warranty</th>
				    </tr>
				  </thead>
				  <tbody>
					 @if(count($users) > 0)
				  		@foreach($users as $user)	   
							<tr>
							     <th scope="row">{{ $user->id }}</th>
							     <td>{{ $user->firstname }}</td>
							     <td>{{ $user->lastname }}</td>
							     <td>{{ $user->phone }}

								@foreach($user->homedatas as $homedata)
							     	 <tr>
								      <td>{{$homedata->device}}</td>
								      <td>{{$homedata->reimburse_Pension}}</td>
								      <td>{{$homedata->bonus_remainder}}</td>
							 	 </tr>
					   			@endforeach
					 			</td>
					 		</tr>
				   		@endforeach		
				  	@endif
				  </tbody>
			</table>

			<script type="text/javascript">
				$(document).ready(function(){
					$('#users-info').DataTable({

								 dom: 'Bfrtip',
					        	buttons: [
					            'excelHtml5',
					            'csvHtml5',
					            'pdfHtml5'
        ]

					});
				});
			</script> 
		</div>
	</div>


	<script src="scripts/jquery-1.12.4.js"></script>
	<script src="scripts/jquery.dataTables.min.js"></script>
    <script src="scripts/dataTables.buttons.min.js"></script>
    <script src="scripts/jszip.min.js"></script>
    <script src="scripts/pdfmake.min.js"></script>
    <script src="scripts/vfs_fonts.js"></script>
    <script src="scripts/buttons.html5.min.js"></script>

@stop



{{-- @php
dd($users);
@endphp
--}}
