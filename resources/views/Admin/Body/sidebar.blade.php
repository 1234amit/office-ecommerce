<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/admin_home') }}" class="brand-link">
        <img src="{{ asset('/') }}admin/dist/img/1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->image ? asset(Auth::user()->image) : asset('admin/dist/img/avatar5.png') }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item {{ request()->is('admin/category*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/category*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-solid fa-object-group"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/category*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                        <li class="nav-item">
                            <a href="{{ route('addCategoryPage') }}"
                                class="nav-link {{ request()->is('admin/category/add') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/category*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                        <li class="nav-item">
                            <a href="{{ route('viewCategoryDetails') }}"
                                class="nav-link {{ request()->is('admin/category_view/details') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Category</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('admin/brand*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/brand*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Brand
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/brand*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                        <li class="nav-item">
                            <a href="{{ route('addBrandPage') }}"
                                class="nav-link {{ request()->is('admin/brand/add') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Brand</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/brand*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                        <li class="nav-item">
                            <a href="{{ route('viewBrandDetails') }}"
                                class="nav-link {{ request()->is('admin/brand/details') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Brand</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('admin/product*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/product*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/product*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }}">
                        <li class="nav-item">
                            <a href="{{ route('addProductPage') }}"
                                class="nav-link {{ request()->is('admin/product/add') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/product*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }}">
                        <li class="nav-item">
                            <a href="{{ route('viewProductPage') }}"
                                class="nav-link {{ request()->is('admin/product/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('admin/slider*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/slider*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Slider
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/slider*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }}">
                        <li class="nav-item">
                            <a href="{{ route('addSlideShowPage') }}"
                                class="nav-link {{ request()->is('admin/slider/add') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Slider</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/slider*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }}">
                        <li class="nav-item">
                            <a href="{{ route('viewSlidePage') }}"
                                class="nav-link {{ request()->is('admin/slider/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Slide</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item {{ request()->is('admin/blog*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/blog*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/blog*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }}">
                        <li class="nav-item">
                            <a href="{{ route('addBlogPage') }}"
                                class="nav-link {{ request()->is('admin/blog/add') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/blog*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }}">
                        <li class="nav-item">
                            <a href="{{ route('viewBlogPage') }}"
                                class="nav-link {{ request()->is('admin/blog/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item {{ request()->is('admin/contact*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/contact*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                            Contact
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="{{ request()->is('admin/contact*') ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }}">
                        <li class="nav-item">
                            <a href="{{ route('viewContactDetails') }}"
                                class="nav-link {{ request()->is('admin/contact/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Contact Details</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
