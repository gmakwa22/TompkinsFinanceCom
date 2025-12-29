@extends('admin.layouts.app')

@section('content')
<style type="text/css">
	.dataTables_filter{
		top: 0; 
	}
	div#DataTables_Table_0_filter
	{
		margin-top: 30px;
	}
</style>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB --> 

<div class="page-content-wrap">

<!-- START WIDGETS -->                    
<div class="row">
	<div class="col-md-12">
		<h2>Listing Agency <!-- <a href="{{url('admin/users/create')}}"><button>Add New</button></a> --></h2>

		@if(Session::has('flash_message_error'))
			<div class="alert alert-danger alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{!! session('flash_message_error') !!}</strong>
			</div>
		@endif

		@if(Session::has('flash_message_success'))
			<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{!! session('flash_message_success') !!}</strong>
			</div>
		@endif

	</div>
</div>
<div class="clearfix"></div>
<div class="row">

	<div class="col-md-12">

		@if(count($users))
			<form name="filter" method="get">
				{{ csrf_field() }}
				<label>Status: </label>
				<select name="status_search">
					<option value="">--Select Role--</option>
					<option value="1" {{ (isset($_GET['filter']))?(($_GET['status_search'] == 1)?"selected":''):'' }}>Active</option>
					<option value="0" {{ (isset($_GET['filter']))?(($_GET['status_search'] == 0 && $_GET['status_search'] != '' )?"selected":''):'' }}>Inactive</option>
				</select>
				<label for="from">Date From </label>
				<input type="text" id="from" name="from" value="{{ (isset($_GET['filter']))?(($_GET['from'])?$_GET['from']:''):'' }}">
				<label for="to"> to</label>
				<input type="text" id="to" name="to" value="{{ (isset($_GET['filter']))?(($_GET['to'])?$_GET['to']:''):'' }}">
				<input type="submit" name="filter" value="Filter">
				<a href="{{ url('admin/adminagents') }}">
					<button type="button" name="reset" value="Reset">Reset</button>
				</a>
			</form>
			<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Status</th>
					<th>Created Date</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php $i=1; ?>
					@foreach($users as $user)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>
								@if($user->role == 1)
									Super admin
								@elseif($user->role == 2)
									Agency
								@elseif($user->role == 3)
									Simple Agent
								@else
									Buyer
								@endif
							</td>
							<td>
								@if($user->status == 1)
									Active
								@else
									Inactive
								@endif
							</td>
							<td>{{ $user->created_at }}</td>
							<td>
								<a href='{{ url("admin/adminagents/{$user->id}/update") }}' title="edit" class=" btn btn-primary"><i class="fa fa-edit"></i></a>
								<a href='{{ url("admin/adminagents/{$user->id}/delete") }}' onclick="return confirm('Are you sure to delete this user?')"  class=" btn btn-danger" title="delete"><i class="fa fa-trash"></i></a>
								<a href='{{ url("admin/customers/{$user->id}/customer_view") }}'  class=" btn btn-info" title="view"> <i class="fa fa-eye"></i></a>
								<a href='{{ url("admin/customers/{$user->id}/view") }}' class="btn btn-success" title="view agents"><i class="fa fa-users"></i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		@else
			<p>No users found here !</p>
		@endif

	</div>
</div>
<!-- END WIDGETS -->                    


</div>

@endsection

@section('scripts')

<script type="text/javascript">
	$( function() {
	    var dateFormat = "mm/dd/yy",
	      from = $( "#from" )
	        .datepicker({
	          defaultDate: "+1w",
	          changeMonth: true,
	          changeYear: true,
	          numberOfMonths: 1
	        })
	        .on( "change", function() {
	          to.datepicker( "option", "minDate", getDate( this ) );
	        }),
	      to = $( "#to" ).datepicker({
	        defaultDate: "+1w",
	        changeMonth: true,
	        changeYear: true,
	        numberOfMonths: 1
	      })
	      .on( "change", function() {
	        from.datepicker( "option", "maxDate", getDate( this ) );
	      });
	 
	    function getDate( element ) {
	      var date;
	      try {
	        date = $.datepicker.parseDate( dateFormat, element.value );
	      } catch( error ) {
	        date = null;
	      }
	 
	      return date;
	    }
	  } );
</script>

@endsection