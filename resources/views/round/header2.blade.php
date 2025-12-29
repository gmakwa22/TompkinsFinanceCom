<section class="slider-parallax bg-overlay-black-10 parallax" data-jarallax='{"speed": 0.6}' data-jarallax-video="mp4:/video1.mp4" style="background-image: url(/houston.jpg); height: 98vh;" data-jarallax-original-styles="background-image: url(/houston.jpg);">
  <div class="container spcontainer">
    <div class="row">
      <div class="col-lg-7 headermarg" style="margin-top:25%;">
        <div class="page-title-name align-middle col-lg-12">
          <h1 class="display-2 headertext font-weight-bold text-center" style="color:white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
            {{ $headpg ?? "HOUSTON'S MOST RELIABLE PAYDAY LOAN" }}
          </h1>
          <p class="text-center" style="font-size:21px; margin:3px;">
            <mark>{{ $headsub ?? "WE SOLVE CASH PROBLEMS—INSTANTLY!" }}</mark>
          </p>
        </div>
      </div>
      <div class="phonecalculator col-xs-12 col-sm-5 alpha omega f-right" style="margin-top:2%; position:relative; height: 70vh; display: flex; align-items: flex-start; justify-content: center; padding-top: 5vh;">
        @if(isset($headphonehide))
        <div class="nophone" style="height: 70vh;"></div>
        @else
          @include('round.phone-main')
        @endif
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
