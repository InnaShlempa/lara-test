<header class="header " >
    <div class="container">
        <div class="row justify-content-md-between justify-content-center align-items-center">
            <div class="col-auto">

                <a href="#" class="logo">
                    <img class="logo__icon" src="public/assets/img/wezom_logo.png" alt="Wezom">
                </a>

            </div>
            <div class="col-auto  ">
                <ul class="nav-menu">

                        @foreach ($mock->menu->menu_items as $menu_item)

                            <li class="nav-menu__item">  <a href="{{$menu_item->link}}" class="nav-menu__link ">{{$menu_item->title}}</a></li>

                        @endforeach


                </ul>
            </div>
        </div>
    </div>
</header>
