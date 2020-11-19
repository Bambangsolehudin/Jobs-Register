@extends('layouts.admin')

@section('content')
    <div class="container" style="height: 500px;">

        <div class="row">
          <div class="col-12"> 
          <h1 class="mt-4">Data User</h1> <br> <br>
        </div>
        <marquee><h5 style="color: blue; font-weight: bold;">::Lengkapi data Jobs jika ingin diproses lebih lanjut::</h5></marquee>
        <div class="col-12 mt6">
            <table style="font-size: 20px;">
                <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td>{{Auth::user()->name}}</td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td>{{Auth::user()->username}}</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td>{{Auth::user()->email}}</td>
                </tr>
                </table>
                <br><br>
                <a href="route('profils.create')" class="btn btn-primary">lengkapi data Jobs</a>
          </div>

            
        </div>
    </div>
@endsection

