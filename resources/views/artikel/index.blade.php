@extends('layouts.master')
@section('title', 'Artikel')
@section('konten')
<h1 class="h3 mb-2 text-gray-800">Artikel</h1>
<div class="card shadow mb-4">
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="/artikel/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                </div>
                <div class="card-body">
                  
                   <table id="table1" class="table table-bordered table-striped">
  <thead>
    <tr><th scope="col">#</th><th scope="col">Judul</th><th scope="col">Isi</th><th scope="col"></th></tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($data as $key => $item)        
        <th scope="row">{{$key +1}}</th>
        <td>{{$item->artikel_judul}}</td>
        <td>
            {{$item->artikel_isi}}
        </td>
        <td>
          <button class="btn btn-info btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" style="">
                      <a class="dropdown-item" href="{{ url('artikel/'.$item->artikel_id)}}"><i class="fas fa-search"></i> Detail</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ url('artikel/'.$item->artikel_id.'/edit')}}"><i class="far fa-edit"></i> Edit</a>
                      <div class="dropdown-divider"></div>
                      {{-- <a class="dropdown-item" href="{{ url('artikel/'.$item->artikel_id)}}"><i class="far fa-trash-alt"></i> Hapus</a> --}}
                      <form action={{ url('artikel/'.$item->artikel_id)}}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-text btn-sm" style="margin-left:15px;" type="submit"><i class="fas fa-trash"></i> Delete</button>
                          </form>
                      
                    </div>
          {{-- <a href="artikel/{{$item->artikel_id}}" class="btn btn-info" style="display:inline;">detail</a>
          <a href="artikel/{{$item->artikel_id}}/edit" class="btn btn-warning" style="display:inline;">edit</a> --}}
          
        </td>
    </tr>
        @endforeach
  </tbody>
</table>

                
                </div>
              </div>
@endsection

@push('stylesheet')
      <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endpush
@push('scripts')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
         $(function () {
    $("#table1").DataTable({
        "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian.json"
            }
    });
   
  });
    Swal.fire({
        title: 'Berhasil!',
        text: 'Data di tampilkan',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush 