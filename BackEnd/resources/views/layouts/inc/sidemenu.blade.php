<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <ul>
        <li>
            <a href="javascript:;.html" class="side-menu ">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>

        </li>
        <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
            <div class="side-menu__title">
                Product
                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
            </div>
        </a>
        <ul class="">
            <li>
                <a href="{{route('product')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                    <div class="side-menu__title"> Product  </div>
                </a>
            </li><li>
                <a href="{{route('pg')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="copy"></i> </div>
                    <div class="side-menu__title"> Product Group </div>
                </a>
            </li>
            <li>
                <a href="{{route('color')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="edit-2"></i> </div>
                    <div class="side-menu__title"> Color </div>
                </a>
            </li><li>
                <a href="{{route('memory')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="cpu"></i> </div>
                    <div class="side-menu__title"> Memory </div>
                </a>
            </li>
        </ul>
        </li>
        <li>
            <a href="{{route('brand')}}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="list"></i> </div>
                <div class="side-menu__title"> Brand </div>
            </a>
        </li>
        <li>
            <a href="{{route('order')}}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                <div class="side-menu__title"> Order </div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
