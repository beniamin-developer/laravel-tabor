<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                {{ Lang::get('menu.application_name') }}
            </a>
        </li>
        <li>
            {{ HTML::linkRoute('vehicle.index', Lang::get('menu.vehicles')) }}
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->