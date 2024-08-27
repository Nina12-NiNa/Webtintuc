
<?php

use Illuminate\Support\Facades\DB; 

$query = DB::table('tin')
->select('id', 'tieuDe', 'tomTat', 'noiDung', 'file')
->limit(2)
->orderBy('ngayDang','desc');
$data = $query->get();
//tinmoi
// -----------tin xem nhiều-------------------------------------------------------

$query1 = DB::table('tin')
->select('id', 'tieuDe', 'tomTat', 'noiDung', 'file')
->limit(4)
->orderBy('xem','desc');
$data1 = $query1->get();
// ------------------------tin loại 1------------------------------------------
$idLT = 1; 
$query2 = DB::table('tin')
    ->select('id', 'tieuDe', 'tomTat', 'noiDung', 'file')
    // ->where('loai_tin_id', $idLT) // Lọc theo loại tin
    ->where('idLT','=',$idLT)
    ->limit(3) // Giới hạn số lượng bản ghi
    ->orderBy('ngayDang', 'desc'); // Sắp xếp theo số lượt xem giảm dần

$data2 = $query2->get(); // Thực hiện truy vấn và lấy dữ liệu
// ------------------------------------------------------------------
$idLT = 2; 
$query3 = DB::table('tin')
    ->select('id', 'tieuDe', 'tomTat', 'noiDung', 'file')
    ->where('idLT','=',$idLT)
    ->limit(4) 
    ->orderBy('ngayDang', 'desc');
$data3 = $query3->get(); // Thực hiện truy vấn và lấy dữ liệu
// ------------------------------------------------------------------
$idLT = 3; 
$query4 = DB::table('tin')
    ->select('id', 'tieuDe', 'tomTat', 'noiDung', 'file')
    ->where('idLT','=',$idLT)
    ->limit(4) 
    ->orderBy('ngayDang', 'desc');
$data4 = $query4->get(); // Thực hiện truy vấn và lấy dữ liệu
// ------------------------------------------------------------------
$idLT = 4; 
$query5 = DB::table('tin')
    ->select('id', 'tieuDe', 'tomTat', 'noiDung', 'file')
    ->where('idLT','=',$idLT)
    ->limit(4) 
    ->orderBy('ngayDang', 'desc');
$data5 = $query5->get(); // Thực hiện truy vấn và lấy dữ liệu
// ------------------------------------------------------------------
$idLT = 5; 
$query6 = DB::table('tin')
    ->select('id', 'tieuDe', 'tomTat', 'noiDung', 'file')
    ->where('idLT','=',$idLT)
    ->limit(4) 
    ->orderBy('ngayDang', 'desc');
$data6 = $query6->get(); // Thực hiện truy vấn và lấy dữ liệu
?>
@extends('layout')
@section('tieudetrang')
Nina - Tin Tức
@endsection
@include('banner')
@section('noidung')
<!-- <header>@include('banner')</header> -->
<div class="row">
  <div class="col-3">

  <h3 class="text-danger m-3">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
  <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
</svg>Tin mới 
      </h3>

    <div class="container mt-1">
      @foreach($data as $tin)
        <div class="card" style="width: 14rem;">
          <img src="{{ asset('storage/uploads/'.$tin->file) }}" class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title" ><a href="{{url('/tin',[$tin->id])}}">{{$tin->tieuDe}}</a></h5>
            <p class="card-text">{{ $tin->tomTat }}</p>
          </div>
        </div>
      @endforeach


      </div>
      
  </div>
  <div class="col-5 mt-5 ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner mt-3">
      @php $first = true; @endphp
    @foreach($data2 as $tin)
      <div class="carousel-item {{ $first ? 'active' : '' }}">
        <img src="{{ asset('storage/uploads/'.$tin->file) }}" class="d-block w-100" alt="Slide Image">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $tin->tieuDe }}</h5>
          <!-- <p>{{ $tin->tomTat }}</p> -->
        </div>
      </div>
      @php $first = false; @endphp
    @endforeach
        <!-- <div class="carousel-item">
          <img src="https://i1-vnexpress.vnecdn.net/2024/08/03/huy-2390-1722656748-8735-1722656756.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=9fiMS_w0LNVojB7_4QrL8g" class="d-block w-100" alt="Slide 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chủ tịch nước Tô Lâm làm Tổng Bí thư</h5>
           
          </div>
        </div> -->
        <!-- <div class="carousel-item">
          <img src="https://i1-vnexpress.vnecdn.net/2024/08/03/ong-le-minh-khai-1722590687-6617-1722674518.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=86AV7ZMKMDzr55P64oU09g" class="d-block w-100" alt="Slide 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Trung ương cho thôi chức một bí thư, 3 ủy viên</h5>
          </div>
        </div> -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-4">
    <div class="container mt-1">
    <h4 class="text-danger m-3">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
  <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
