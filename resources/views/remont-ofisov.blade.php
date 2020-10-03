@extends('layouts.custom')

@section('title', 'Ремонт офисов под ключ в Томске | Отделка коммерческих и офисных помещений')
@section('description', 'Все виды отделочных работ в коммерческих помещениях. Ремонт офисов, магазинов и других помещений в Томске. Тел: 89528052426')
@section('keywords', 'отделка офисов, ремонт офисов')
@section('canonical', 'https://prorab70.ru/remont-ofisov')
@section('og:title', 'Ремонт офисов под ключ в Томске | Отделка коммерческих помещений')
@section('og:description', 'Все виды отделочных работ в коммерческих помещениях. Ремонт офисов, магазинов и других помещений в Томске. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/remont-ofisov')
@section('twitter:title', 'Ремонт офисов под ключ в Томске | Отделка коммерческих помещений')
@section('twitter:description', 'Все виды отделочных работ в коммерческих помещениях. Ремонт офисов, магазинов и других помещений в Томске. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') Ремонт офисов @endslot


        @slot('parent') Главная @endslot

{{--        @slot('prev') Предыдущая @endslot--}}
{{--        @slot('link') {{ url('/') }} @endslot--}}

        @slot('active') Ремонт офисов @endslot
        @slot('activelink') {{ url('/remont-ofisov') }} @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/ofis.jpg') }} @endslot
    @endcomponent


<div class="pages">
    <div class="container">
        <div class="pages__inner">
            <h1 class="pages__title">Ремонт офисов в Томске</h1>
            <p class="pages__text">
                Внутренняя отделка и дизайн интерьера в офисе это важная деталь для любой компании. Рабочая асмосфера во многом зависит от того, как выполнен интерьер
                офиса компании. Офис это место, где ваши сотрудники проводят огромное количество времени и создать уютную обстановку для работы это вклад в производительность и
                лояльность сотрудников.

            </p>

            <div class="pages__citate">
                <p class="pages__citate-text">
                    Офис - место, где ваши сотрудники проводят большую часть дня! Не экономьте на интерьере.


                </p>

            </div>

            <p class="pages__text">
                Уютная обстановка на рабочем месте повышает производительность и желание приходить на работу. Это доказанный факт.

            </p>


            <div class="pages__row">
                <div class="pages__column">
                    <h2 class="pages__column-title">Внутренняя отделка офиса под ключ</h2>


                    <div class="pages__text">
                        Предлагаем Вам оставить заявку на ремонт офиса под ключ в Томске прямо сейчас. Заполните форму своими контактными данными и наш специалист свяжется
                        с Вами в кратчайшие сроки для дальнейшего обсуждения.
                    </div>
                    <div class="pages__btn btn btn__accent show_popup">Оставить заявку</div>


                </div>

                <div class="pages__column">
                    <img src="{{ URL::asset('images/ofis-1.jpg') }}" alt="Ремонт офисов в Томске" class="pages__img">

                </div>


            </div>



        </div>

    </div>
</div>


<div class="price">
    <div class="container">
        <div class="price__inner">

                <h2 class="title-2">Цены на ремонт офисов под ключ в Томске</h2>

            <div class="price__row">

                <div class="price__item">
                    <p class="price__suptitle">Косметический</p>
                    <p class="price__price">от <span class="price__numb">1990</span> руб/кв.м</p>
                    <p class="price__subtitle">Сроки: 10-30 дней</p>
                    <hr class="price__line">
                    <ul class="price__list">
                        <li class="price__li">Выравнивание пола (финиш)</li>
                        <li class="price__li">Замена розеток</li>
                        <li class="price__li">Покраска потолка</li>
                        <li class="price__li">Поклейка обоев</li>
                        <li class="price__li">Укладка ламината</li>
                        <li class="price__li">Уборка в помещении</li>
                        <li class="price__li">Сдача объекта</li>
                    </ul>


                    <a href="#" class="price__btn show_popup">Оставить заявку</a>


                </div>

                <div class="price__item">
                    <p class="price__suptitle">Евроремонт</p>
                    <p class="price__price">от <span class="price__numb">3990</span> руб/кв.м</p>
                    <p class="price__subtitle">Сроки: 25-50 дней</p>
                    <hr class="price__line">
                    <ul class="price__list">
                        <li class="price__li">Консультация дизайнера</li>
                        <li class="price__li">Выравнивание стен и потолка</li>
                        <li class="price__li">Шпатлевка стен и потолка</li>
                        <li class="price__li">Выравнивание пола</li>
                        <li class="price__li">Монтаж электропроводки</li>
                        <li class="price__li">Установка всей сантехники</li>
                        <li class="price__li">Укладка кафельной плитки</li>
                        <li class="price__li">Монтаж натяжного потолка</li>
                        <li class="price__li">Монтаж напольного покрытия</li>
                        <li class="price__li">Уборка в помещении и сдача объекта</li>
                    </ul>


                    <a href="#" class="price__btn price__btn--accent show_popup">Оставить заявку</a>


                    <div class="price__popular">
                        Популярный
                    </div>
                </div>

                <div class="price__item">
                    <p class="price__suptitle">Элитный</p>
                    <p class="price__price">от <span class="price__numb">5990</span> руб/кв.м</p>
                    <p class="price__subtitle">Сроки: 40-70 дней</p>
                    <hr class="price__line">
                    <ul class="price__list">

                        <li class="price__li">Разработка эксклюзивного дизайн-проекта
                            интерьера с 3D-визуализацией</li>
                        <li class="price__li">Демонтажные работы и вывоз мусора</li>
                        <li class="price__li">Возведение стен</li>
                        <li class="price__li">Грунтование поверхности</li>
                        <li class="price__li">Выравнивание и подготовка стен</li>
                        <li class="price__li">Монтаж фигурного потолка</li>
                        <li class="price__li">Выравнивание пола</li>
                        <li class="price__li">Полная замена электропроводки</li>
                        <li class="price__li">Укладка плитки</li>
                        <li class="price__li">Установка сантехники</li>
                        <li class="price__li">Покраска стен и потолка</li>
                        <li class="price__li">Укладка штучного паркета</li>
                        <li class="price__li">Уборка в помещении и сдача объекта</li>

                    </ul>


                    <a href="#" class="price__btn show_popup">Оставить заявку</a>


                </div>


            </div>

        </div>
    </div>
