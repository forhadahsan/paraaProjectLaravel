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
            </svg></span> Projects</a>
    <h1 class="heading font-bold">{{ $project->title }}</h1>
</header>

<section class="pb-20 [&>p]:pb-5 [&>p]:text-primary-300">
    {!! $project->short_description !!}
    <img class="w-full pt-7 pb-12" src="{{ $project->image? url('storage/uploads/projects/'.$project->image) : asset('frontend/assets/home/home-img.png') }}" alt="" srcset="">
    {!! $project->description !!}
</section>

<!-- ========= Single Images slider ========== -->
<section class="pt-8 border-t border-primary-100">
    <div class="tab_container">
        <ul>
            <li class="active"><a href="#project-images">Images</a></li>
            <li><a href="#project-models">Models</a></li>
            <li><a href="#project-drawings">Drawings</a></li>
            <li><a href="#project-news">News</a></li>
            <li><a href="#project-credits">Credits</a></li>
        </ul>
    </div>

    @if($images->count())
    
    <div id="project-images" class="swiper project-img-slider pt-24">
        <div class="swiper-wrapper">
            @foreach($images as $image)
            <div class="swiper-slide">
                <div class="flex-center">
                    <img src="{{ $image->document ? url('storage/uploads/projectDocument/'.$image->document) : asset('frontend/assets/about/about-left.png') }}"
                        class="object-cover p-5 sm:p-0 w-full sm:w-[371px] md:w-[471px] h-[350px] sm:h-[457px] md:h-[557px]"
                        alt="">
                </div>
            </div>
            @endforeach
        </div>

        <button class="project-slider-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M9.53674e-07 1.78873e-07L1.10483e-06 12.6761L15 12.6761L9.53674e-07 1.78873e-07ZM2.99806e-07 25.1412L1.51165e-07 12.6764L15 12.6764L2.99806e-07 25.1412Z"
                    fill="#777777" />
            </svg>
        </button>
        <button class="project-slider-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15 26L15 13.3239L-5.54088e-07 13.3239L15 26ZM15 0.85881L15 13.3236L-5.54103e-07 13.3236L15 0.85881Z"
                    fill="#777777" />
            </svg>
        </button>
    </div>
    
    @endif
</section>

@if($models->count())
<!-- ========= Product Models slider ========== -->
<section id="project-models" class="section-gap">

    <h2 class="text-[22px] font-semibold pb-10">Models</h2>

    <div class="swiper models-img-slider py-7 px-14 bg-[#F0F2EA]">
        <div class="swiper-wrapper items-center">
            @foreach($models as $model)
            <div class="swiper-slide">
                <div class="flex-center">
                    <img src="{{ $model->document ? url('storage/uploads/projectDocument/'.$model->document) : asset('frontend/assets/projects/models-slider.png') }}" class="w-full h-auto rounded-sm" alt="">
                </div>
            </div>
            @endforeach
        </div>

        <button class="models-slider-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M9.53674e-07 1.78873e-07L1.10483e-06 12.6761L15 12.6761L9.53674e-07 1.78873e-07ZM2.99806e-07 25.1412L1.51165e-07 12.6764L15 12.6764L2.99806e-07 25.1412Z"
                    fill="#777777" />
            </svg>
        </button>
        <button class="models-slider-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15 26L15 13.3239L-5.54088e-07 13.3239L15 26ZM15 0.85881L15 13.3236L-5.54103e-07 13.3236L15 0.85881Z"
                    fill="#777777" />
            </svg>
        </button>
    </div>
</section>
@endif

@if($drawings->count())
<!-- ========= Product Drawings slider ========== -->
<section id="project-drawings" class="">

    <h2 class="text-[22px] font-semibold pb-10">Drawings</h2>

    <div class="swiper drawings-img-slider py-7 px-14 bg-[#F0F2EA]">
        <div class="swiper-wrapper items-end">
            @foreach($drawings as $drawing)
            <div class="swiper-slide">
                <div>
                    <img src="{{ $drawing->document ? url('storage/uploads/projectDocument/'.$drawing->document) : asset('frontend/assets/projects/drawings-img-2.png') }}" class="w-full h-auto rounded-sm" alt="">
                    <p class="pt-5">{{ $drawing->title ?? '' }}</p>
                </div>
            </div>
            @endforeach

        </div>

        <button class="drawings-slider-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M9.53674e-07 1.78873e-07L1.10483e-06 12.6761L15 12.6761L9.53674e-07 1.78873e-07ZM2.99806e-07 25.1412L1.51165e-07 12.6764L15 12.6764L2.99806e-07 25.1412Z"
                    fill="#777777" />
            </svg>
        </button>
        <button class="drawings-slider-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15 26L15 13.3239L-5.54088e-07 13.3239L15 26ZM15 0.85881L15 13.3236L-5.54103e-07 13.3236L15 0.85881Z"
                    fill="#777777" />
            </svg>
        </button>
    </div>
