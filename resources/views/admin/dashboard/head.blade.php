<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Cardápio Digital</title>
<link rel="icon"
      type="image/png"
      href="{{ asset('images/cd-icon.png') }}" />
<!-- === Font Awesome === -->
<link href="{{ asset('css/all.css') }}" rel="stylesheet" />
<!-- === Bootstrap === -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Passion+One&family=Tangerine:wght@700&family=Signika&family=Caveat:wght@700&display=swap" rel="stylesheet">
<!-- === Stylesheets === -->
<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
<!-- <link href="{{ asset('css/dashboard_bkp.css') }}" rel="stylesheet" /> -->
<!-- <link href="{{ asset('css/dashboard_bkp2.css') }}" rel="stylesheet" /> -->
<!-- === Right Click Menu Context === -->
<script src="{{ asset('js/ctxmenu.js') }}"></script>
<link href="{{ asset('css/ctxmenu.css') }}" type="text/css" rel="stylesheet">
<!-- === Ajax === -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<!-- === Token for Ajax Requests === -->
<meta name="csrf-token" content="{{ csrf_token() }}" />
