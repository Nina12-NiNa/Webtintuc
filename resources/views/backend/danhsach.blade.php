@extends('backend.layout_admin')

<head>
<title>Danh sách  Tin</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>
<style>
    .table th, .table td {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 150px; /* Điều chỉnh kích thước theo nhu cầu */
    }

    .table td {
        /* Thay đổi kích thước tối đa của các ô dữ liệu */
        max-width: 100px; /* Thay đổi kích thước tối đa của các ô dữ liệu nếu cần */
    }
    .id-column {
            width: 10px;
        }
        .btn-add {
            position: fixed;
            top: 80px; /* Khoảng cách từ trên cùng của màn hình */
            right: 20px; /* Khoảng cách từ bên phải của màn hình */
            z-index: 1000; /* Đảm bảo nút nằm trên các phần tử khác */
        }
</style>
@section('noidung')
<div class="container mt-5">

    <h1>Danh sách tin</h1>
    <div class="btn-add">
        <a href="{{ url('/backend/themtin') }}" class="btn btn-success">Thêm tin</a>
    </div>

    <table class="table table-bordered custom-table">
        <thead>
            <tr>
                <th class="id-column">Id </th>
                <!-- <th>Url Hình </th> -->
                <th>Tiêu đề</th>
                <th>Tóm tắt</th>
                <th>Nội Dung</th>
                <th >Ngày Đăng</th>
                <th class="id-column">Lượt Xem</th>
                <th class="id-column">idLT</th>
                <th >Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $tin)
            <tr>
                <td>{{ $tin->id }}</td>
                <!-- <td>{{ $tin->urlHinh}}</td> -->
                <td>{{ $tin->tieuDe }}</td>
                <td>{{ $tin->tomTat }}</td>
                <td>{{ $tin->noiDung }}</td>
                <td>{{ $tin->ngayDang }}</td>
                <td>{{ $tin->xem }}</td>
                <td>{{ $tin->loaiTin->tenLT }}</td>
                <td>
                    <a href="{{ url('/backend/capnhaptin/'.$tin->id) }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
</svg></a>
                    <a href="{{ url('/backend/danhsach/xoa/'.$tin->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa tin {{ $tin->tieuDe }} ?')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

