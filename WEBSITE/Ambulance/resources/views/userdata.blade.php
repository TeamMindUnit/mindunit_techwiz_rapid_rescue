@extends('layouts.admindashboard')
@section('admindashbaord')

<link rel="stylesheet" href="../dash/css/vertical-layout-light/style.css">
<table class="table text-center table-bordered mt-3">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Action</th>
    <th>Export</th>
</tr>
@foreach($abc as $a)
<tr>
    <td>{{$a->name}}</td>
    <td>{{$a->email}}</td>
    <td>{{$a->role}}</td>
<td>
    <a href="/signupdelete/{{$a->id}}"><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/signupupdate/{{$a->id}}"><i class="fas fa-edit"   style="font-size:28px;color:green"></i></a>
</td>
<td>
<a href="/exceldata1" ><i class="fas fa-upload"   style="font-size:28px;color:light-green"></i></a>
</td>
<i class=""></i>
    </tr>
@endforeach
</table>
@endsection