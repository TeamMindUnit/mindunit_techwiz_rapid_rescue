@extends('layouts.admindashboard')
@section('admindashbaord')

<div class="container-fluid">
<table class="table  table-bordered mt-5">
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>STATUS</th>
<th>PHONE</th>
<th>PASSWORD</th>
<th>PROFILE</th>
 <th>Action</th>
</tr>
@foreach($viewdriver as $v)
<tr>
<td>{{$v->Name}}</td>
<td>{{$v->Email}}</td>
<td>{{$v->Status}}</td>
<td>{{$v->Phone}}</td>
<td>{{$v->Password}}</td>
<td> <img src="/{{$v->Profile}}" class=" rounded-circle " width="100%" height="120px" alt=""></td>
<td>
   <a  href="/driverdelete/{{$v->id}}"><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>&nbsp;&nbsp;
</td>
    </tr>
@endforeach
</table>
</div>
</div>   
    <!-- page-body-wrapper ends -->
  </div>
@endsection