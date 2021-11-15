<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>FashionStore.net</title>
    <!-- Bootstrap core CSS -->
    <link href="{{url ('public')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- End Bootstrap CSS -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url ('public')}}/css/fontawesome.css">
    <link rel="stylesheet" href="{{url ('public')}}/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="{{url ('public')}}/css/owl.css">
    <!-- Bootstrap core CSS -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url ('public')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <!-- Bootstrap CSS -->
    
    <!-- end Bootstrap CSS -->
  </head>
  <body>
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    

    @yield('header')
    @yield('banner')
    @yield('produk')
    @yield('content')
    @yield('map')
    @yield('email')
    @yield('footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{url ('public')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{url ('public')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript -->


    <!-- Additional Scripts -->
    <script src="{{url('public')}}/js/custom.js"></script>
    <script src="{{url('public')}}/js/owl.js"></script>
    <script src="{{url('public')}}/js/slick.js"></script>
    <script src="{{url('public')}}/js/isotope.js"></script>
    <script src="{{url('public')}}/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
