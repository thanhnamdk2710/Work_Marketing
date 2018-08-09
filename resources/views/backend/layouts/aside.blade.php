<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="icon-bar-chart"></i>
                    <span class="hidden-tablet"> Dashboard</span>
                </a>
            </li>
            <li>
                <a class="dropmenu" href="#">
                    <i class="icon-folder-close-alt"></i>
                    <span class="hidden-tablet"> Categories</span>
                </a>
                <ul>
                    <li>
                        <a class="submenu" href="{{ route('categories.index') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> List Categories</span>
                        </a>
                    </li>
                    <li>
                        <a class="submenu" href="{{ route('categories.create') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> Add Category</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="dropmenu" href="#">
                    <i class="icon-folder-close-alt"></i>
                    <span class="hidden-tablet"> Brands</span>
                </a>
                <ul>
                    <li>
                        <a class="submenu" href="{{ route('brands.index') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> List Brands</span>
                        </a>
                    </li>
                    <li>
                        <a class="submenu" href="{{ route('brands.create') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> Add Brand</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="dropmenu" href="#">
                    <i class="icon-folder-close-alt"></i>
                    <span class="hidden-tablet"> Products</span>
                </a>
                <ul>
                    <li>
                        <a class="submenu" href="{{ route('products.index') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> List Products</span>
                        </a>
                    </li>
                    <li>
                        <a class="submenu" href="{{ route('products.create') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> Add Product</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="dropmenu" href="#">
                    <i class="icon-folder-close-alt"></i>
                    <span class="hidden-tablet"> News</span>
                </a>
                <ul>
                    <li>
                        <a class="submenu" href="{{ route('news.index') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> List News</span>
                        </a>
                    </li>
                    <li>
                        <a class="submenu" href="{{ route('news.create') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> Add New</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="dropmenu" href="#">
                    <i class="icon-folder-close-alt"></i>
                    <span class="hidden-tablet"> Sliders</span>
                </a>
                <ul>
                    <li>
                        <a class="submenu" href="{{ route('sliders.index') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> List Sliders</span>
                        </a>
                    </li>
                    <li>
                        <a class="submenu" href="{{ route('sliders.create') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> Add Slider</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="dropmenu" href="#">
                    <i class="icon-folder-close-alt"></i>
                    <span class="hidden-tablet"> Pages</span>
                </a>
                <ul>
                    <li>
                        <a class="submenu" href="{{ route('pages.index') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> List Pages</span>
                        </a>
                    </li>
                    <li>
                        <a class="submenu" href="{{ route('pages.create') }}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet"> Add Page</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('shop.index') }}">
                    <i class="icon-list-alt"></i>
                    <span class="hidden-tablet"> Shop</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<noscript>
    <div class="alert alert-block span10">
        <h4 class="alert-heading">Warning!</h4>
        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
</noscript>