<ul class="sidebar-nav">

    @if (Auth::check() && Auth::user()->role->id == 1)
     <li>
        <a href="{{ route('admin.dashboard') }}" class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
            <i class="gi gi-stopwatch sidebar-nav-icon"></i>
            <span class="sidebar-nav-mini-hide">
                Dashboard
            </span>
        </a>
    </li>
     <li>
            <a href="{{ route('admin.arts.index') }}" class="{{ Request::is('admin/arts*') ? 'active' : '' }}"><i
                    class="fa fa-list-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Arts</span></a>
        </li>
        <li>
            <a href="{{ route('admin.sliders.index') }}" class="{{ Request::is('admin/sliders*') ? 'active' : '' }}"><i
                    class="fa fa-list-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Slider</span></a>
        </li>
        <li>
            <a href="{{ route('admin.news.index') }}" class="{{ Request::is('admin/news*') ? 'active' : '' }}"><i
                    class="fa fa-list-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">News</span></a>
        </li>
         <li>
            <a href="{{ route('admin.comments.index') }}" class="{{ Request::is('admin/comments*') ? 'active' : '' }}"><i
                    class="fa fa-list-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Comments</span></a>
        </li>
        <li>
            <a href="{{ route('admin.newcomments.index') }}" class="{{ Request::is('admin/newcomments*') ? 'active' : '' }}"><i
                    class="fa fa-list-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Customer Comment</span></a>
        </li>
        <li>
            <a href="{{ route('admin.orders.index') }}" class="{{ Request::is('admin/orders*') ? 'active' : '' }}"><i
                    class="fa fa-list-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Customer Order</span></a>
        </li>





    <li class="{{ Request::is('admin/footer*') ? 'active' : '' }}">
        <a href="#" class="sidebar-nav-menu "><i
                class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                class="gi gi-shopping_cart sidebar-nav-icon"></i><span
                class="sidebar-nav-mini-hide"> Settings</span></a>
        <ul class="">
            <li class="">
                <a href="{{route('admin.footer.footer_show')}}" class="{{ Request::is('admin/footer*') ? 'active' : '' }}">Footer setting</a>
            </li>
             <li class="">
                <a href="{{route('admin.contactpage.setting')}}" class="{{ Request::is('admin/contactpage*') ? 'active' : '' }}">contact page </a>
            </li>
             {{-- <li>
                <a href="{{route('admin.footer.two')}}" class="{{ Request::is('admin/footer/two*') ? 'active' : '' }}">Column Two</a>
            </li>
            <li>
                <a href="{{route('admin.footer.three')}}" class="{{ Request::is('admin/footer/three*') ? 'active' : '' }}">Column Three</a>
            </li> --}}


        </ul>
    </li>

    @else
     <li>
        <a href="{{ route('customer.dashboard') }}" class="{{ Request::is('customer/dashboard*') ? 'active' : '' }}">
            <i class="gi gi-stopwatch sidebar-nav-icon"></i>
            <span class="sidebar-nav-mini-hide">
                Dashboard
            </span>
        </a>
    </li>
    @php
          $orders=  App\Models\Order::where('user_id', Auth::user()->id)->get()->count();

    @endphp
    @if ($orders)
     <li>
            <a href="{{ route('customer.myorder.index') }}" class="{{ Request::is('customer/myorder*') ? 'active' : '' }}  {{ Request::is('customer/orders/*') ? 'active' : '' }}"><i
                    class="fa fa-list-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Orders</span></a>
        </li>

    @endif



    @endif






</ul>
