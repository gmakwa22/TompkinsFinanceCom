@extends('layouts.design')

@section('content')

@include('seo.bad-credit-loans')

@include('round.installment')

@php
$random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.whatsthebest')
@elseif ($random == 2)
    @include('round.eligible')
@else
    @include('round.fivereasons')
@endif

@include('round.nocreditcheck')

@include('round.new-agent')

@endsection
