@extends('frontend.layout')
@section('content')
<header class="section-gap text-center">
    <h1 class="heading">Gallery of Shala</h1>
</header>

<section class="grid gap-14 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pb-20">
    @foreach($gallaries as $item)
    <div class="gallery__card">
        <img src="{{ $item->image ? url('storage/uploads/galleries/'.$item->image) : asset('frontend/assets/gallery/gallery-card-1.png')}}" alt="card image" />
        <div>
            <h3>{{$item->name }}</h3>
            <p>{{$item->description }}</p>
        </div>
    </div>
    @endforeach

    

</section>

    @endsection