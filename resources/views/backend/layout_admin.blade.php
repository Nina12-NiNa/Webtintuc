<head>
    <title>@yield('tieudetrang')</title>
    <meta charset="utf-8"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
         .header {height: 250px;}
         .nav {height: 50px}
        .container > footer {height: 90px}
        /* .container > main {display: flex;min-height: 500px} */
    </style>
</head>
<body>
    
        <!-- <header>Tranh quản trị</header>
        -->
        <nav class="bg-warning">@include('backend/menu_admin')</nav>
        <div class="container ">
        <main>
            <article class="row">@yield('noidung')</article>
        </main>
        <!-- <footer class="bg-dark"> -->
            
        <!-- <div class="container text-center">
        <h5>Follow Us</h5>
        <a href="#" class="text-light mx-2"><i class="fab fa-facebook-f fa-lg"></i></a>
        <a href="#" class="text-light mx-2"><i class="fab fa-twitter fa-lg"></i></a>
        <a href="#" class="text-light mx-2"><i class="fab fa-instagram fa-lg"></i></a> -->
       
    </div>

        </footer>
    </div>
</body> 