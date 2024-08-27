
<style>
        /* Custom CSS to set the height of the carousel */
        .carousel-item {
            height: 220px;
        }
        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: cover; /* This will ensure the image covers the entire container */
        }
        .carousel-control-prev, .carousel-control-next {
            display: none;
        }
</style>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://files.oaiusercontent.com/file-3q6RVZb2fpxeaNgenvxNImem?se=2024-08-18T15%3A11%3A46Z&sp=r&sv=2023-11-03&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3D1d92d52d-3240-434c-abd0-cb191759c4ac.webp&sig=c/rlQtmJcLRFeUuxihaunUV2MvoICmoUQVnBIUoSEpw%3D"  class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/id/1422078399/vi/anh/celebration-%C4%91%C6%B0%E1%BB%9Dng-ch%C3%A2n-tr%E1%BB%9Di-v%E1%BB%9Bi-ph%C3%A1o-hoa-th%E1%BA%AFp-s%C3%A1ng-b%E1%BA%A7u-tr%E1%BB%9Di-tr%C3%AAn-khu-th%C6%B0%C6%A1ng-m%E1%BA%A1i-%E1%BB%9F-th%C3%A0nh-ph%E1%BB%91-h%E1%BB%93.jpg?s=1024x1024&w=is&k=20&c=G0ayOjzIl3P1bgx74PwcE8ri2BILnkda4EnG_Txr3kc=" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2018/10/11/04/33/vietnam-3738879_1280.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>