

<div class="card ">
    <a href="#" class="card__head">
        <div class="card__img">
            <img class="card__img__img" src="{{$card->img->src}}" alt="{{$card->img->alt}}"></div>
        <div class="card__label">{{$card->label}}</div>
        <a href="#" class="card__name">{{$card->title}}</a>
        <div class="card__favorite ">
            <svg class="card__heart"  width="30px" height="30px">
                <use  xlink:href="public/assets/img/site.svg#heart"></use>
            </svg>
        </div>
    </a>
    <div class="card__footer">
        <div class="card__location">
            <div class="card__address" title="текст">{{$card->address}}</div>
            <svg class="card__metro" viewBox="0 0 24 24">
                <use  xlink:href="public/assets/img/metro.svg#metro"></use>
            </svg>
        </div>
        <div class="card__price">
            @if( $card->price != '')
                <div class="card__price__text">от<strong>{{$card->price}}</strong></div>
            @else
                <div class="card__price__text"><strong>Цена не известна</strong></div>
            @endif
        </div>
        @if( $card->text != '')
            <div class="card__text">IT<strong>{{$card->text}}</strong></div>
        @else
        @endif
    </div>
</div>
