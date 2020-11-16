@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Post</h1>
  </div>

  <!-- Content Row -->

  <div class="row">


    <div class="col-lg-10 md-auto align-items-center">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
    <div class="text-right">
        <a href="{{url('posts/create')}}" class="btn btn-primary btn-sm">Tambah</a>
    </div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Date</th>
            <th scope="col">User</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($items as $item)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->title}}</td>
            <td>{{date('d F Y',strtotime($item->created_at))}}</td>
            <td>{{ $item->user->name }}</td>
            <td>
              <a href="{{route('posts.show',$item->id)}}"><i class="fas fa-fw fa-eye"></i></a>
             
              <a href="{{route('posts.edit', $item->id)}}"><i class="fas fa-fw fa-edit"></i></a>
              <form action="{{route('posts.destroy',$item->id)}}" method="post" class="d-inline">
                @method('delete')
                @csrf
               <button type="submit" class="btn btn-sm" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-fw fa-trash"></i></button>
              </form>

            </td>
          </tr>

          @empty
          <td colspan="7" class="text-center">
              Data Kosong
          </td>

          @endforelse
        </tbody>
      </table>

    </div>

  </div>

  <!-- Content Row -->
</div>
</div> 
<!-- /.container-fluid -->
@endsection