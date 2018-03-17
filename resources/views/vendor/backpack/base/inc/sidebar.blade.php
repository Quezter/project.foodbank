@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          {{-- <li disable="disable"><a href="{{ url('admin/initiative') }}"><i class="fa fa-tag"></i> <span>Initiatives</span></a></li> --}}
          {{-- <li disable="disable"><a href="{{ url('admin/initiative-details') }}"><i class="fa fa-tag"></i> <span>Initiatives Details</span></a></li> --}}
          <li><a href="{{ url('admin/event') }}"><i class="fa fa-tag"></i> <span>Events</span></a></li>
          <li><a href="{{ url('admin/event-details') }}"><i class="fa fa-tag"></i> <span>Events Details</span></a></li>
          {{-- <li disable="disable"><a href="{{ url('admin/config') }}"><i class="fa fa-tag"></i> <span>Configurations</span></a></li> --}}

          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