</div>

<div class="advantages">
    <div class="container">
        <div class="advantages__inner">
            <h2 class="title-2">Преимущества ремонта офиса под ключ</h2>

            <div class="advantages__wrap">
                <div class="advantages__item">
                    <i class="far fa-clock"></i>
                    <p class="advantages__text">Экономия времени на поиски исполнителей</p>
                </div>
                <div class="advantages__item">
                    <i class="fas fa-list"></i>
                    <p class="advantages__text">Вы можете сами разделить работы на этапы</p>
                </div>
                <div class="advantages__item">
                    <i class="far fa-thumbs-up"></i>
                    <p class="advantages__text">Гарантированная скидка на комплекс работ</p>
                </div>
                <div class="advantages__item">
                    <i class="fas fa-money-bill-wave"></i>
                    <p class="advantages__text">Экономия значительной суммы денег</p>
                </div>

            </div>


            <a href="#" class="advantages__btn btn btn__accent show_popup">Оставить заявку!</a>

        </div>
    </div>

    <img src="{{ URL::asset('images/ofis-2.jpg') }}" alt="ремонт офисов под ключ в томске" class="advantages__img">

</div>




@component('components.how')

    @slot('title')

        <h2 class="title-2">Как мы работаем</h2>


    @endslot
@endcomponent


<div class="optimize">
    <div class="container">
        <div class="optimize__inner">
            <h2 class="title-2">Отделка офисов в Томске</h2>





            <p class="optimize__text">
                В наше время офис это лицо компании и любое юридическое лицо обязательно стремится к тому, чтобы у него был свой собственный офис.
                Для того, чтобы произвести впечатление на своих бизнес-партнеров или клиентов, ваш офис должен выглядеть эстетично и уютно. А для того, чтобы
                привести офисное помещение к такому виду, необходимо регулярно обновлять ремонт.
            </p>
            <p class="optimize__text">
                Наша компания Прораб70 давно специализируется на ремонте офисных помещений и мы знаем в этом толк. Мы отремонтировали уже более <b>50</b>
                коммерческих помещений: от магазинов до офисов больших компаний. Огромный опыт работы позволяет нам найти подход к любой самой сложной задаче и выполнить ее
                качественно и в срок.
            </p>

            <h2 class="optimize__title">Капитальный ремонт офиса под ключ. Виды работ:</h2>
            <ul class="optimize__list">
                <li class="optimize__item">отделочные работы;</li>
                <li class="optimize__item">электромонтажные работы;</li>
                <li class="optimize__item">сантехнические работы;</li>
                <li class="optimize__item">прочие скрытые работы.</li>


            </ul>

            <h3 class="optimize__title">Ремонт офисных помещений, качественно и в срок!</h3>

            <p class="optimize__text">
                Мы не работаем под честное слово. Только договор и только четко прописанные сроки и цены. Цена на ремонт вашего офиса будет зафиксирована в смете, в
                которой будет отображаться стоимость каждого элемента ремонта, вплоть до лампочек! Этим мы гарантируем соблюдение и выполнение взятых на себя обязательств по отделке
                вашего офиса.

            </p>

            <p class="optimize__text">

            </p>


            <div class="optimize__wrap">

                <img class="optimize__img" src="{{ URL::asset('images/ofis-3.jpg') }}" alt="Отделка офисов под ключ в Томске">
                <img class="optimize__img" src="{{ URL::asset('images/ofis-4.jpg') }}" alt="ремонт офисов под ключ в Томске">

            </div>
            <div class="optimize__btn">
                <button class="btn btn__accent show_popup">Оставить заявку</button>
            </div>


        </div>
    </div>
</div>






@endsection

