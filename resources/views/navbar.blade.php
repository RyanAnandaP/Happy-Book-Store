<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="/css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="d-block bg-warning" style="height: 80px; margin-bottom:5px">
            <h1 class="text-center" style="color: white; padding-top:15px">Giant Book Supplier</h1>
    </div>


    <div class="buttons d-block text-center" style="margin-bottom: 10px">
        <a type="button" class="btn btn-light" style="color:#0782f5;margin-left: 20px;margin-right:20px;" id="homebtn" href="/">Home</a>

        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

            <div class="btn-group" role="group" style="margin-left: 20px;margin-right:20px">
              <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0782f5" id="categoriesBtn">
                Categories
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/category/1" style="color: #0782f5">Comedy</a></li>
                <li><a class="dropdown-item" href="/category/2" style="color: #0782f5">Horror</a></li>
                <li><a class="dropdown-item" href="/category/3" style="color: #0782f5">Fiction</a></li>
                <li><a class="dropdown-item" href="/category/4" style="color: #0782f5">Teen Fiction</a></li>
              </ul>
            </div>
          </div>

          <a type="button" class="btn btn-light"style="color: #0782f5;margin-left: 20px;margin-right:20px" id="publisherBtn" href="publisher">Publisher</a>
          <a type="button" class="btn btn-light" style="color: #0782f5;margin-left: 20px;margin-right:20px" id="contactBtn" href="contact" >Contact</a>




    </div>




    @yield('content')

    <footer class="d-block bg-primary text-center" style="margin-top: 15px; color:white">
        <h4>&copy; Happy Book Store 2022</h4>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>
</html>
