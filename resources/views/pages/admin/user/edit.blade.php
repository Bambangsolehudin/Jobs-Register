@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8"> 
          <h1 class="mt-4">Data User</h1>
          <marquee> Lengkapi Jika Data Belum Lengkap</marquee>
         <form action="{{route('profils.update', $profil->id)}}" method="post">
          @method('patch')
          @csrf
            <div class="form-group">
              <label for="user_id">UserID</label>
              <input type="text" class="form-control @error('user_id') is-invalid @enderror"  id="user_id" placeholder="Masukan UserID" name="user_id" value="{{Auth::user()->id}}" readonly="">
            </div>
            <div class="form-group">
              <label for="job">Job</label>
              <input type="text" class="form-control @error('job') is-invalid @enderror"  id="job" placeholder="Masukan UserID" name="job" value="{{$profil->job->name}}" readonly="">
            </div>
            <div class="form-group">
              <label for="NIK">NIK</label>
              <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="NIK" placeholder="Masukan Title" name="NIK" value="{{ $profil->NIK }}">
               <div class="invalid-feedback">
                @error('NIK')
                {{$message}}
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="pendidikan_terakhir">pendidikan_terakhir</label>
              <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" id="pendidikan_terakhir" placeholder="Masukan Title" name="pendidikan_terakhir" value="{{ $profil->pendidikan_terakhir }}">
               <div class="invalid-feedback">
                @error('pendidikan_terakhir')
                {{$message}}
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="kampus">kampus</label>
              <input type="text" class="form-control @error('kampus') is-invalid @enderror" id="kampus" placeholder="Masukan Title" name="kampus" value="{{ $profil->kampus }}">
               <div class="invalid-feedback">
                @error('kampus')
                {{$message}}
                @enderror
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>

            </div>
        </div>
    </div>
    @endsection

