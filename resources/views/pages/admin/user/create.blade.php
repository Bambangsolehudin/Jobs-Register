@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8"> 
          <h1 class="mt-4">Data Jobs</h1>
          <marquee> Lengkapi Jika Data Belum Lengkap</marquee>
         <form action="{{route('profil.store')}}" method="post">
          @csrf
            <div class="form-group">
              <label for="user_id">UserID</label>
              <input type="text" class="form-control @error('user_id') is-invalid @enderror"  id="user_id" placeholder="Masukan UserID" name="user_id" value="{{Auth::user()->id}}" readonly="">
            </div>
            <div class="form-group">
              <label for="job">Job</label>
              <select name="job_id" required class="form-control">
                  <option value="">Pilih Jobs</option>
                  @foreach($jobs as $job)
                      <option value="{{ $job->id }}">
                          {{ $job->title }}
                      </option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="NIK">NIK</label>
              <input type="number" class="form-control @error('NIK') is-invalid @enderror" id="NIK" placeholder="Masukan NIK" name="NIK">
               <div class="invalid-feedback">
                @error('NIK')
                {{$message}}
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="pendidikan_terakhir">Pendidikan terakhir</label>
              <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" id="pendidikan_terakhir" placeholder="Masukan Pendidikan Terakhir" name="pendidikan_terakhir">
               <div class="invalid-feedback">
                @error('pendidikan_terakhir')
                {{$message}}
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="kampus">kampus</label>
              <input type="text" class="form-control @error('kampus') is-invalid @enderror" id="kampus" placeholder="Masukan kampus/tempat pendidikan terakhir" name="kampus">
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

