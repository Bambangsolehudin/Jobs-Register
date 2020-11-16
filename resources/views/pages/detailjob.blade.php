@extends('layouts.frontend')
@section('content')
        <!-- Masthead-->
    

        <!-- content -->
        <div class="container mt-6">
	        <div class="text-center ">
	        	<h2 class="section-heading text-uppercase"><br><br></h2>
	            <h2 class="section-heading text-uppercase">Help Wanted for</h2>
	            <h3 class="section-subheading text-muted">{{$item->title}}</h3>
	            <p class="section-subheading text-darken">{{date('d F Y',strtotime($item->created_at))}}</p>
	            <br><br>


	        </div>
	        <div class="card">
			  <h5 class="card-header">Description</h5>
			  <div class="card-body">
			    <h5 class="card-title">{{$item->title}}</h5>
			    <p class="card-text">{{$item->description}}</p>
			    <div class="text-right">
			    <p class="card-text text-muted">oleh : {{$item->user->name}}</p>
			    </div>
			    <div class="text-center">
			    	<a href="#" class="btn btn-primary">Apply</a>
			    </div>
			  </div>
			</div>
        </div>

@endsection