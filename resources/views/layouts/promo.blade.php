<div class="section">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-center">
            <div class="col-xl-8 col-auto">
                <div class="section-promo">
                        <div class="row  justify-content-center justify-content-md-between align-items-center">
                            <div class="col-auto ">
                                <div class="title ">Предложения и акции</div>
                            </div>
                            <div class="col-auto  mt-sm-0">
                                <a class="button button--red ">Все акции</a>
                            </div>
                        </div>
                    <div class="row  justify-content-md-between justify-content-center   flex-wrap">
                        @foreach($mock->promo->promos as $promo)
                        <div class="сol-12 col-md-6 mt-4 ">
                            <div  class="promo">
                                <div class="promo__head">
                                    <a href="#" class="promo__name">{{$promo->title}}</a>
                                    <div class="promo__img">
                                        <img class="promo__img__img" src="{{$promo->img->src}}" alt="{{$promo->img->alt}}">
                                    </div>
                                </div>
                                <div class="promo__info">
                                    <div class="promo__text">{{$promo->text}}</div>
                                    <div class="promo__date">{{$promo->data}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-auto col-xl-3 ">
                <div class="form form--subscription">
                    @include('layouts.form')
                </div>
            </div>
        </div>
    </div>
</div>
