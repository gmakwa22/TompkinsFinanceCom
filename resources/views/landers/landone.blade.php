    @include('landers.trust')

@if ("$land" == "l1")
    @include('landers.black-counter')
@elseif ("$land" == "l2")
    @include('landers.black-counter')
@elseif ("$land" == "l3")
    @include('landers.black-counter')
@elseif ("$land" == "l4")
    @include('landers.black-counter')
@elseif ("$land" == "l5")
    @include('landers.trust')
@else
    @include('landers.black-counter')
@endif

@include('global.bottom-express-middle')
@include('round.applyandapprove')

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.fastandflex')
@elseif ($random == 2)
    @include('round.eligible')
@else
    @include('round.fivereasons')
@endif

@include('round.nocreditcheck')
