@extends('frontend.layout')
@section('content')
<header class="section-gap text-center">
    <h1 class="heading">Stories</h1>
</header>

<section class="grid gap-14 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pb-20">
    @foreach($stories as $storie)
    <div class="stories_gallery__card">
        <img src="{{ $storie->image ? url('storage/uploads/stories/'.$storie->image) : asset('frontend/assets/gallery/gallery-card-1.png')}}" alt="card image" />
        <div class="text-center">
            <a href="{{ url('pages/stories/'.str_replace(' ','-', $storie->name)) }}"><h3>{{ $storie->name }}</h3></a>
            {!! $storie->description !!}
        </div>
    </div>
    @endforeach

    

</section>

<!-- <div class="section-gap flex-center">
    <button class="btn-primary">Load More</button>
</div> -->

@endsection