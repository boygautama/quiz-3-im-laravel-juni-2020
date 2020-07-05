@extends('layouts.master')
@section('title', 'Edit Artikel')
@section('konten')
<h1 class="h3 mb-2 text-gray-800">Edit Artikel</h1>
<div class="card shadow mb-4">
                <div class="card-body">
              <form action="{{ url('artikel')}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{$data->artikel_id}}"> 
            <input type="hidden" name="userid" value="1"> 
            {{-- demo id user --}}
            <div class="form-group">
              <label for="judul">Judul Artikel</label>
              <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul"  value="{{$data->artikel_judul}}" required>
            </div>
            <div class="form-group">
              <label for="isi">Isi Artikel</label>
              <textarea name="isi" id="isi" class="form-control" required placeholder="Isi Artikel">{{$data->artikel_isi}}</textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tag Artikel</label>
                <textarea name="tag" id="tag" class="form-control" required placeholder="Tag">{{str_replace('-',' ',$data->artikel_tag)}}</textarea>
                <small class="text-muted">Pemisah Tag adalah (Spasi).</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                </div>
                
</div>
@endsection
