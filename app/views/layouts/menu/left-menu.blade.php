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

        <li>
            {{ HTML::linkRoute('cart.show', Lang::get('menu.cart')) }}
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->