@extends('backend.layout_admin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thống Kê</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
@section('noidung')
    <div class="container ">
        <h1>Trang Thống Kê</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-dark  mb-3">
                    <div class="card-header">Số Lượng Tin</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $soLuongTin }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark  mb-3">
                    <div class="card-header">Số Lượng Loại Tin</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $soLuongLoaiTin }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark  mb-3">
                    <div class="card-header">Số Lượng Khách Hàng</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $soLuongKhachHang }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection