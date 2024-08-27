<?php

use Illuminate\Support\Facades\DB;

$loaitin_arr = DB::table('loaitin')->select('idLT', 'tenLT')->limit(10)->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Navbar</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="{{url('/')}}">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRteq39rAujIh_yJBU4oDy4Xzp-lzXj1DwMOg&s" width="70px" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      @foreach ($loaitin_arr as $lt)
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/tintrongloai', [$lt->idLT]) }}">{{ $lt->tenLT }}</a>
      </li>
      @endforeach
    </ul>

    <div class="nav-item dropdown">
      @guest
      <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
       Tài Khoản
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ url('/login') }}">Đăng Nhập</a>
      </div>
      @else
      <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
        {{ Auth::user()->name }}
      </a>
      <div class="dropdown-menu">
        @if(Auth::check() && Auth::user()->idgroup == 1)
          <a class="dropdown-item" href="{{ url('/backend/thongke') }}">Đăng Nhập Admin</a>
        @endif

        @auth
          <form action="{{ route('logout') }}" method="POST" class="px-4 py-2">
            @csrf
            <button class="dropdown-item" type="submit">Đăng Xuất</button>
          </form>
        @endauth
      </div>
      @endguest
    </div>
    <form action="{{ route('search') }}" method="GET">
    <div class="d-flex align-items-center mt-3">
        <input type="text" name="keyword" class="form-control mr-0" placeholder="Search" aria-label="Search" value="{{ request('keyword') }}">
        <button class="btn btn-outline-success text-dark" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
  </div>
  </form>
</nav>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


