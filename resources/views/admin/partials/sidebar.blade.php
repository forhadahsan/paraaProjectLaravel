<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ url('admin/dashboard') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
        <!-- <img src="{{ asset('frontend/img/logo.png') }}" alt=""> -->
        <h5>PurpleLeafParaa</h5>
      </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->is('admin/dashboard')? 'active' : '' }}">
      <a href="{{ url('admin/dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li>
    <li class="menu-item {{ request()->is('admin/cadses*')? 'active' : '' }}">
      <a href="{{ url('admin/cadses') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Cadse</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/teams*')? 'active' : '' }}">
      <a href="{{ url('admin/teams') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Team</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/stories*')? 'active' : '' }}">
      <a href="{{ url('admin/stories') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Stories</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/projects*')? 'active' : '' }}">
      <a href="{{ url('admin/projects') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Project</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/documents*')? 'active' : '' }}">
      <a href="{{ url('admin/documents') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Project Documents</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/news*')? 'active' : '' }}">
      <a href="{{ url('admin/news') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">News</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/galleries*')? 'active' : '' }}">
      <a href="{{ url('admin/galleries') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Gallery</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/carriers*')? 'active' : '' }}">
      <a href="{{ url('admin/carriers') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Career</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/projectcategory*')? 'active' : '' }}">
      <a href="{{ url('admin/projectcategory') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Project Category</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/credits*')? 'active' : '' }}">
      <a href="{{ url('admin/credits') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Credits</div>
      </a>
    </li>
 
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Configuration</span>
    </li>
    <li class="menu-item {{ request()->is('admin/websites*')? 'active' : '' }}">
      <a href="{{ url('admin/websites/1/edit') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Website</div>
      </a>
    </li>

 

  </ul>
</aside>