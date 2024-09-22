@extends('layouts.user_dashboard')
@section('userdashboard')

<table class="table text-center table-bordered mt-5">
<tr>
<th>Name</th>
<th>Service</th>
<th>Reviews</th>
</tr>
@foreach($view as $v)
<tr>
<td>{{$v->name}}</td>
<td>{{$v->service}}</td>
<td>{{$v->feedback}}</td>
    </tr>
@endforeach
</table>
<!-- <a href="/exceldata5" class="btn btn-success mt-5">Export Into Excel</a> -->


@endsection