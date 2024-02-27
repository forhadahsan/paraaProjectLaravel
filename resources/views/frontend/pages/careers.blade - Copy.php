@extends('frontend.layout')
@section('content')
<header class="section-gap text-center">
    <h1 class="heading uppercase">Cadse</h1>
    <p class="text-primary-300 pt-3">(Critical Architecture Design & Sustainable Environment)</p>
  </header>

  <section class="grid lg:grid-cols-2 border-b border-primary-100 pb-16 mb-32">
    <div
      class="lg:border-r border-primary-100 pr-20 [&>div]:py-14 [&>div]:border-b last:[&>div]:border-b-0 [&>div]:border-primary-100 [&>div>p]:text-primary-300 [&>div>p]:text-lg [&>div>p]:pb-6 [&>div>p]:xl:pr-48 [&>div>span]:text-primary-300">
      <div>
        <p>Bridging Critical Architecture and Sustainable Futures</p>
        <span>2.2.23</span>
      </div>

      <div>
        <p>Designing Tomorrow: Unveiling the Innovative Pathways of CADSE</p>
        <span>2.2.23</span>
      </div>

      <div>
        <p>Sustainable Horizons: Navigating Critical Architecture with CADSE Principles</p>
        <span>2.2.23</span>
      </div>
    </div>


      <div class="pl-10">
        <div class="text-center">
          <p class="pb-4">Bridging Critical Architecture and Sustainable Futures</p>
          <span class="text-primary-300">2.2.23</span>
        </div>

        <div>
          <img src="{{asset('frontend/assets/cadse-img.png')}}" class="rounded pt-20" alt="">
          <p class="pt-10 text-primary-300 text-justify">
            Embark on a journey through the realms of architectural innovation and sustainable design in our latest
            article, "CADSE Chronicles." Delve into the dynamic landscape where Critical Architecture and Sustainable
            Environments converge, shaping the future of our built world.
            This insightful piece explores how CADSE, with its unique principles, acts as a bridge between critical
            architectural thinking and the imperative for sustainable development. Uncover the stories of
            groundbreaking
            projects, where critical design decisions meet eco-conscious solutions, paving the way for a harmonious
            coexistence of aesthetics and environmental responsibility.
            Join us as we navigate the CADSE Chronicles, shedding light on the transformative power of architecture in
            creating a sustainable, resilient, and inspiring future for our global communities.
          </p>
        </div>
      </div>

    </section>
@endsection