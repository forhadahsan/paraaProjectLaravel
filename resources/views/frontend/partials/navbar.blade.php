<header class="container">
    <nav class="navbar">
      <div class="flex-center pt-10">
        <img src="{{ $website->logo? url('storage/uploads/websites/'.$website->logo) : asset('frontend/assets/paraa.png')}}" width="100px" alt="">
      </div>

      <ul class="navbar-links">
        <button onclick="toggleNavbar()"
          class="block md:hidden border border-primary py-2 px-4 rounded-lg mx-10 mb-5">✕</button>
        <li><a href="{{ url('/') }}" class="{{ (request()->is('/') || request()->is('/projects*')) ? 'active' : '' }}">Projects</a></li>
        <li><a href="{{ url('pages/stories') }}" class="{{ (request()->is('pages/stories*')) ? 'active' : '' }}">Stories</a></li>
        <li><a href="{{ url('pages/careers') }}" class="{{ (request()->is('pages/careers*')) ? 'active' : '' }}">Career</a></li>
        <li><a href="{{ url('pages/teams') }}" class="{{ (request()->is('pages/teams')) ? 'active' : '' }}">Team</a></li>
        <li><a href="{{ url('pages/about-us') }}" class="{{ (request()->is('pages/about-us')) ? 'active' : '' }}">About Paraa</a></li>
        <li><a href="{{ url('pages/shala') }}" class="{{ (request()->is('pages/shala')) ? 'active' : '' }}">Shala</a></li>
        <li><a href="{{ url('pages/cadses') }}" class="{{ (request()->is('pages/cadses*')) ? 'active' : '' }}">CADSE</a></li>
      </ul>

      <button onclick="toggleNavbar()" class="block md:hidden text-2xl">☰</button>
    </nav>
  </header>