@extends('frontend.layout')
@section('content')
<header class="pb-11" style="margin-top: 20px;">
    <a href="#" class="flex items-center text-primary-200 gap-2 pb-8">
        <span class="">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em"
                width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z">
                </path>
            </svg></span> News</a>
    <h1 class="heading font-bold">{{ $news->title }}</h1>
</header>

<section class="pb-20 [&>p]:pb-5 [&>p]:text-primary-300">
    {!! $news->short_description !!}
    <img class="w-full pt-7 pb-12" src="{{ $news->image? url('storage/uploads/news/'.$news->image) : asset('frontend/assets/home/home-img.png') }}" alt="" srcset="">
    {!! $news->description !!}
</section>


@endsection