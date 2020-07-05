@extends('layouts.master')
@section('title', 'Tambah Artikel')
@section('konten')
<h1 class="h3 mb-2 text-gray-800">Tambah Artikel</h1>
<div class="card shadow mb-4">
                <div class="card-body">
              <form action="{{ url('artikel')}}" method="POST">
            @csrf
            <input type="hidden" name="userid" value="1"> 
            {{-- demo id user --}}
            <div class="form-group">
              <label for="judul">Judul Artikel</label>
              <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul" required>
            </div>
            <div class="form-group">
              <label for="isi">Isi Artikel</label>
              <textarea name="isi" id="isi" class="form-control" required placeholder="Isi Artikel"></textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tag Artikel</label>
                <textarea name="tag" id="tag" class="form-control" required placeholder="Tag"></textarea>
                <small class="text-muted">Pemisah Tag adalah (Spasi).</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                </div>
                
</div>
@endsection
