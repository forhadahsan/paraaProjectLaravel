@extends('frontend.layout')
@section('content')
<header class="section-gap-t text-center">
  <h1 class="heading">Come Join Us at Para</h1>
</header>

<section class="section-gap">
  @foreach($carriers as $item)
  <div class="w-full flex justify-between gap-4 border-b border-primary-100 py-11">
    <h3 class="text-xl sm:text-2xl">{{ $item->title }}</h3>
    <a href="{{ url('pages/careers/'.str_replace(' ','-',$item->title)) }}" class="btn-primary">Apply</a>
  </div>
  @endforeach
</section>
@endsection