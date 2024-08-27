<?php

use Illuminate\Support\Facades\DB;

$loaitin_arr = DB::table('loaitin')->select('idLT', 'tenLT')->limit(10)->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật Tin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .form-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
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
            background-color: #ffc107; /* Button background color */
            color: #000; /* Button text color */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .form-container a {
            color: #007bff; /* Link color */
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
            top: 80px; /* Distance from the top */
            right: 20px; /* Distance from the right */
            z-index: 1000; /* Ensure the button is above other elements */
        }

        .btn-add .btn {
            background-color: #007bff; /* Button background color */
            color: #fff; /* Button text color */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none; /* Remove default underline */
            display: inline-block; /* Align with other elements */
        }

        .btn-add .btn:hover {
            background-color: #0056b3; /* Hover background color */
            color: #fff; /* Hover text color */
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <h1>Cập nhật Tin</h1>
        <div class="btn-add">
            <a href="{{ url('/backend/danhsach') }}" class="btn">Danh sách</a>
        </div>
        <form action="{{ url('/backend/capnhaptin', $tin->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tieuDe">Tiêu Đề:</label>
                <input type="text" name="tieuDe" id="tieuDe" class="form-control @error('tieuDe') is-invalid @enderror" value="{{ old('tieuDe', $tin->tieuDe) }}" required>
                @error('tieuDe')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tomTat">Tóm Tắt:</label>
                <textarea name="tomTat" id="tomTat" class="form-control @error('tomTat') is-invalid @enderror" required>{{ old('tomTat', $tin->tomTat) }}</textarea>
                @error('tomTat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="file">Chọn hình ảnh để tải lên:</label>
                <input type="file" id="file" name="file" accept="image/*" class="form-control @error('file') is-invalid @enderror">
                @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="noiDung">Nội Dung:</label>
                <textarea name="noiDung" id="noiDung" class="form-control @error('noiDung') is-invalid @enderror" required>{{ old('noiDung', $tin->noiDung) }}</textarea>
                @error('noiDung')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ngayDang">Ngày Đăng:</label>
                <input type="date" name="ngayDang" id="ngayDang" class="form-control @error('ngayDang') is-invalid @enderror" value="{{ old('ngayDang', $tin->ngayDang) }}" required>
                @error('ngayDang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="xem">Xem:</label>
                <input type="number" name="xem" min="0" class="form-control" value="0" readonly>
            </div>
            <div class="form-group">
                <label for="idLT">Loại Tin:</label>
                <!-- <select name="idLT" id="idLT" class="form-control @error('idLT') is-invalid @enderror" required>
                    <option value="1" {{ $tin->idLT == 1 ? 'selected' : '' }}>Thế Giới</option>
                    <option value="2" {{ $tin->idLT == 2 ? 'selected' : '' }}>Kinh Doanh</option>
                    <option value="3" {{ $tin->idLT == 3 ? 'selected' : '' }}>Sức Khỏe</option>
                    <option value="4" {{ $tin->idLT == 4 ? 'selected' : '' }}>Thể Thao</option>
                    <option value="5" {{ $tin->idLT == 5 ? 'selected' : '' }}>Giải Trí</option>
                    <option value="6" {{ $tin->idLT == 6 ? 'selected' : '' }}>Giải Trí</option>
                </select> -->

                <select name="idLT" id="idLT" class="form-control @error('idLT') is-invalid @enderror" required>
                    @foreach($loaitin_arr as $lt)
                        <option value="{{ $lt->idLT }}" {{ $lt->idLT ? 'selected' : '' }}>
                            {{ $lt->tenLT }}
                        </option>
                    @endforeach
                </select>
                @error('idLT')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
        <a href="{{ url('/backend/danhsach') }}" class="btn btn-secondary mt-3">Quay lại danh sách</a>
    </div>
</body>
</html>
