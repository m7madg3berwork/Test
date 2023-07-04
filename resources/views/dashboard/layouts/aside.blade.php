<aside class="main-sidebar sidebar-dark-primary elevation-4">

      <a href="{{ route('admin.home') }}" class="brand-link">
            <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png') }}" alt="{{ trans('lang.appName') }}"
                  class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ trans('lang.appName') }}</span>
      </a>

      <div class="sidebar">

            <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                              <a href="{{ route('admin.home') }}"
                                    class="nav-link {{ Route::is('admin.home') ? ' active ' : '' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                          {{ trans('lang.home') }}
                                    </p>
                              </a>
                        </li>

                        {{-- <li class="nav-item has-treeview menu-open">
                              <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                          Dashboard
                                          <i class="right fas fa-angle-left"></i>
                                    </p>
                              </a>
                              <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                          <a href="" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard v1</p>
                                          </a>
                                    </li>
                              </ul>
                        </li> --}}

                  </ul>
            </nav>
      </div>
</aside>