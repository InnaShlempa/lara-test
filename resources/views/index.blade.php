


@extends('layouts.template')

    @section ('content')
        <header class="header " >
            <div class="container">
                <div class="row justify-content-md-between justify-content-center align-items-center">
                    <div class="col-auto">
                        @include('layouts.logo')
                    </div>
                    <div class="col-auto  ">
                        <ul class="nav-menu">
                            @foreach ($mock->menu as $menu_item)
                                @include('layouts.menu')
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </header>


    @include('layouts.cards_title')

        <div class="container">
            <div class="row justify-content-xl-between  justify-content-center ">
                @foreach($mock->card as $card )
                    <div class=" col-auto col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-5">
                        @include('layouts.cards')
                    </div>
                @endforeach
            </div>
        </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-center">
                <div class="col-xl-8 col-auto">
                    <div class="section-promo">
                        @include('layouts.promo_title')
                        <div class="row  justify-content-md-between justify-content-center ">
                            @foreach($mock->promo as $promo)
                                <div class="сol-12 col-md-6 mt-4 ">
                                @include('layouts.promo')
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-auto col-xl-3 ">
                    @include('layouts.form')
                </div>
            </div>
        </div>
    </div>
    </div>


        <footer class="footer">
            <div class="container ">
                <div class="row  justify-content-between justify-content-between align-items-center">
                    <div class="col-auto">
                        @include('layouts.socials')
                    </div>
                    <div class="col-auto ">
                        @include('layouts.developers')
                    </div>
                </div>
            </div>
        </footer>

    @endsection







