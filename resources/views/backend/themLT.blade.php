

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
        .btn-add {
            position: fixed;
            top: 80px; /* Khoảng cách từ trên cùng của màn hình */
            right: 20px; /* Khoảng cách từ bên phải của màn hình */
            z-index: 1000; /* Đảm bảo nút nằm trên các phần tử khác */
        }
    </style>
</head>

<div class="container form-container">
    <h1>Thêm Loại Tin</h1>
    <div class="btn-add">
        <a href="{{ url('/backend/loaitin') }}" class="btn">Danh sách</a>
    </div>
    <form action="{{ url('/backend/themLT') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <p> Tên Loại Tin</p>
               
                <input type="text" name="tenLT" class="form-control">
            </div>
        </div>

        <div class="form-actions">
            <button type="submit">Thêm  Loại Tin</button>
           
    </form>
</div>
