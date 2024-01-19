            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <header class="container header">
    <nav class="nav">
      <div class="logo">
        <h2>Uran</h2>
      </div>

      <div class="nav_menu" id="nav_menu">
        <button class="close_btn" id="close_btn">
          <i class="ri-close-fill"></i>
        </button>

        <ul class="nav_menu_list">
          <li class="nav_menu_item">
            <a href="{{route('informasis.index')}}" class="nav_menu_link">informasi</a>
          </li>
          <li class="nav_menu_item">
            <a href="{{route('iurans.create')}}" class="nav_menu_link">Transaksi</a>
          </li>
          <li class="nav_menu_item">
            <a href="{{route('keluahans.create')}}" class="nav_menu_link">laporan</a>
          </li>
          <li class="nav_menu_item">
            <a href="{{route('profile.edit')}}" class="nav_menu_link">profile</a>
          </li>
        </ul> 

      </div>
      <div class="d-flex justify-content-center text-center">
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary caret-white">
                    <p class="font-bold font-serif" style="color: white">Logout</p>
                </button>
            </form>
        @else
            <button class="btn btn-primary caret-white">
                <a href="{{ route('login') }}" class="caret-white text-decoration-none">
                    <p class="font-bold font-serif" style="color: white">Masuk</p>
                </a>
            </button>
        @endauth
    </div> 
      <button class="toggle_btn" id="toggle_btn">
        <i class="ri-menu-line"></i>
      </button>
    </nav>
  </header>