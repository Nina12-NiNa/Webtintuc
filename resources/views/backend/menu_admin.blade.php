

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
  <a class="navbar-brand" href="{{url('/')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRteq39rAujIh_yJBU4oDy4Xzp-lzXj1DwMOg&s" width="70px" alt="">  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/backend/thongke')}}">Thống kê</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/backend/danhsach')}}">Tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/backend/loaitin')}}">Loại Tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/backend/users')}}">Khách Hàng</a>
                    </li>
                </ul>
            </div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control  mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success text-dark my-2 my-sm-0" type="submit"><i class="bi bi-search"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
          </svg></i></button>
      <a href="{{url('/dangnhap')}}" class="mx-2">
        </i></i>
      </a>
    </form>
  </div>
</nav>
<style>
  .icon-black {
    color: black;
    /* Thay đổi màu của biểu tượng thành đen */
  }
</style>