
<?php

use Illuminate\Support\Facades\DB;

$loaitin_arr = DB::table('loaitin')->select('idLT', 'tenLT')->limit(10)->get();
?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .form-container {
            max-width: 800px;
            margin: auto;
        }

        .form-container p {
            margin-bottom: 1rem;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
        }

        .form-container button {
            background-color: #ffc107; /* Màu nền của nút */
            color: #000; /* Màu chữ của nút */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .form-container a {
            color: #007bff; /* Màu chữ của liên kết */
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        .form-container .row {
            margin-bottom: 1rem;
        }
        .btn-add {
           
            color: white;
            position: fixed;
            top: 80px; /* Khoảng cách từ trên cùng của màn hình */
            right: 20px; /* Khoảng cách từ bên phải của màn hình */
            z-index: 1000; /* Đảm bảo nút nằm trên các phần tử khác */
        }
        .btn-add .btn {
            background-color: #007bff; /* Màu nền của nút */
            color: #fff; /* Màu chữ của nút */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none; /* Xóa gạch dưới mặc định */
            display: inline-block; /* Căn chỉnh với các phần tử khác */
        }

        .btn-add .btn:hover {
            background-color: #0056b3; /* Màu nền khi di chuột qua */
            color: #fff; /* Màu chữ khi di chuột qua */
        }
    </style>
</head>

<div class="container form-container">
    <h1>Thêm tin</h1>
    <div class="btn-add">
        <a href="{{ url('/backend/danhsach') }}" class="btn">Danh sách</a>
    </div>
    <form action="{{ url('/backend/themtin') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <p>Tiêu Đề:</p>
                <input type="text" name="tieuDe" class="form-control @error('tieuDe') is-invalid @enderror" value="{{ old('tieuDe') }}">
                @error('tieuDe')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p>Tóm Tắt:</p>
                <textarea name="tomTat" class="form-control @error('tomTat') is-invalid @enderror">{{ old('tomTat') }}</textarea>
                @error('tomTat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
    <div class="col-md-12">
        <label for="file">Chọn ảnh để tải lên:</label>
        <input type="file" id="file" name="file" accept="image/*" class="form-control @error('file') is-invalid @enderror" required>
        @error('file')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>


        <div class="row">
            <div class="col-md-12">
                <p>Nội Dung:</p>
                <textarea name="noiDung" class="form-control @error('noiDung') is-invalid @enderror">{{ old('noiDung') }}</textarea>
                @error('noiDung')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p>Ngày Đăng:</p>
                <input type="date" name="ngayDang" class="form-control @error('ngayDang') is-invalid @enderror" value="{{ old('ngayDang') }}">
                @error('ngayDang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
    <div class="col-md-12">
        <p>Xem:</p>
        <input type="number" name="xem" min="0" class="form-control" value="0" readonly>
    </div>
</div>


       
        <div class="row">
            <div class="col-md-12">
                <p>idLT:</p>
                <!-- <select name="idLT" class="form-control">
                    <option value="1">Thế Giới</option>
                    <option value="2">Kinh Doanh</option>
                    <option value="3">Sức Khỏe</option>
                    <option value="4">Thể Thao</option>
                    <option value="5">Giải Trí</option>
                </select> -->
                <select name="idLT" class="form-control">
                @foreach($loaitin_arr as $lt)
                        <option value="{{ $lt->idLT }}">
                            {{ $lt->tenLT }}
                        </option>
                    @endforeach
                    
                </select>
               
            </div>
        </div>

        <div class="form-actions">
            <button type="submit">Thêm Tin</button>
           
    </form>
</div>
