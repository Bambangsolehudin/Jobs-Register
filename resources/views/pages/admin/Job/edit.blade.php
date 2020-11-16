@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-8">	
  		  <h1 class="mt-4">Edit Data Post</h1>
  		  
         <form action="{{route('jobs.update', $job->id)}}" method="post">
          @method('patch')
          @csrf
            <div class="form-group">
              <label for="user_id">UserID</label>
              <input type="text" class="form-control @error('user_id') is-invalid @enderror"  id="user_id" placeholder="Masukan UserID" name="user_id" value="{{Auth::user()->id}}" readonly="">
            </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukan Title" name="title" value="{{ $job->title }}">
               <div class="invalid-feedback">
                @error('title')
                {{$message}}
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="description" >Deskripsi</label>
              <textarea name="description" class="form-control @error('description') is-invalid @enderror" >
                {{$job->description}}
              </textarea>
               @error('description')
                {{$message}}
               @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>

			</div>
		</div>
	</div>
	@endsection

