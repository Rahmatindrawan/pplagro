<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title">FITUR PETANI</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="nav-icon icon-drop"></i> Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">
                <i class="nav-icon icon-drop"></i> Produk
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('orders.index') }}">
                <i class="nav-icon icon-drop"></i> Pesanan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.view') }}">
                <i class="nav-icon icon-drop"></i> Edukasi
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('recom.view') }}">
                <i class="nav-icon icon-drop"></i> Rekomendasi
            </a>
        </li>
    </ul>
</nav>