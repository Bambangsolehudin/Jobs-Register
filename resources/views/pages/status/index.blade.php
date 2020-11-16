x@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Status Kelulusan</h1>
  </div>

  <!-- Content Row -->

  <div class="row">


    <div class="col-lg-10 md-auto align-items-center">
    	<div class="card">
    		<div class="card-body">
    			@if($item->status)
    			<h3>{{$item->status}}</h3>
    				
    			@else
    			<marquee><h3>Belum Ada Hasil</h3></marquee>
    			@endif
    		</div>		
    	</div>

    </div>

  </div>

  <!-- Content Row -->
</div>
</div> 
<!-- /.container-fluid -->
@endsection