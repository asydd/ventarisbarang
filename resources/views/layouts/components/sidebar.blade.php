@php
    $menus = 
    [
        (object) [
            "title" => "Dashboard",
            "path" => "/dashboard",
            "icon" => "fas fa-tachometer-alt"
        ],
        (object) [
            "title" => "Item",
            "path" => "/items",
            "icon" => "fas fa-box"
        ],
        (object) [
            "title" => "Detail Barang",
            "path" => "/detail_barang",
            "icon" => "fas fa-info-circle" // ikon detail barang
        ],
        (object) [
            "title" => "Kategori",
            "path" => "/categories",
            "icon" => "fas fa-tags"
        ],
        (object) [
            "title" => "Produk",
            "path" => "/products",
            "icon" => "fas fa-cube"
        ],
        (object) [
            "title" => "Supplier",
            "path" => "/suppliers",
            "icon" => "fas fa-truck"
        ],
        (object) [
            "title" => "Transaksi",
            "path" => "/transactions",
            "icon" => "fas fa-exchange-alt"
        ],
        (object) [
            "title" => "Laporan",
            "path" => "/reports",
            "icon" => "fas fa-file-alt"
        ],
    ];
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset ('templates/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Inventastis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- User Panel -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('templates/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhammad Rasyid Ridho</a>
        </div>
      </div>

      <!-- Search Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @foreach ($menus as $menu)
            <li class="nav-item">
              <a href="{{ $menu->path[0] !== '/' ? '/' . $menu->path : $menu->path }}" 
                 class="nav-link{{ request()->path() === ltrim($menu->path, '/') ? ' active' : '' }}">
                <i class="nav-icon {{ $menu->icon }}"></i>
                <p>{{ $menu->title }}</p>
              </a>
            </li>
          @endforeach
        </ul>
      </nav>
    </div>
</aside>
