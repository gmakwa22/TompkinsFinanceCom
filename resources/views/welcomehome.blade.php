

@extends($safe =='basic' ? 'layouts.basic' : 'layouts.design2')

@section('content')

@include($safe =='basic' ? 'seo.homepagebasic' : 'seo.homepage')

@endsection
