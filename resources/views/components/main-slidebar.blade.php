  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ Auth::user()->name }}</a>
              </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('dashboard') }}" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              {{ __('Dashboard') }}
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')"
                          class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              {{ __('Profile') }}
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Forms
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('list.company.infmation') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Info</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('list') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>About</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('list.layanan') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Layanan</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('list.services') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Services</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('list.portfolio') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Portfolio</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('list.client.banner') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Client Banner</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('list.user.catalog') }}" class="nav-link">
                                  <i class="fas fa-users nav-icon"></i>
                                  <p>User Download Catalog</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <form method="POST" class="nav-item" action="{{ route('logout') }}">
                      @csrf
                      <a href="#" class="nav-link" href="{{ route('logout') }}"
                          onclick="event.preventDefault();this.closest('form').submit();">
                          <i class="nav-icon fas fa-power-off"></i>
                          {{ __('Log Out') }}
                      </a>
                  </form>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
