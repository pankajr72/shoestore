<?php 
    $page = Request::route()->getName();
    $seg2 = Request::segment(2);
    $seg3 = Request::segment(3);
?>

<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ $page == 'home' ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    <a href="{{ route('test') }}" class="nav-link {{ $page == 'test' ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Test</p>
    </a>
</li>
<li class="nav-item has-treeview {{ $seg2 == 'products' ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ $seg2 == 'products' ? 'active' : '' }}">
        <i class="fa fa-shopping-cart nav-icon" aria-hidden="true"></i>
        <p>
        Products
        <i class="fas fa-angle-left right"></i>
        <!-- <span class="badge badge-info right">6</span> -->
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{ route('categories.index') }}" class="nav-link {{ $seg3 == 'categories' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Product Categories</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('products.index') }}" class="nav-link {{ $seg3 == 'products' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Products</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="" class="nav-link {{ $seg3 == 'products-attributes' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Product Attributes</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="" class="nav-link {{ $seg3 == 'products-images' ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Product Images</p>
        </a>
        </li>
    </ul>
</li>