</section>
@endif

@if($news->count())
<!-- ========= News ========== -->
<section id="project-news" class="section-gap">
    <h2 class="text-[22px] font-semibold pb-10">News</h2>

    <div class="grid lg:grid-cols-2 gap-16 xl:gap-32">
        @foreach($news as $n)
        <div class="grid sm:grid-cols-2 gap-8">
            <img src="{{ $n->image? url('storage/uploads/news/'.$n->image) : asset('frontend/assets/about/about-left.png')}}" class="w-full h-48 xs:h-80 sm:h-auto object-cover rounded"
                alt="">
            <div class="text-sm">
                <span class="text-primary-300">{{ $n->category }}</span>
                <h2 class="text-lg text-primary font-semibold pt-6 pb-4">{{ $n->title }}
                </h2>
                <p class="text-primary">
                     @if($n->address)
                    <span>{{ $n->address }}</span>
                    <br>
                    @endif
                    <span>{{ $n->created_at }}</span>
                </p>

                @if($n->website_url)
                <a href="{{$n->website_url}}" class="block pt-4 pb-6 underline">{{$n->website_url}}</a>
                @endif
                <p class="text-primary-300">
                {!! $n->short_description !!}
                <a href="{{ url('project-news/'.$n->slug) }}">Read More</a>
                </p>

                <label class=" block pt-[22px] text-primary underline text-[15px]">Project: Paraa Apartment
                    Building</label>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif
<section id="project-credits" class="">
    <h2 class="text-[22px] font-semibold">Credits</h2>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-y-0 gap-x-5 md:gap-28">
        <div>
            <div class="content-sm">
                <h3>Credits</h3>
                <p>Copenhagen, Denmark</p>
            </div>

            <div class="content-sm">
                <h3>Date</h3>
                <p>2014–2020</p>
            </div>

            <div class="content-sm">
                <h3>Client</h3>
                <p>Urban Developments Ltd.</p>
            </div>

            <div class="content-sm">
                <h3>Area</h3>
                <p>10,500 m²</p>
            </div>

            <div class="content-sm">
                <h3>Smith & Jones Architecture Studio</h3>
                <p>Emily Smith, Michael Jones, Rachel Hayes</p>
            </div>
        </div>
        <div>
            <div class="content-sm">
                <h3>Project Architects</h3>
                <p>Laura Anderson (2013-2014), Daniel Mitchell (2014-2015),
                    Sarah Turner (2015-2016), Matthew Evans (2016-2020)</p>
            </div>

            <div class="content-sm">
                <h3>Collaborating Architects</h3>
                <p>Harper Associates, Nexus Design, Urbanscape</p>
            </div>

            <div class="content-sm">
                <h3>Executive Architect</h3>
                <p>Buildcraft Developments Ltd.</p>
            </div>

            <div class="content-sm">
                <h3>Structural Engineer</h3>
                <p>Nexus Structures Ltd.</p>
            </div>

            <div class="content-sm">
                <h3>Services Engineer</h3>
                <p>Emily Smith</p>
            </div>
        </div>

        <div class="col-span-1 sm:col-span-2 md:col-span-1 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1">
            <div class="content-sm">
                <h3>Cost Consultant</h3>
                <p>BuildCraft Solutions ApS</p>
            </div>

            <div class="content-sm">
                <h3>Project Manager</h3>
                <p>Urban Development Ltd.</p>
            </div>

            <div class="content-sm">
                <h3>Acoustics</h3>
                <p>Sonic Developments Ltd.</p>
            </div>

            <div class="content-sm">
                <h3>Main Contractor</h3>
                <p>ConstructaBuild A/S</p>
            </div>

            <div class="content-sm">
                <h3>Awards</h3>
                <p>Sustainable Building Award, Green Design category</p>
            </div>
        </div>
    </div>
</section>

@endsection