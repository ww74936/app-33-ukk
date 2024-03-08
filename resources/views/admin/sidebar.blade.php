  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="{{ url('admin') }}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-heading">Pages</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('kategori') }}">
                  <i class="bi bi-bookmarks"></i>
                  <span>Kategori</span>
              </a>
          </li><!-- End Contact Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('buku') }}">
                  <i class="bi bi-book"></i>
                  <span>Buku</span>
              </a>
          </li><!-- End Profile Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('peminjaman') }}">
                  <i class="bi bi-journal"></i>
                  <span>Peminjanan</span>
              </a>
          </li><!-- End Peminjaman Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('user') }}">
                  <i class="bi bi-person"></i>
                  <span>User</span>
              </a>
          </li><!-- End User Page Nav -->

          <li class="nav-item">
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-responsive-nav-link :href="route('logout')"
                      onclick="event.preventDefault();
            this.closest('form').submit();"
                      class="nav-link collapsed">
                      <i class="bi bi-box-arrow-left"></i>
                      {{ __('Log Out') }}
                  </x-responsive-nav-link>
              </form>
              <!-- Authentication -->
          </li><!-- End Login Page Nav -->
      </ul>

  </aside><!-- End Sidebar-->
