@extends('frontend.layout')
@section('content')
  <header class="container">

    <div class="pt-10 [&>span]:text-[15px] first:[&>span]:text-primary [&>span]:text-primary-200 [&>span]:border-r-2
        [&>span]:border-primary-200 last:[&>span]:border-0 [&>span]:px-4 [&>span]:md:px-8 first:[&>span]:pl-0">
      <span>All</span>
      @foreach($categories as $cat)
      <span><a href="{{ url('/?category='.str_replace(' ', '-',$cat->title)) }}"> {{ $cat->title }}</a></span>
      @endforeach
    </div>

    <div class="section-gap">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-5 [&>div]:md:pt-0 [&>div>div]:h-full [&>div>div]:w-full [&>div>div]:flex
          [&>div>div]:justify-center [&>div>div]:items-center [&>div>div]:flex-col [&>div>div]:bg-white
          [&>div>p]:text-center [&>div>p]:md:pt-5">
        <div>
          <div>
            <img src="{{asset('frontend/assets/home/paraa.png')}}" alt="">
          </div>
          <p>Paraa</p>
        </div>
        <div>
          <div>
            <img src="{{asset('frontend/assets/home/chol.png')}}" alt="">
          </div>
          <p>Chol</p>
        </div>
        <div>
          <div>
            <img src="{{asset('frontend/assets/home/shala.png')}}" alt="">
          </div>
          <p>Shala</p>
        </div>
      </div>
    </div>
  </header>
    <!-- <section class="section-gap">
      @foreach($singleProjects as $singleItem)
      <img src="{{asset('frontend/assets/home/home-img.png')}}" class="w-full h-[200px] xs:h-[300px] md:h-[415px] object-cover rounded-lg"
        alt="">
      <div class="pt-8">
        <h2 class="sub-heading">{{ $singleItem->title }}</h2>
        <p class="text-primary-300 leading-relaxed pt-8 pb-6">
          {!! $singleItem->short_description !!}
        </p>

        <a href="{{ url('projects/'.$singleItem->slug) }}" class="btn-primary">Read More</a>
      </div>
      @endforeach
    </section> -->
    <section class="grid grid-cols-12 bg-red-300">
      <div class="col-span-6">
        <img src="asset('frontend/assets/home/no-image.png')"
          class="w-full h-[200px] xs:h-[300px] md:h-[415px] object-cover rounded-lg" alt="">

        <div class="pt-8">
          <h2 class="sub-heading">Lorem ipsum dolor sit amet consectetur</h2>
          <p class="text-primary-300 leading-relaxed pt-8 pb-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum omnis repellat quisquam nesciunt nam! Ipsum numquam praesentium necessitatibus odio, repellat libero quo accusamus saepe dicta explicabo incidunt a eaque eveniet.
          </p>

          <a href="#" class="btn-primary">Read More</a>
        </div>
      </div>
      
      <div class="col-span-6">
        <img src="asset('frontend/assets/home/no-image.png')"
          class="w-full h-[200px] xs:h-[300px] md:h-[415px] object-cover rounded-lg" alt="">

        <div class="pt-8">
          <h2 class="sub-heading">Lorem ipsum dolor sit amet consectetur</h2>
          <p class="text-primary-300 leading-relaxed pt-8 pb-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum omnis repellat quisquam nesciunt nam! Ipsum numquam praesentium necessitatibus odio, repellat libero quo accusamus saepe dicta explicabo incidunt a eaque eveniet.
          </p>

          <a href="#" class="btn-primary">Read More</a>
        </div>
      </div>
      
    </section>

    <!-- <section class="flex flex-col lg:grid lg:grid-cols-2 gap-20 xl:gap-32">
      @foreach($doubleProjects as $key => $double)
      @if($key == 0 && $key % 2 == 0)
      <div class="w-full">
        <img src="{{ $double->image ? url('storage/uploads/projects/'.$double->image) : asset('frontend/assets/home/no-image.png')}}"
          class="w-full h-[200px] xs:h-[300px] md:h-[415px] object-cover rounded-lg" alt="">

        <div class="pt-8">
          <h2 class="sub-heading">{{ $double->title }}</h2>
          <p class="text-primary-300 leading-relaxed pt-8 pb-6">
            {!! $double->short_description !!}
          </p>

          <a href="{{ url('projects/'.$double->slug) }}" class="btn-primary">Read More</a>
        </div>
      </div>
      @else
      <div class="w-full pt-0 lg:pt-0">
        <img src="{{ $double->image ? url('storage/uploads/projects/'.$double->image) : asset('frontend/assets/home/no-image.png')}}"
          class="w-full h-[200px] xs:h-[300px] md:h-[415px] object-cover rounded-lg" alt="">

        <div class="pt-8">
          <h2 class="sub-heading">{{ $double->title }}</h2>
          <p class="text-primary-300 leading-relaxed pt-8 pb-6">
            {!! $double->short_description !!}
          </p>

          <a href="{{ url('projects/'.$double->slug) }}" class="btn-primary">Read More</a>
        </div>
      </div>
      @endif
      @endforeach

      <div class="col-span-2 flex-center lg:pt-0">
        <button class="btn-primary">Load More</button>
      </div>

      
    </section> -->

    <!-- <section class="py-32 grid sm:grid-cols-2 md:grid-cols-3 gap-5 lg:gap-10">
      <div class="grid gap-5 lg:gap-10">
        <div class="home_gallery__card h-[426px]">
          <img src="{{asset('frontend/assets/home/home-gallery-img-1.png')}}" alt="">

          <div class="home_gallery__card_content">
            <h2>Tranquil Terraces</h2>
            <button class="btn-secondary">View</button>
          </div>
        </div>

        <div class="home_gallery__card h-[273px]">
          <img src="{{asset('frontend/assets/home/home-gallery-img-2.png')}}" alt="">

          <div class="home_gallery__card_content">
            <h2>Tranquil Terraces</h2>
            <button class="btn-secondary">View</button>
          </div>
        </div>
      </div>

      <div class="grid gap-5 lg:gap-10">
        <div class="home_gallery__card h-[240px]">
          <img src="{{asset('frontend/assets/home/home-gallery-img-3.png')}}" alt="">

          <div class="home_gallery__card_content">
            <h2>Tranquil Terraces</h2>
            <button class="btn-secondary">View</button>
          </div>
        </div>

        <div class="home_gallery__card h-[455px]">
          <img src="{{asset('frontend/assets/home/home-gallery-img-4.png')}}" alt="">

          <div class="home_gallery__card_content">
            <h2>Tranquil Terraces</h2>
            <button class="btn-secondary">View</button>
          </div>
        </div>
      </div>

      <div class="grid col-span-1 sm:col-span-2 md:col-span-1 sm:grid-cols-2 md:grid-cols-1 gap-5 lg:gap-10">
        <div class="home_gallery__card sm:h-[385px] md:h-[302px]">
          <img src="{{asset('frontend/assets/home/home-gallery-img-5.png')}}" alt="">

          <div class="home_gallery__card_content">
            <h2>Tranquil Terraces</h2>
            <button class="btn-secondary">View</button>
          </div>
        </div>

        <div class="grid gap-5 lg:gap-10">
          <div class="home_gallery__card h-[180px]">
            <img src="{{asset('frontend/assets/home/home-gallery-img-6.png')}}" alt="">

            <div class="home_gallery__card_content">
              <h2>Tranquil Terraces</h2>
              <button class="btn-secondary">View</button>
            </div>
          </div>

          <div class="home_gallery__card h-[180px]">
            <img src="{{asset('frontend/assets/home/home-gallery-img-7.png')}}" alt="">

            <div class="home_gallery__card_content">
              <h2>Tranquil Terraces</h2>
              <button class="btn-secondary">View</button>
            </div>
          </div>
        </div>

      </div>
    </section> -->
@endsection