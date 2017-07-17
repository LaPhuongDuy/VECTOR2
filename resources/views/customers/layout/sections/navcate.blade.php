<nav>
    <div class="container">
        <div class="nav-inner">
            <a class="logo-small" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="{{ asset('assets/images/logo-small.png') }}"></a>
            <ul id="nav" class="hidden-xs">
                @if (isset($id))
                    @include('customers.sections.components.menu_cate', ['categories' => $categoriesMenu, 'id' => $id])
                @else
                    @include('customers.sections.components.menu', ['categories' => $categoriesMenu])
                @endif
            </ul>
        </div>
    </div>
</nav>

