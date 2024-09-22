@extends('layouts.admindashboard')
@section('admindashbaord')

<div class="container-fluid">
<table class="table  table-bordered mt-5">
<tr>
<th>NAME</th>
<th>AMBULANCE NO.</th>
<th>HOSPITAL NAME </th>
<th>PHONE</th>
<th>DRIVERS NAME</th>
<th>PROFILE</th>
</tr>

@foreach($fac as $f)
<tr>
<td>{{$f->Name}}</td>
<td>{{$f->Ambulanceno}}</td>
<td>{{$f->Hospitalname}}</td>
<td>{{$f->Phone}}</td>
<td>{{$f->Drivername}}</td>
<td> <img src="/{{$f->Profile}}" class=" rounded-circle " width="100%" height="120px" alt=""></td>


    </tr>

@endforeach

</table>
<!-- <a href="/exceldata" class="btn btn-info fas fa-upload mt-3">&nbsp;Export To Excel</a> -->

</div>

</div>   
 
    <!-- page-body-wrapper ends -->
  </div>

@endsection