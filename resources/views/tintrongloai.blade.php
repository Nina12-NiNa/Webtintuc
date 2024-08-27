<?php 
use Illuminate\Support\Facades\DB;
$loaitin_arr = DB::table('loaitin')->select('idLT','tenLT')
->limit(1)->get();


?>
@extends('layout')

<!-- @section('tieudetrang')
@foreach ($loaitin_arr as $lt)
  Tin trong loại {{$lt->tenLT}}
  @endforeach
@endsection -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$lt->tenLT}}</title>
</head>

<style>
    .card-img {
        width: 200px;
        height: 200px;
        object-fit: cover;
    }

    .ml-7 {
        margin-left: 3.5rem;
    }

    .mt-3 {
        margin-top: 1rem;
    }
    .card-text {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 350px;
        max-height: 50px;
    }
</style>
@section('noidung')
<div class="container mt-4">
  
        <div class="row">
            <div class="col-md-9 mt-4">
                @foreach ($listtin as $t)
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/uploads/' . $t->file) }}" class="card-img" alt="Card Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h4><a href="{{ url('/tin', [$t->id]) }}" style=" color: #000;">{{ $t->tieuDe }}</a></h4>
                                <p class="card-text1">{{$t->tomTat}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3">
                <div class="card mt-5"  style="width: 300px;">
                    <div class="card-body ">
                        <!-- <h5 class="card-title">Sidebar</h5> -->
                        <img src="https://taihinhgoc.net/uploads/images/tranh-tong-hop/vector%20ban%20do%20viet%20nam%20doc%20dao%20hinh%20dai%20dien%20cac%20tinh%20va%20thanh%20pho%20demo.jpg" width="250px"  alt="">
                        
                    </div>
                </div>
            </div>
        </div>
    @endsection
    
</div>

<!-- <div class="row mt-3">
    <div class="col-3">
        <div class="container mt-1">
            <div class="card" style="width: 14rem;">
                <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Tiêu Đề </h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="container mt-1">
            <div class="card" style="width: 14rem;">
                <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Tiêu Đề </h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="container mt-1">
            <div class="card" style="width: 14rem;">
                <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Tiêu Đề </h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="container mt-1">
            <div class="card" style="width: 14rem;">
                <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Tiêu Đề </h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
