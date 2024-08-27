<?php
use Illuminate\Support\Facades\DB;
$query1 = DB::table('tin')
->select('id', 'tieuDe', 'tomTat', 'noiDung', 'file','ngayDang','xem')
->limit(7)
->orderBy('xem','desc');
$data1 = $query1->get();
?>
@extends('layout')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{ $tin->tieuDe }}</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
@section('noidung')


<div class="container mt-4">
  <div class="row">
    <div class="col-md-9 mt-4">

      <h5 class="card-title mt-4">
        <h2><a href="{{ url('/tin', [$tin->id]) }}" style=" color: #000;">{{ $tin->tieuDe }}</a></h2>
        <span>{{ $tin->ngayDang }}  </span>
      </h5>
      <p class="card-text">
      <h5>{{ $tin->tomTat }}</h5>
      </p>
      <div class="col-md-4" style="text-align: center;">
        <img src="{{ asset('storage/uploads/' . $tin->file) }}" class="card-img" style="width: 500px;" alt="Card Image">
      </div>


      <div id="noiDung">
        {!! $tin->noiDung !!} <br>
      </div>
      <span class="font-weight-bold "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye font-weight-bold  " viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg>  {{ $tin->xem }} lượt đã xem <hr></span>
    </div>
    <div class="col-md-3 mt-4">
    <h5 class="mt-5 ml-5 text-danger">Tin Xem Nhiều</h1>
    <div class="card1">
        @foreach ($data1 as $tin)
        <div class="card-body1 d-flex align-items-center">
            <div class="card-img-container1">
                <img src="{{ asset('storage/uploads/'.$tin->file) }}" class="card-img" alt="Card Image">
            </div>
            <div class="card-content1 ml-3">
                <span class="card-title">
                    <a href="{{ url('/tin', [$tin->id]) }}"  style=" color: #000;">{{ $tin->tieuDe }}</a>
</span>
            </div>
        </div>
        @endforeach
    </div>
</div>


      <hr>
      <!-- <div class="card">
        <div class="card-body">
          <p>Tin xem nhiều</p>
          <hr>
          <div><img src="data:image/png;base64,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" alt=""></div>
          <h5 class="card-title">Tổng Bí thư Tô Lâm: Cuộc chiến chống tham nhũng sẽ không ngừng nghỉ</h5>
          <p class="card-text">Tân Tổng Bí thư Tô Lâm khẳng định công tác xây dựng, chỉnh đốn Đảng, phòng, chống tham nhũng, tiêu cực sẽ được đẩy mạnh theo phương châm không ngừng nghỉ, không có vùng cấm.</p>
        </div>
      </div> -->
    </div>

    <h4> Các tin liên quan</h4>


    <div class="container mt-3">
      <div class="row">
        
        @foreach($relatedNews as $item)
        <div class="col-md-3 mb-4">
          <div class="card" style="border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <div class="m-3"><img src="{{ asset('storage/uploads/' . $item->file) }}" class="card-img" style="height: 200px;" alt="Card Image"></div>
            <!-- <img src="{{ asset('storage/uploads/' . $item->file) }}" class="card-img" style="height: 300px;" alt="Card Image"> -->
            <div class="card-body">
              <h5 class="card-title1" style="font-size: 1.1rem; margin-bottom: 0.5rem; color: #333;"><a href="{{ url('/tin', [$item->id]) }}" style=" color: #000;">{{ $item->tieuDe }}</a></h5>
              <p class="card-text" style="font-size: 0.9rem; color: #666;">{{ $item->tomTat }}</p>
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>

  </div>
  @endsection
</div>

<style>
  .card-text {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 250px;
  }
  .card1 {
  border: 1px solid #dee2e6;
  border-radius: .25rem;
  overflow: hidden;
}

.card-body1 {
  display: flex;
  align-items: center;
  padding: 1rem;
}

.card-img-container1 {
  width: 100px;
  height: 100px;
  overflow: hidden;
}

.card-img1 {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card-content1 {
  flex: 1;
  margin-left: 1rem;
}

  
 
</style>