@extends('frontend.layout')
@section('content')
<header class="section-gap text-center">
    <h1 class="heading uppercase">Cadse</h1>
    <p class="text-primary-300 pt-3">(Critical Architecture Design & Sustainable Environment)</p>
  </header>

  <section class="grid lg:grid-cols-2 border-b border-primary-100 pb-16 mb-32">
    <div
      class="lg:border-r border-primary-100 pr-15 [&>div]:py-14 [&>div]:border-b last:[&>div]:border-b-0 [&>div]:border-primary-100 [&>div>p]:text-primary-300 [&>div>p]:text-lg [&>div>p]:pb-6 [&>div>p]:xl:pr-48 [&>div>span]:text-primary-300">
      @foreach($cadses as $cadse)
      <div>
        <p>
        <a style="{{ $item->id == $cadse->id ? 'font-weight:bold' : '' }}" href="{{ url('pages/cadses/'.$cadse->id) }}">{{ $cadse->title }}</a></p>
        <span>{{ date('d.m.y',strtotime($cadse->moment)) }}</span>
      </div>
      @endforeach

    </div>

      
      <div class="pl-10">
        <div class="text-center">
          <p class="pb-4">{{ $item->title }}</p>
          <span class="text-primary-300">{{ date('d.m.y',strtotime($item->moment)) }}</span>
        </div>

        <div>
          <img src="{{asset('frontend/assets/cadse-img.png')}}" class="rounded pt-20" alt="">
          <p class="pt-10 text-primary-300 text-justify">
            {!! $item->description !!}
          </p>
        </div>
      </div>

    </section>
@endsection