@extends('backend.layout_admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Loại Tin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<style>
    .btn-add {
            position: fixed;
            top: 80px; /* Khoảng cách từ trên cùng của màn hình */
            right: 20px; /* Khoảng cách từ bên phải của màn hình */
            z-index: 1000; /* Đảm bảo nút nằm trên các phần tử khác */
        }
</style>
<body>
@section('noidung')
    <div class="container mt-5">
   
        <h1>Danh sách Loại Tin</h1>
        <div class="btn-add">
        <a href="{{ url('/backend/themLT') }}" class="btn btn-success">Thêm Loại Tin</a>
    </div>
        <table class="table  table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Loại Tin</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $lt)
                <tr>
                    <td>{{ $lt->idLT }}</td>
                    <td>{{ $lt->tenLT }}</td>
                    
                    <td>
                        <!-- <a href="#" class="btn btn-primary btn-sm">Cập nhật</a> -->
                        <a href="{{ url('/backend/loaitin/xoa/'.$lt->idLT) }}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn xóa loại tin {{ $lt->tenLT }} ?')">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
