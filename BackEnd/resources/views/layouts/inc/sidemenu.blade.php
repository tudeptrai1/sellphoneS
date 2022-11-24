<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <ul>
        <li>
            <a href="{{route('dashboard')}}" class="side-menu ">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Thống kê
                </div>
            </a>

        </li>
        <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
            <div class="side-menu__title">
                Sản phẩm
                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
            </div>
        </a>
        <ul class="">
            <li>
                <a href="{{route('product')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                    <div class="side-menu__title"> Sản phẩm  </div>
                </a>
            </li><li>
                <a href="{{route('pg')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="copy"></i> </div>
                    <div class="side-menu__title"> Nhóm Sản Phẩm</div>
                </a>
            </li>
            <li>
                <a href="{{route('color')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="edit-2"></i> </div>
                    <div class="side-menu__title"> Màu </div>
                </a>
            </li><li>
                <a href="{{route('memory')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="cpu"></i> </div>
                    <div class="side-menu__title"> Dung Lượng </div>
                </a>
            </li>
        </ul>
        </li>
        <li>
            <a href="{{route('brand')}}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="list"></i> </div>
                <div class="side-menu__title"> Nhãn Hàng </div>
            </a>
        </li>
        <li>
            <a href="{{route('order')}}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                <div class="side-menu__title"> Đơn Hàng </div>
            </a>
        </li>
        <li>
            <a href="{{route('user')}}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                <div class="side-menu__title"> Khách Hàng </div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
