@extends('layouts.custom')

@section('title', 'Ремонт и отделка потолка в Томске | ПРОРАБ70')
@section('description', 'Цена на ремонт потолка: подвесные потолки армстронг, потолок из гипсокартона, отделка потолка пластиковыми панелями, побелка и покраска потолков. Тел: 89528052426')
@section('keywords', '')
@section('canonical', 'https://prorab70.ru/otdelka-potolka')
@section('og:title', 'Ремонт и отделка потолка в Томске | ПРОРАБ70')
@section('og:description', 'Ремонт потолка: подвесные потолки армстронг, потолок из гипсокартона, отделка потолка пластиковыми панелями, побелка и покраска потолков. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/otdelka-potolka')
@section('twitter:title', 'Ремонт и отделка потолка в Томске | ПРОРАБ70')
@section('twitter:description', 'Ремонт потолка: подвесные потолки армстронг, потолок из гипсокартона, отделка потолка пластиковыми панелями, побелка и покраска потолков. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') Отделка потолка @endslot


        @slot('parent') Главная @endslot


        {{--        @slot('prev') Предыдущая @endslot--}}
        {{--        @slot('link') {{ url('/') }} @endslot--}}

        @slot('active') Отделка потолка @endslot
        @slot('activelink') {{ url('/otdelka-potolka') }} @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/potolok.jpg') }} @endslot

    @endcomponent

    <div class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h1 class="title-2">Ремонт и отделка потолка в Томске</h1>

                <p class="optimize__text center"><b>
                        Ремонт и отделка потолка любой сложности: подвесные потолки армстронг, потолок из гипсокартона,
                        отделка потолка пластиковыми панелями, побелка и покраска потолков.

                    </b>
                </p>
                <p class="optimize__text">


                    Одним из многочисленных этапов <a href="{{ url('/remont-kvartir') }}">ремонта квартиры под ключ</a> являестя ремонт и отделка потолка. При заказе ремонта квартиры под ключ в копмании ПРОРАБ70
                    действует скидка, как на отделочные работы, так и на материалы. Но так же вы можете заказать отделку или ремонт потолка отдельно. Мы предлагаем вам выбрать вид отделки потолка из списка предоставляемых
                    нами услуг:

                </p>

                <ul class="optimize__list">
                    <li class="optimize__item">подвесные потолки армстронг</li>
                    <li class="optimize__item">потолок из гипсокартона</li>
                    <li class="optimize__item">отделка потолка пластиковыми панелями</li>
                    <li class="optimize__item">побелка и покраска потолков</li>


                </ul>
                <h2 class="title-2">Заказать ремонт потолка в Томске</h2>
                <p class="optimize__text">
                    Если вы решили не заказывать комплексный ремонт квартиры и заказать ремонт и отделку потолка, то вы пришли по адресу. Для того, чтобы заказать ремонт потолка достатьчно оставить заявку на
                    нашем сайте или позвонить по номеру телефона 8(952) 805 24-26. А так же можно написать мастеру прямо в Whatsapp.
                </p>







                <div class="optimize__btn">
                    <button class="btn btn__accent show_popup">Оставить заявку</button>
                </div>
            </div>
        </div>
    </div>


    <section class="section">
        <div class="container">
            <div class="section__inner">
                <h2 class="title-2">Цены на отделку потолка в Томске</h2>
                <p class="section__subtitle">
                    Стоимость отделки и ремонта потолка под ключ в Томске.
                </p>
                <div class="section__row">

                    <div class="section__item">


                        <h3 class="section__title">Побелка потолка</h3>
                        <div class="section__number">от 100 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/1.jpg') }}" alt="Побелка потолка" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Покраска потолка</h3>
                        <div class="section__number">от 150 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/2.jpg') }}" alt="Покраска потолка" class="section__img">

                    </div>

                    <div class="section__item">


                        <h3 class="section__title">Потолок из гипсокартона</h3>
                        <div class="section__number">от 2000 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/3.jpg') }}" alt="Потолок из гипсокартона" class="section__img">

                    </div>


                    <div class="section__item">


                        <h3 class="section__title">Натяжные потолки</h3>
                        <div class="section__number">от 129 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/4.jpg') }}" alt="Натяжные потолки" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Многоуровневый потолок</h3>
                        <div class="section__number">от 1100 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/5.jpg') }}" alt="Многоуровневый потолок" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Потолок армстронг</h3>
                        <div class="section__number">от 420 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/6.jpg') }}" alt="Потолок армстронг" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Монтаж светильников</h3>
                        <div class="section__number">от 165 р/шт</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/7.jpg') }}" alt="Монтаж светильников" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Монтаж люстры</h3>
                        <div class="section__number">от 240 р/шт</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/8.jpg') }}" alt="Монтаж люстры" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Светодиодная подсветка</h3>
                        <div class="section__number">от 500 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/potolok/9.jpg') }}" alt="Светодиодная подсветка потолка" class="section__img">

                    </div>





                </div>



            </div>
        </div>
    </section>

    @component('components.capture')

        @slot('title') ремонт потолков @endslot
        @slot('img') {{URL::asset('images/bg-4.jpg')}} @endslot
        @slot('alt') Ремонт и отделка потолков в Томске @endslot

    @endcomponent





@endsection

