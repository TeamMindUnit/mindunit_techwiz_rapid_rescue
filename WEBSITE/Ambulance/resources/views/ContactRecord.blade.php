@extends('layouts.admindashboard')
@section('admindashbaord')

<div class="container-fluid">
<table class="table  table-bordered mt-5">
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>SUBJECT</th>
<th>MESSAGE</th>
 <th>Action</th>
</tr>
@foreach($con as $c)
<tr>
<td>{{$c->Full_Name}}</td>
<td>{{$c->Email}}</td>
<td>{{$c->Phone}}</td>
<td>{{$c->Subject}}</td>
<td>{{$c->Message}}</td>
<td>
    <a href="/contactdelete/{{$c->id}}" ><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>
</td>
    </tr>
@endforeach
</table>
<!-- <a href="/exceldata" class="btn btn-info fas fa-upload mt-3">&nbsp;Export To Excel</a> -->
</div>
</div>   
    <!-- page-body-wrapper ends -->
  </div>
@endsection