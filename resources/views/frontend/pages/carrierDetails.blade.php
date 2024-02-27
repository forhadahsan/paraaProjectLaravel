@extends('frontend.layout')
@section('content')
<header class="section-gap-t text-center">
  <h1 class="heading">Come Join Us at Para</h1>
</header>

<header class="section-gap">
    <h1 class="heading">{{ $carrier->title }}</h1>
</header>

<section class="content pb-20">
    <h3>About the job</h3>
    {!! $carrier->description !!}
</section>
@endsection