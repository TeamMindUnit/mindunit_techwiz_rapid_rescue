@extends('layouts.admindashboard')
@section('admindashbaord')

<div class="container-fluid">
<table class="table  table-bordered mt-5">
<tr>
<th>AUTHOR NAME</th>
<th>DATE</th>
<th>BLOG TITLE</th>
<th>PROFILE</th>
 <th>Action</th>
</tr>
@foreach($viewdriver as $v)
<tr>
<td>{{$v->Author_Name}}</td>
<td>{{$v->Date}}</td>
<td>{{$v->Blog_Title}}</td>
<td> <img src="/{{$v->Profile}}" class=" rounded-circle " width="100%" height="120px" alt=""></td>
<td>
   <a  href="/blogdelete/{{$v->id}}"><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>&nbsp;&nbsp;
</td>
    </tr>
@endforeach
</table>
</div>
</div>   
   <!-- page-body-wrapper ends -->
  </div>

@endsection