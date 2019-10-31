

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

