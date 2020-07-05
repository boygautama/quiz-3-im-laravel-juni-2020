@extends('layouts.master')
@section('title', 'Detail Artikel')
@section('konten')
<h1 class="h3 mb-2 text-gray-800">Detail Artikel</h1>
<div class="card shadow mb-4">
    <div class="card-body">
           <h3>Judul : {{$data->artikel_judul}}</h3>
          <div> slug : {{$data->artikel_slug}}</div>
           <p>{{$data->artikel_isi}}</p>
           @foreach ($tag as $item)
               <span class="badge badge-secondary">{{$item}}</span>
           @endforeach
           
    </div>      
</div>
@endsection
