@extends('onsite.layouts.master')
@section('content')

<style>
	body{
  font-family: 'Lato', sans-serif;
}
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
} 
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
} 
.carousel-caption {
    text-shadow: 0 1px 4px rgba(0,0,0,.9);
  font-size:17px
}
.carousel-caption h3 {
  font-size: 30px;
  font-family: 'Lato', sans-serif;
}
    html,
    body,
    .carousel,
    .carousel-inner,
    .carousel-inner .item {
      height: 100%;
    } 
    .item:nth-child(1) {
      background: url('https://snap-photos.s3.amazonaws.com/img-thumbs/960w/HZZKGVVJ6I.jpg');
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
    }

    .item:nth-child(2) {
      background: url('https://snap-photos.s3.amazonaws.com/img-thumbs/960w/D2ROMCUEIV.jpg');
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
    }

    .item:nth-child(3) {
      background: url('https://snap-photos.s3.amazonaws.com/img-thumbs/960w/PU9HHZB5QW.jpg');
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
    }
</style>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
<div style='text-align:center;'>
<h3 style='text-align: center;margin: 55px 0px;border-bottom: 2px solid #666; display:inline-block;padding-bottom:10px'>Bootstrap Carousel Fade In & FadeOut</h3>
</div>
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">  
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>



@stop