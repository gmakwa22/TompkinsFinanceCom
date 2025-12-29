@extends('admin.layouts.app')

@section('content')

<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Home</a></li>                    
        <li class="active">Customer</li>
    </ul>
    <div class="page-content-wrap">

    <!-- START WIDGETS -->                    
    <div class="row">
      <div class="col-md-12">
        <h2>Agent Listing ({{ $user->name }})</h2>
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
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Date</th> 
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach( $admin_agent_customer as $gets )
                <tr class="gradeX">
                  <td>{{ $gets->id }}</td>
                  <td>{{ $gets->name }}</td>
                  <td>{{ $gets->email }}</td>
                  <td>
                    @if($gets->role == 1)
                      Super admin
                    @elseif($gets->role == 2)
                      Agent
                    @elseif($gets->role == 3)
                      Simple Agent
                    @else
                      Buyer
                    @endif
                  </td>
                  <td>
                    @if($gets->status == 1)
                      Active
                    @else
                      Inactive
                    @endif
                  </td>
                  <td>{{$gets->created_at}}</td>
                  <td>
                    <a href='{{ url("admin/simpleagents/{$gets->id}/update") }}'  class=" btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href='{{ url("admin/simpleagents/{$gets->id}/delete") }}' onclick="return confirm('Are you sure to delete this user?')"  class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                    <a href='{{ url("admin/customers/{$gets->id}/customer_view") }}'  class=" btn btn-info" title="view"> <i class="fa fa-eye"></i></a>
                  </td>
                </tr>
                @endforeach
             </tbody>
          </table>
      </div>
    </div>
</div>

@endsection