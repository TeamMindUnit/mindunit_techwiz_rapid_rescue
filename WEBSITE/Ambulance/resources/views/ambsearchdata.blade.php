@extends('layouts.user_dashboard')
@section('userdashboard')

<div class="container">
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
<th>Tracking ID</th>
</tr>
@foreach($mydata as $u)
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
@endsection