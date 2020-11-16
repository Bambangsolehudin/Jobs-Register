@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Details Post</h1>
  </div>
  <div class="row">
    <div class="col-lg-10 md-auto align-items-center"> 
   <div class="card">
    <div class="card-body">
      <h5 class="card-title">Judul : {{$post->title}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">User : {{$post->user_id}}</h6>
      <p class="card-text">{{$post->description}}</p>
      <p class="card-text">{{date('d F Y',strtotime($post->created_at))}}</p>
      
      <a href="{{$post->id}}/edit" class="btn btn-primary">Edit</a>
      <form action="{{$post->id}}" method="post" class="d-inline">
        @method('delete')
        @csrf
       <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      <a href="/students" class="card-link">kembali</a>
    </div>
  </div>

    </div>
  </div>
</div>
@endsection

