@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(2) == 'courses' ? 'active' : '' }}">
                <a href="{{ route('admin.courses.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('global.courses.title')</span>
                </a>
            </li>      
            
        </ul>
    </section>
</aside>
