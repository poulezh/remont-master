@extends('layouts.custom')

@section('title', 'Выравнивание стен, возведение перегородок в Томске | ПРОРАБ70')
@section('description', 'Ремонт стен, штукатурка, шпатлевка стен, поклейка обоев и облицовка стен гипсокартоном в Томске. Тел: 89528052426')
@section('keywords', '')
@section('canonical', 'https://prorab70.ru/otdelka-sten')
@section('og:title', 'Выравнивание стен, возведение перегородок в Томске | ПРОРАБ70')
@section('og:description', 'Ремонт стен, штукатурка, шпатлевка стен, поклейка обоев и облицовка стен гипсокартоном в Томске. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/otdelka-sten')
@section('twitter:title', 'Выравнивание стен, возведение перегородок в Томске | ПРОРАБ70')
@section('twitter:description', 'Ремонт стен, штукатурка, шпатлевка стен, поклейка обоев и облицовка стен гипсокартоном в Томске. Тел: 89528052426')


@section('content')


    @component('components.breadcrumb')
        @slot('title') Ремонт стен @endslot


        @slot('parent') Главная @endslot

        {{--        @slot('prev') Предыдущая @endslot--}}
        {{--        @slot('link') {{ url('/') }} @endslot--}}

        @slot('active') Ремонт стен @endslot
        @slot('activelink') {{ url('/otdelka-polov') }} @endslot


        @slot('img') {{ URL::asset('images/breadcrumbs/steny.jpg') }} @endslot
    @endcomponent


    <div class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h1 class="title-2">Ремонт стен в Томске</h1>

                <p class="optimize__text center"><b>
                        Ремонт и одделка стен в Томске любой сложности.
                    </b>
                </p>
                <p class="optimize__text">
                    Ремонт стен в Томске от компании ПРОРАБ70 включает в себя:


                </p>


                <ul class="optimize__list">
                    <li class="optimize__item">штукатурка стен</li>
                    <li class="optimize__item">штукатурка стен по маякам</li>
                    <li class="optimize__item">выравнивание стен гипсокартоном</li>
                    <li class="optimize__item">покраска стен</li>
                    <li class="optimize__item">декоративная штукатурка</li>
                    <li class="optimize__item">поклейка обоев</li>



                </ul>
                <p class="optimize__text">
                    Отделка и ремонт стен это важный этап в <a href="{{ url('/remont-kvartir') }}">ремонте квартиры</a> или другого помещения,
                    <a href="{{url('/remont-ofisov')}}">ремонте офиса</a> или даже склада. От того на сколько качественным будет ремонт стен будет зависеть
                    как внешний вид интерьера, так и его долговечность. Стоимость ремонта стен варьируется в зависимости от используемых материалов или техники нанесения этого материала
                    на стену. Объем работы зависит от состояния стен и используемых материалов.

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
                <h2 class="title-2">Цены на ремонт и отделку стен в Томске</h2>
                <p class="section__subtitle">
                    Стоимость отделки и ремонта стен под ключ в Томске.
                </p>
                <div class="section__row">

                    <div class="section__item">


                        <h3 class="section__title">Выравнивание по маякам</h3>
                        <div class="section__number">от 350 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/1.jpg') }}" alt="Выравнивание стен по маякам" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Облицовка стен гипсокартоном</h3>
                        <div class="section__number">от 300 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/2.jpg') }}" alt="Облицовка стен гипсокартоном" class="section__img">

                    </div>

                    <div class="section__item">


                        <h3 class="section__title">Покраска стен</h3>
                        <div class="section__number">от 80 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/3.jpg') }}" alt="Покраска стен" class="section__img">

                    </div>


                    <div class="section__item">


                        <h3 class="section__title">Шпатлевка / штукатурка</h3>
                        <div class="section__number">от 280 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/4.jpg') }}" alt="Шпатлевка / штукатурка стен" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Поклейка обоев</h3>
                        <div class="section__number">от 150 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/5.jpg') }}" alt="Поклейка обоев" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Отделка кафелем</h3>
                        <div class="section__number">от 600 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/6.jpg') }}" alt="Отделка стен кафелем" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Устройство короеда</h3>
                        <div class="section__number">от 300 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/7.jpg') }}" alt="Устройство короеда" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Отделка ламинатом</h3>
                        <div class="section__number">от 300 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/8.jpg') }}" alt="Отделка стен ламинатом" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Декоративная штукатурка</h3>
                        <div class="section__number">от 700 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/steny/9.jpg') }}" alt="Декоративная штукатурка стен" class="section__img">

                    </div>





                </div>



            </div>
        </div>
    </section>

    @component('components.capture')

        @slot('title') ремонт стен @endslot
        @slot('img') {{URL::asset('images/bg-3.jpg')}} @endslot
        @slot('alt') Ремонт полов в Томске @endslot

    @endcomponent





@endsection





