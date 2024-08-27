@extends('backend.layout_admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Khách hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
@section('noidung')
    <div class="container mt-5">
   
        <h1>Danh sách Khách hàng</h1>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Email khách hàng</th>
                    <th>Idgroup</th>
                    <!-- <th>Hành Động</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($data as $users)
                <tr>
                    <td>{{ $users->id}}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->idgroup }}</td>
                    <!-- <td>
                       
                        <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                    </td> -->
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
