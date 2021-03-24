@extends('layouts.app')

@section('content')

@include('components.header')

<div class="container-fluid p-3 d-flex flex-column align-items-center">
    <div>
        <h2>Gejala Covid-19</h2>
    </div>
    <div class="d-flex flex-wrap justify-content-center w-50">
        @foreach ($gejalaDatas as $item)
        <div class="d-flex flex-column text-center align-items-center py-3 w-50">
            <img src="{{asset($item->gambar)}}" class="w-25 p-3" alt="" srcset="">
            <p>{{__($item->konten)}}</p>
        </div>    
        @endforeach

    </div>
</div>
@endsection
