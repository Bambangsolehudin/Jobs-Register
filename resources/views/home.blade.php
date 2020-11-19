@extends('layouts.admin')

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
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td>{{Auth::user()->name}}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td> : </td>
                    <td> {{Auth::user()->username}} </td>
                </tr>
                 <tr>
                    <td>Email</td>
                    <td> : </td>
                    <td> {{Auth::user()->email}} </td>
                </tr>

                
            </table>

            <a href="{{route('profil.create')}}" class="btn btn-primary">Tambah Data Jobs</a>




 
            </div>      
        </div>

    </div>

  </div>

  <!-- Content Row -->
</div>
</div> 
<!-- /.container-fluid -->
@endsection