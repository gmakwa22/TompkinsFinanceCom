@extends('admin.layouts.app')

@section('content')


<div id="buyer_view">
	<div class="persolnal_detai_buyer">
	  	@if($buyer_deatils->profile_image)
            <img src="{{ url('').'/profile_images/'.$buyer_deatils->id.'/'.$buyer_deatils->profile_image }}" height="65" width="65" class="avatar">
        @else
            <img src="{{ asset('/images/agentdummy.png') }}" height="65" width="65" class="avatar">
        @endif
	    <div class="content_buy">
        	<h4 class="font-weight-bold mb-0">{{ $buyer_deatils->name }}
	          	<span class="text-muted font-weight-normal">@ {{ $buyer_deatils->email }}</span>
	        </h4>
	        <div class="text-muted mb-2">ID: 0000{{ $buyer_deatils->id }}</div>
	        @if($buyer_deatils->role == 2)
				<a href="{{ url('/admin/adminagents/'.$buyer_deatils->id.'/update')}}" class="btn btn-primary btn-sm">Edit</a>&nbsp;
			@else
				@if($buyer_deatils->role == 3)
					<a href="{{ url('/admin/simpleagents/'.$buyer_deatils->id.'/update')}}" class="btn btn-primary btn-sm">Edit</a>&nbsp;
				@else
					<a href="{{ url('/admin/customers/'.$buyer_deatils->id.'/update')}}" class="btn btn-primary btn-sm">Edit</a>&nbsp;
				@endif
			@endif

	        
	        
	        <a href="mailto:{{ $buyer_deatils->email }}" class="btn btn-default btn-sm icon-btn">
	        	<i class="fa fa-envelope"></i>
	        </a>
	    </div>
    </div>

    <div class="card mb-4">
		<div class="card-body">
			<table class="table user-view-table m-0">
				<tbody>
					<tr>
						<td>Registered:</td>
						<td>{{ $buyer_deatils->created_at }}</td>
					</tr>
					<tr>
						<td>Latest activity:</td>
						<td>{{ $buyer_deatils->updated_at }}</td>
					</tr>
					<tr>
						<td>Verified:</td>
						<td>
							<i class="fa fa-check text-primary"></i>&nbsp; Yes
						</td>
					</tr>
					<tr>
						<td>Role:</td>
						<td>
						@if($buyer_deatils->role == 2)
							Agency
						@else
							@if($buyer_deatils->role == 3)
								Admin Agent
							@else
								Buyer
							@endif
						@endif
						</td>
					</tr>
					<tr>
						<td>Status:</td>
						<td>
							<span class="badge badge-outline-success">{{ ($buyer_deatils->status == 1)?'Active':'Inactive' }}</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
	</div>					

    <div class="card">
		<div class="row no-gutters row-bordered">
			<!-- <div class="d-flex col-md-4 align-items-center">
				<a href="javascript:void(0)" class="card-body d-block text-dark">
				<div class="text-muted small line-height-1">Posts</div>
				<h1 class="text-xlarge">125</h1>
				</a>
			</div>
			<div class="d-flex col-md-4 align-items-center">
				<a href="javascript:void(0)" class="card-body d-block text-dark">
				<div class="text-muted small line-height-1">Followers</div>
				<h1 class="text-xlarge">534</h1>
				</a>
			</div>
			<div class="d-flex col-md-4 align-items-center">
				<a href="javascript:void(0)" class="card-body d-block text-dark">
				<div class="text-muted small line-height-1">Following</div>
				<h1 class="text-xlarge">236</h1>
				</a>
				</div>
			</div> -->
			<hr class="border-light m-0">
			<div class="card-body">

			<table class="table user-view-table m-0">
				<tbody>
					<tr>
						<td>Username:</td>
						<td>{{ $buyer_deatils->name }}</td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td>{{ $buyer_deatils->fname }}</td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td>{{ $buyer_deatils->lname }}</td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td>{{ $buyer_deatils->email }}</td>
					</tr>
				</tbody>
			</table>


			<h4 class="mt-4 mb-3"><strong>Personal info</strong></h4>

			<table class="table user-view-table m-0">
				<tbody>
					<tr>
						<td>Address:</td>
						<td>{{ $buyer_deatils->address }}</td>
					</tr>
					<tr>
						<td>Zipcode:</td>
						<td>{{ $buyer_deatils->zipcode }}</td>
					</tr>
					@if($buyer_deatils->role == 2 || $buyer_deatils->role == 3)
						<tr>
							<td>Web Address:</td>
							<td>{{ $buyer_deatils->web_address }}</td>
						</tr>
						<tr>
							<td>Agent ID:</td>
							<td>{{ $buyer_deatils->agent_id }}</td>
						</tr>
					@endif
				</tbody>
			</table>
			

			
			<h4 class="mt-4 mb-3"><strong>Contacts</strong></h4>

			<table class="table user-view-table m-0">
				<tbody>
					<tr>
						<td>Phone Number:</td>
						<td>{{ $buyer_deatils->phone_no }}</td>
					</tr>
					<tr>
						<td>Mobile Number:</td>
						<td>{{ $buyer_deatils->mobile_no }}</td>
					</tr>
					@if($buyer_deatils->role == 2 || $buyer_deatils->role == 3)
						<tr>
							<td>Licence Number:</td>
							<td>{{ $buyer_deatils->licence_no }}</td>
						</tr>
						<tr>
							<td>ABN Number:</td>
							<td>{{ $buyer_deatils->abn_no }}</td>
						</tr>
					@endif
				</tbody>
			</table>	

			@if($buyer_deatils->role == 2 || $buyer_deatils->role == 3)
				<h4 class="mt-4 mb-3"><strong>Property Details</strong></h4>
				<table class="table user-view-table m-0">
					<tbody>
						
							<tr>
								<td>Number of House:</td>
								<td>{{ ($agent_detail)?$agent_detail->no_of_house:''}}</td>
							</tr>
							<tr>
								<td>Property:</td>
								<td>{{ ($agent_detail)?$agent_detail->no_of_property:''}}</td>
							</tr>
						
					</tbody>
				</table>	
			@endif

		</div>
	</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">

</script>

@endsection