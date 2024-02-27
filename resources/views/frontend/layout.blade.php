@php ($website = \App\Models\Website::first())

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $website->name }}</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{asset('frontend/styles/styles.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/styles/output.css')}}">
</head>

<body>
  @include('frontend.partials.navbar')



  <main class="container">

    @yield('content')

  </main>

  <footer class="bg-white">
    <div class="container">
      <div
        class="border-t border-primary-100 grid md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 pt-20 lg:pt-36 pb-6 lg:pb-8 ">
        <div>
          <h2 class="text-primary text-lg mb-6 font-semibold">Quick Links</h2>
          <ul class="">
            <li class="mb-4">
              <a href="{{ url('/') }}" class="text-primary-300">Projects</a>
            </li>
            <li class="mb-4">
              <a href="{{ url('pages/stories') }}" class="text-primary-300">Stories</a>
            </li>
            <li class="mb-4">
              <a href="{{ url('pages/careers') }}" class="text-primary-300">Career</a>
            </li>
            <li class="mb-4">
              <a href="{{ url('pages/teams') }}" class="text-primary-300">Team</a>
            </li>
            <li class="mb-4">
              <a href="{{ url('pages/about-us') }}" class="text-primary-300">About</a>
            </li>
          </ul>
        </div>
        <div>
          <h2 class="text-primary text-lg mb-6 font-semibold">Social media</h2>
          <ul class="">
            @if(!empty($website->facebook))
            <li class="mb-4">
              <a href="{{ $website->facebook }}" class="text-primary-300">Facebook</a>
            </li>
            @endif
            @if(!empty($website->instagram))
            <li class="mb-4">
              <a href="{{ $website->instagram }}" class="text-primary-300">Instagram</a>
            </li>
            @endif
            @if(!empty($website->linkedin))
            <li class="mb-4">
              <a href="{{ $website->linkedin }}" class="text-primary-300">Linkedin</a>
            </li>
            @endif
          </ul>
        </div>
        <div>
          <h2 class="text-primary text-lg mb-6 font-semibold">Location</h2>
          <ul class="">
            <li class="mb-4">
              <p class="text-primary-300 mb-4">
                {!! $website->address !!}
              </p>
              
              <p class="text-primary-300 mb-4">
                Phone: {{ $website->phone }}
              </p>
            </li>
          </ul>
        </div>

        <div>
          <p className="text-primary-300 pb-7">DROP US A LINE</p>
          <a href="#" style="font-size: 30px;" className="block text-primary-400 pt-7">{{ $website->email }}</a>
        </div>
      </div>
      <div class="flex justify-center items-center pt-10 pb-16">
        <img src="{{ $website->logo? url('storage/uploads/websites/'.$website->logo) : asset('frontend/assets/paraa.png')}}" alt="">
      </div>
    </div>
  </footer>

  <script src="{{asset('frontend/scripts/script.js')}}"></script>
  <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".project-img-slider", {
            navigation: {
                nextEl: ".project-slider-button-next",
                prevEl: ".project-slider-button-prev",
            },
        });

        var swiperModels = new Swiper(".models-img-slider", {
            slidesPerView: 1.2,
            spaceBetween: "10px",
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                    spaceBetween: "20px",
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: "40px",
                },
            },
            navigation: {
                nextEl: ".models-slider-button-next",
                prevEl: ".models-slider-button-prev",
            },
        });


        var drawingsModels = new Swiper(".drawings-img-slider", {
            slidesPerView: 1,
            spaceBetween: "10px",
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                    spaceBetween: "20px",
                },
                768: {
                    slidesPerView: 2.9,
                    spaceBetween: "40px",
                },
            },
            navigation: {
                nextEl: ".drawings-slider-button-next",
                prevEl: ".drawings-slider-button-prev",
            },
        });
    </script>

</body>

</html>