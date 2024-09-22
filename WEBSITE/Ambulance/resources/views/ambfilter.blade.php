@extends('layouts.user_dashboard')
@section('userdashboard')


<form action="{{URL::TO('/userfilterdata')}}" method="POST">
@csrf
<input type="search" class="form-control w-50 mt-3 text-dark" placeholder="Search Here" name="usersearch">


<button class="btn btn-success mt-3">Search here</button> 
</form>

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
<th>Tracking Id</th>



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