</svg>Xem nhiều 
      </h4>
    <div class="card">
  @foreach($data1 as $tin)
    <div class="row no-gutters">
      
      <div class="col-md-4 d-flex align-items-start">
        <img src="{{ asset('storage/uploads/'.$tin->file) }}" class="card-img" style="width: 100px; height: 100px; object-fit: cover;" alt="Card Image">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ url('/tin', [$tin->id]) }}">{{ $tin->tieuDe }}</a></h5>
          <p class="card-text">{{ $tin->tomTat }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>
    
      </div>
    </div>
  </div>

  <div class="row mt-3">
    @foreach($data3 as $tin)
    <div class="col-3">
      <div class="container mt-1">
        <div class="card" style="width: 14rem;">
          <img src="{{ asset('storage/uploads/'.$tin->file) }}" class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title"><a href="{{ url('/tin', [$tin->id]) }}">{{ $tin->tieuDe }}</a></h5>
            <p class="card-text">{{ $tin->tomTat }}</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
    </div>
    @endforeach



  
</div>


<div class="container mt-4">
        <div class="row">
            <div class="col-md-9">
                @foreach($data4 as $tin)
                <div class="row mb-3">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/uploads/'.$tin->file) }}" class="img-fluid" alt="Card Image">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('/tin', [$tin->id]) }}">{{ $tin->tieuDe }}</a></h5>
                            <p class="card-text1">{{ $tin->tomTat }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-3">
                <div >
                    <div class="card-body">
                        <!-- <h5 class="card-title">Sidebar</h5> -->
                        <img src="https://img.pikbest.com/origin/06/08/22/99epIkbEsTtPs.jpg!w700wp" width="250px" alt="">
                        <!-- <p class="card-text">This is some content for the sidebar.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div> <hr>
<p class="font-weight-bold  ml-3">
            Thể thao
        </p> 
<div class="row ">
  @foreach($data5 as $tin)
  <div class="col-3">
    <div class="container mt-1">
      <div class="card" style="width: 14rem;">
        <img src="{{ asset('storage/uploads/'.$tin->file) }}" class="card-img-top " style="width: 200px; height: 200px; object-fit: cover;"alt="Card Image">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ url('/tin', [$tin->id]) }}">{{ $tin->tieuDe }}</a></h5>
          <!-- <p class="card-text">{{ $tin->tomTat }}</p> -->
        </div>
      </div>
    </div>
  </div>
  @endforeach

</div>
  <!-- <div class="col-3 ">
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
  </div> -->

  <!-- <div class="col-3">
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
  </div> -->

  <!-- <div class="col-3">
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
  </div> -->
</div>
<div class="mb-5 mt-3"> <hr>
<p class="font-weight-bold  ml-3">
            Giải Trí
        </p> 
@foreach($data6 as $tin)
<div class="row">
  <div class="col-md-2 ml-5 mt-3">
    <img src="{{ asset('storage/uploads/'.$tin->file) }}" class="card-img"  alt="Card Image">
  </div>
  <div class="col-md-5">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ url('/tin', [$tin->id]) }}">{{ $tin->tieuDe }}</a></h5>
      <p class="card-text1">{{ $tin->tomTat }}</p>
    </div>                             <hr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
  </div> 
</div> 
@endforeach
</div>

<!-- <div class="row ">
  <div class="col-md-2 ml-5 mt-3">
    <img src="https://via.placeholder.com/150" class="card-img" alt="Card Image">
  </div>
  <div class="col-md-5">
    <div class="card-body">
      <h5 class="card-title">Card Title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-2 ml-5 mt-3">
    <img src="https://via.placeholder.com/150" class="card-img" alt="Card Image">
  </div>
  <div class="col-md-5">
    <div class="card-body">
      <h5 class="card-title">Card Title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-2 ml-5 mt-3">
    <img src="https://via.placeholder.com/150" class="card-img" alt="Card Image">
  </div>
  <div class="col-md-5">
    <div class="card-body">
      <h5 class="card-title">Card Title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</div> -->

<style>
  .card-text {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 250px;
    /* Adjust the width as needed */
  }
  .card-title a {
    color: #000; /* Màu đen */
    text-decoration: none; /* Xóa gạch chân liên kết */
}

</style>


@endsection