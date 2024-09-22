@extends('layouts.Driverdashboard')
@section('driver')

<div class="container-fluid">
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
</tr>
@foreach($ambrecord as $u)
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
</tr>
@endforeach
</table>
      </div>



@endsection