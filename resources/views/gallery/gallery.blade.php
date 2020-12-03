@extends('gallery.layout')

@section('content')
<ul id="all_slides">
    <li class="slide active">
        {{-- <img src="img/index-slide1.jpg" alt="img1" class="img-slide"> --}}
    </li>
    <li class="slide">
        {{-- <img src="img/index-slide2.jpg" alt="img2" class="img-slide"> --}}
    </li>
    <li class="slide">
        {{-- <img src="img/index-slide3.jpg" alt="img3" class="img-slide"> --}}
    </li>
</ul>

<div class="buttons">
    <button class="controls" id="previous"><i class="far fa-arrow-alt-circle-left"></i></button>
    <button class="controls" id="pause"><i class="far fa-pause-circle"></i></button>
    <button class="controls" id="next"><i class="far fa-arrow-alt-circle-right"></i></button>
    <button onclick="window.location='{{ route('temp') }}'" class="controls" id="back"><i class="fas fa-home"></i></button>
</div>
@endsection
