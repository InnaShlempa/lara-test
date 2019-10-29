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
                                <a class="button button_red ">Все акции</a>
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
                    <form action="#">
                        <div class="form__head">
                            <div class="form__title">Подпишитесь на рассылку</div>
                            <div class="form__entry">Будьте всегда в курсе последних  новостей и акций!</div>
                        </div>
                        <div class="form__body">												<div class="control control--input">
                                <label class="control__label">Введите ваш email*</label>
                                <input type="email" name="email" id="emailInput" class="control__field" placeholder="yourmail@gmail.com" required >
                            </div>
                        </div>
                        <div class="control ">
                            <button class="button button--submit" type="submit">Подписаться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
