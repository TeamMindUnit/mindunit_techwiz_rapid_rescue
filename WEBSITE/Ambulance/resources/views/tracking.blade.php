@extends('layouts.head_foot')
@section('amb')


<br><br>
<center>
<form  action="{{URL::TO('/filterdata')}}" method="POST">
@csrf
<input type="search" class="form-control w-50 mt-3 text-dark" placeholder="Search Here" name="usersearch">
<button class="btn btn-success mt-3">Search here</button> 
</form>
<div class="container-fluid ">
<table class="table text-center table-bordered mt-5 text-dark">
<tr>
<th>Full_name</th>
<th>Email</th>
<th>Date</th>
<th>Time</th>
<th>Phone</th>
<th>Drivers</th>
<th>Address</th>
<th>Condition</th>
<th>Status</th>
<th>Track ID</th>
</tr>
@foreach($track as $u)
<tr>

<td>{{$u->Full_name}}</td>
<td>{{$u->Email}}</td>
<td>{{$u->Date}}</td>
<td>{{$u->Time}}</td>
<td>{{$u->Phone}}</td>
<td>{{$u->Drivers}}</td>
<td>{{$u->Address}}</td>
<td>{{$u->Condition}}</td>
<td>{{$u->Status}}</td>
<td>{{$u->Tracking_id}}</td>


</tr>

@endforeach

</table>
    
      </div>

<br><br>


</center>

@endsection