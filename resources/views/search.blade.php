@extends('layout')
@section('noidung')
<body>
    <div class="container mt-5">
        <h2>Kết quả tìm kiếm</h2>
        <form action="{{ route('search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="keyword" class="form-control" placeholder="Nhập từ khóa tìm kiếm" value="{{ request('keyword') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                </div>
            </div>
        </form>

        @if(isset($results))
    <h3>Kết quả tìm kiếm : "{{ $keyword }}"</h3>
    @if($results->isEmpty())
        <p>Không có kết quả tìm kiếm.</p>
    @else
        <ul class="list-group">
            @foreach($results as $tin)
                <li class="list-group-item d-flex align-items-start mb-3">
                    <img src="{{ asset('storage/uploads/'.$tin->file) }}" style="width:250px; height:auto; margin-right:15px;" class="img-thumbnail" alt="Card Image">
                    <div>
                        <h5 class="card-title"><a href="{{url('/tin',[$tin->id])}}">{{$tin->tieuDe}}</a></h5>
                        <p>{{ $tin->tomTat }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
@endif

    </div>
</body>
@endsection
<style>
    /* Đảm bảo tất cả các hình ảnh đều có kích thước tự động */
.img-thumbnail {
    border: 1px solid #ddd;
    border-radius: .25rem;
    padding: .25rem;
    background-color: #fff;
}

/* Dùng flexbox để căn chỉnh ảnh và nội dung */
.list-group-item {
    display: flex;
    align-items: flex-start;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: .25rem;
    background-color: #fff;
    margin-bottom: 10px;
}

.list-group-item img {
    margin-right: 15px; /* Khoảng cách giữa ảnh và nội dung */
}

.card-title a {
    text-decoration: none;
    color: #007bff;
}

.card-title a:hover {
    text-decoration: underline;
}

</style>