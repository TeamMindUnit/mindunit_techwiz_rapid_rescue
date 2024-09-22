@extends('layouts.admindashboard')
@section('admindashbaord')

<table class="table text-center table-bordered mt-5">
<tr>
<th>Name</th>
<th>Service</th>
<th>Reviews</th>
</tr>

@foreach($view as $s)
<tr>
<td>{{$s->name}}</td>
<td>{{$s->service}}</td>
<td>{{$s->feedback}}</td>

    </tr>

@endforeach

</table>
<!-- <a href="/exceldata5" class="btn btn-success mt-5">Export Into Excel</a> -->


@endsection