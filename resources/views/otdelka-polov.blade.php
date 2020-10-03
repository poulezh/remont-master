@extends('layouts.custom')

@section('title', 'Ремонт полов в Томске. Заливка стяжки, укладка ламината')
@section('description', 'Укладка ламината, паркета, линолеума и ковролина. Заливка стяжки и выравнивание пола в Томске - Прораб70. Тел: 89528052426')
@section('keywords', 'укладка ламината, заливка стяжки, укладка паркета')
@section('canonical', 'https://prorab70.ru/otdelka-polov')
@section('og:title', 'Ремонт полов в Томске. Заливка стяжки, укладка ламината')
@section('og:description', 'Укладка ламината, паркета, линолеума и ковролина. Заливка стяжки и выравнивание пола в Томске - Прораб70. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/otdelka-polov')
@section('twitter:title', 'Ремонт полов в Томске. Заливка стяжки, укладка ламината')
@section('twitter:description', 'Укладка ламината, паркета, линолеума и ковролина. Заливка стяжки и выравнивание пола в Томске - Прораб70. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') Ремонт полов @endslot


        @slot('parent') Главная @endslot

        {{--        @slot('prev') Предыдущая @endslot--}}
        {{--        @slot('link') {{ url('/') }} @endslot--}}

        @slot('active') Ремонт полов @endslot
        @slot('activelink') {{ url('/otdelka-polov') }} @endslot


        @slot('img') {{ URL::asset('images/breadcrumbs/parket.jpg') }} @endslot
    @endcomponent


    <div class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h1 class="title-2">Ремонт полов в Томске</h1>

                <p class="optimize__text center"><b>
                    Ремонт полов любой сложности, выравнивание полов, стяжка пола.
                    Укладка напольных покрытий (линолеум, ламинат, ковролин, деревянные полы), гидроизоляция.
                    </b>
                </p>
                <p class="optimize__text">
                    Ремонт пола в Томске от компании ПРОРАБ70 включает в себя:


                </p>

                <ul class="optimize__list">
                    <li class="optimize__item">заливку стяжки</li>
                    <li class="optimize__item">выравнивание пола</li>
                    <li class="optimize__item">укладку напольных покрытий (ламинат, линолеум, паркет, ковролин)</li>


                </ul>
                <p class="optimize__text">
                    Мы можем предложить вам ремонт пола как в квартире, так и в любых других помещениях, коммерческих или нет. Ремонт полов
                    в основном начинается с выравнивания или заливки стяжки пола. Это важный этап ремонта пола, так как чем качественнее будет произведен этап заливки или выравнивания пола, тем комфортнее
                    и надежнее будет произведена дальнейшая отделка пола и укладка ламината, паркета, линолеума или ковролина. Заказать ремонт пола в Томске просто — достаточно оставить заявку на нашем сайте
                    или позвонить по телефону 8 (952) 805 24-26 и мы проконсультируем вас по всем вопросам, связанным с ремонтом пола в Томске. Так же вы можете заказать бесплатный выезд специалиста,
                    который произведет все расчёты и составит смету, где будет подробно отражены все цены на ремонт пола.

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
                <h2 class="title-2">Цены на ремонт полов в Томске</h2>
                <p class="section__subtitle">
                    Стоимость отделки и ремонта пола под ключ в Томске.
                </p>
                <div class="section__row">

                    <div class="section__item">


                        <h3 class="section__title">Стяжка пола</h3>
                        <div class="section__number">350 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/1.jpg') }}" alt="Стяжка пола" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Теплый пол</h3>
                        <div class="section__number">600 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/2.jpg') }}" alt="Теплый пол" class="section__img">

                    </div>

                    <div class="section__item">


                        <h3 class="section__title">Наливной пол</h3>
                        <div class="section__number">300 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/3.jpg') }}" alt="Наливной пол" class="section__img">

                    </div>


                    <div class="section__item">


                        <h3 class="section__title">Гидроизоляция пола</h3>
                        <div class="section__number">300 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/4.jpeg') }}" alt="Гидроизоляция пола" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Укладка линолеума</h3>
                        <div class="section__number">250 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/5.jpg') }}" alt="Укладка линолеума" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Укладка ламината</h3>
                        <div class="section__number">250 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/6.jpg') }}" alt="Укладка ламината" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Укладка ковролина</h3>
                        <div class="section__number">250 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/7.jpg') }}" alt="Укладка ковролина" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Паркетные работы</h3>
                        <div class="section__number">450 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/8.jpg') }}" alt="Паркетные работы" class="section__img">

                    </div>
                    <div class="section__item">


                        <h3 class="section__title">Ремонт пола</h3>
                        <div class="section__number">300 р/м.кв</div>

                        <a href="#" class="section__btn show_popup">Оставить заявку</a>


                        <img src="{{ URL::asset('/images/pol/9.png') }}" alt="Ремонт пола" class="section__img">

                    </div>





                </div>



            </div>
        </div>
    </section>

    @component('components.capture')

        @slot('title') ремонт полов @endslot
        @slot('img') {{URL::asset('images/bg-2.jpg')}} @endslot
        @slot('alt') Ремонт полов в Томске @endslot

    @endcomponent





@endsection

