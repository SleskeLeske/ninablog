  <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
      <title>@yield('title')</title>
    <!--==========Dependency============-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{!! asset('owlcarousel/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/oc/docs/assets/owlcarousel/assets/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/oc/docs/assets/owlcarousel/assets/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/magnific-popup/magnific-popup.css') !!}">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic">
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
    @yield('styles')
    <!--==========Theme Styles==========-->
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/green.css') !!}" rel="stylesheet">

    <!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->
    <!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->
    <!--==========[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]==========-->
  </head>
<body class="home">
