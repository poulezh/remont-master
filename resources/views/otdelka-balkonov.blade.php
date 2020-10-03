@extends('layouts.custom')

@section('title', 'Отделка балконов под ключ в Томске. Ремонт балконов Томск')
@section('description', 'Заказать ремонт балкона в Томске. ВНутренняя отделка балконов Томск. Тел: 89528052426')
@section('keywords', 'отделка балконов, ремонт балкона, ремонт балкона под ключ, томск')
@section('canonical', 'https://prorab70.ru/otdelka-balkonov')
@section('og:title', 'Отделка балконов под ключ в Томске. Ремонт балконов Томск')
@section('og:description', 'Заказать ремонт балкона в Томске. ВНутренняя отделка балконов Томск. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/otdelka-balkonov')
@section('twitter:title', 'Отделка балконов под ключ в Томске. Ремонт балконов Томск')
@section('twitter:description', 'Заказать ремонт балкона в Томске. ВНутренняя отделка балконов Томск. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') Отделка балконов @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Отделка балконов @endslot
        @slot('activelink') {{ url('/otdelka-balkonov') }} @endslot
        @slot('img') {{ URL::asset('images/bg-breadcrumbs.jpg') }} @endslot
    @endcomponent


{{--<div class="pages">--}}
{{--    <div class="container">--}}
{{--        <div class="pages__inner">--}}
{{--            <h1 class="pages__title">Ремонт квартир в Томске</h1>--}}
{{--            <p class="pages__text">--}}
{{--                Как найти правильного подрядчика для ремонта квартиры в Томске? Все просто: позвоните в несколько организаций и позовите их на замер Вашей квартиры.--}}
{{--                Обычно выезд, замер и составление сметы это бесплатная услуга. У нас она точно <b>БЕСПЛАТНА</b>.--}}

{{--            </p>--}}

{{--            <div class="pages__citate">--}}
{{--                <p class="pages__citate-text">--}}
{{--                    Сравните несколько смет от разных компаний и выберите цену, которая Вас устроит.--}}


{{--                </p>--}}

{{--            </div>--}}

{{--            <p class="pages__text">Такой подход позволит отсеять лучшие предложения на рынке и не прогадать с ценой. С понравившимся подрядчиком можно и поторговаться,--}}
{{--            чаще всего в таком случае можно добиться дополнительной скидки на ремонтные работы.--}}

{{--            </p>--}}


{{--            <div class="pages__row">--}}
{{--                <div class="pages__column">--}}
{{--                    <h3 class="pages__column-title">Ремонт квартиры под ключ. На что обратить внимание?</h3>--}}
{{--                    <ul class="pages__list">--}}
{{--                        <li class="pages__list-item">Суммарная стоимость работ за ремонт под ключ должна быть меньше, чем если бы Вы заказывали каждую услугу отдельно</li>--}}
{{--                        <li class="pages__list-item">Обратите внимание, есть ли скидка на закупку строительных материалов и возможность делегировать это подрядчикам</li>--}}
{{--                        <li class="pages__list-item">Работайте только с теми, кто заключает договор</li>--}}
{{--                        <li class="pages__list-item">Внимательно читайте условия договора перед его подписанием.</li>--}}

{{--                    </ul>--}}
{{--                    <div class="pages__text">--}}
{{--                        Предлагаем Вам оставить заявку на ремонт квартиры под ключ в Томске прямо сейчас. Заполните форму своими контактными данными и наш специалист свяжется--}}
{{--                        с Вами в кратчайшие сроки для дальнейшего обсуждения.--}}
{{--                    </div>--}}
{{--                    <div class="pages__btn btn btn__accent show_popup">Заявка на замер</div>--}}


{{--                </div>--}}

{{--                <div class="pages__column">--}}
{{--                    <img src="{{ URL::asset('images/service.jpg') }}" alt="Ремонт квартир в Томске" class="pages__img">--}}

{{--                </div>--}}


{{--            </div>--}}



{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}


{{--<div class="price">--}}
{{--    <div class="container">--}}
{{--        <div class="price__inner">--}}

{{--                <h2 class="title-2">Цены на ремонт квартир под ключ в Томске</h2>--}}

{{--            <div class="price__row">--}}

{{--                <div class="price__item">--}}
{{--                    <p class="price__suptitle">Косметический</p>--}}
{{--                    <p class="price__price">от <span class="price__numb">1990</span> руб/кв.м</p>--}}
{{--                    <p class="price__subtitle">Сроки: 10-30 дней</p>--}}
{{--                    <hr class="price__line">--}}
{{--                    <ul class="price__list">--}}
{{--                        <li class="price__li">Выравнивание пола (финиш)</li>--}}
{{--                        <li class="price__li">Замена розеток</li>--}}
{{--                        <li class="price__li">Покраска потолка</li>--}}
{{--                        <li class="price__li">Поклейка обоев</li>--}}
{{--                        <li class="price__li">Укладка ламината</li>--}}
{{--                        <li class="price__li">Уборка в помещении</li>--}}
{{--                        <li class="price__li">Сдача объекта</li>--}}
{{--                    </ul>--}}


{{--                    <a href="#" class="price__btn show_popup">Оставить заявку</a>--}}


{{--                </div>--}}

{{--                <div class="price__item">--}}
{{--                    <p class="price__suptitle">Евроремонт</p>--}}
{{--                    <p class="price__price">от <span class="price__numb">3990</span> руб/кв.м</p>--}}
{{--                    <p class="price__subtitle">Сроки: 25-50 дней</p>--}}
{{--                    <hr class="price__line">--}}
{{--                    <ul class="price__list">--}}
{{--                        <li class="price__li">Консультация дизайнера</li>--}}
{{--                        <li class="price__li">Выравнивание стен и потолка</li>--}}
{{--                        <li class="price__li">Шпатлевка стен и потолка</li>--}}
{{--                        <li class="price__li">Выравнивание пола</li>--}}
{{--                        <li class="price__li">Монтаж электропроводки</li>--}}
{{--                        <li class="price__li">Установка всей сантехники</li>--}}
{{--                        <li class="price__li">Укладка кафельной плитки</li>--}}
{{--                        <li class="price__li">Монтаж натяжного потолка</li>--}}
{{--                        <li class="price__li">Монтаж напольного покрытия</li>--}}
{{--                        <li class="price__li">Уборка в помещении и сдача объекта</li>--}}
{{--                    </ul>--}}


{{--                    <a href="#" class="price__btn price__btn--accent show_popup">Оставить заявку</a>--}}


{{--                    <div class="price__popular">--}}
{{--                        Популярный--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="price__item">--}}
{{--                    <p class="price__suptitle">Элитный</p>--}}
{{--                    <p class="price__price">от <span class="price__numb">5990</span> руб/кв.м</p>--}}
{{--                    <p class="price__subtitle">Сроки: 40-70 дней</p>--}}
{{--                    <hr class="price__line">--}}
{{--                    <ul class="price__list">--}}

{{--                        <li class="price__li">Разработка эксклюзивного дизайн-проекта--}}
{{--                            интерьера с 3D-визуализацией</li>--}}
{{--                        <li class="price__li">Демонтажные работы и вывоз мусора</li>--}}
{{--                        <li class="price__li">Возведение стен</li>--}}
{{--                        <li class="price__li">Грунтование поверхности</li>--}}
{{--                        <li class="price__li">Выравнивание и подготовка стен</li>--}}
{{--                        <li class="price__li">Монтаж фигурного потолка</li>--}}
{{--                        <li class="price__li">Выравнивание пола</li>--}}
{{--                        <li class="price__li">Полная замена электропроводки</li>--}}
{{--                        <li class="price__li">Укладка плитки</li>--}}
{{--                        <li class="price__li">Установка сантехники</li>--}}
{{--                        <li class="price__li">Покраска стен и потолка</li>--}}
{{--                        <li class="price__li">Укладка штучного паркета</li>--}}
{{--                        <li class="price__li">Уборка квартиры и сдача объекта</li>--}}

{{--                    </ul>--}}


{{--                    <a href="#" class="price__btn show_popup">Оставить заявку</a>--}}


{{--                </div>--}}


{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="advantages">--}}
{{--    <div class="container">--}}
{{--        <div class="advantages__inner">--}}
{{--            <h2 class="title-2">Преимущества ремонта квартиры под ключ</h2>--}}

{{--            <div class="advantages__wrap">--}}
{{--                <div class="advantages__item">--}}
{{--                    <i class="far fa-clock"></i>--}}
{{--                    <p class="advantages__text">Экономия времени на поиски исполнителей</p>--}}
{{--                </div>--}}
{{--                <div class="advantages__item">--}}
{{--                    <i class="fas fa-list"></i>--}}
{{--                    <p class="advantages__text">Вы можете сами разделить работы на этапы</p>--}}
{{--                </div>--}}
{{--                <div class="advantages__item">--}}
{{--                    <i class="far fa-thumbs-up"></i>--}}
{{--                    <p class="advantages__text">Гарантированная скидка на комплекс работ</p>--}}
{{--                </div>--}}
{{--                <div class="advantages__item">--}}
{{--                    <i class="fas fa-money-bill-wave"></i>--}}
{{--                    <p class="advantages__text">Экономия значительной суммы денег</p>--}}
{{--                </div>--}}

{{--            </div>--}}


{{--            <a href="#" class="advantages__btn btn btn__accent show_popup">Оставить заявку!</a>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <img src="{{ URL::asset('images/advantages.jpg') }}" alt="ремонт квартир под ключ" class="advantages__img">--}}

{{--</div>--}}




{{--@component('components.how')--}}

{{--    @slot('title')--}}

{{--        <h2 class="title-2">Как мы работаем</h2>--}}


{{--    @endslot--}}
{{--@endcomponent--}}


{{--<div class="optimize">--}}
{{--    <div class="container">--}}
{{--        <div class="optimize__inner">--}}
{{--            <h2 class="title-2">Отделка квартир под ключ в Томске</h2>--}}

{{--            <p class="optimize__text">--}}
{{--                Мы оказываем услуги ремонта и отделки квартир под ключ в Томске. Беремся за ремонт любой сложности от простого косметического, до ремонта по дизайн проекту--}}
{{--                и при сопровождении всего проекта дизайнером.--}}
{{--            </p>--}}
{{--            <p class="optimize__text">--}}
{{--                Экономьте свои средства на ремонте или отделке квартиры под ключ - не нанимайте подрядчиком небольшие компании, которые отвечают всем Вашим требованиям. В компаниях с--}}
{{--                большим штатом сложно наладить согласование всех этапов работ, а так же добиться правды, в случае если что-то пойдет не так.--}}
{{--            </p>--}}
{{--            <p class="optimize__text">--}}
{{--                Мы даем гарантию на все выполненные нами отделочные работы в течение <b>1 года</b>. В гарантийные условия входит:--}}
{{--            </p>--}}

{{--            <ul class="optimize__list">--}}
{{--                <li class="optimize__item">отделочные работы;</li>--}}
{{--                <li class="optimize__item">электромонтажные работы;</li>--}}
{{--                <li class="optimize__item">сантехнические работы;</li>--}}
{{--                <li class="optimize__item">прочие скрытые работы.</li>--}}


{{--            </ul>--}}
{{--            <p class="optimize__text">--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eligendi eveniet id laudantium nostrum rem vel? Architecto dolore error--}}
{{--                expedita laborum numquam officiis perspiciatis praesentium reiciendis reprehenderit, similique, tempora veritatis?--}}
{{--            </p>--}}
{{--            <p class="optimize__text">--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eligendi eveniet id laudantium nostrum rem vel? Architecto dolore error--}}
{{--                expedita laborum numquam officiis perspiciatis praesentium reiciendis reprehenderit, similique, tempora veritatis?--}}
{{--            </p>--}}


{{--            <h3 class="optimize__title">ВЫЗОВИТЕ МАСТЕРА ДЛЯ РАСЧЕТА СТОИМОСТИ РЕМОНТА — ЭТО БЕСПЛАТНО!</h3>--}}
{{--            <p class="optimize__text">--}}
{{--                Мы не навязываем Вас своего мнения, делаем голые расчеты, а дальше решение только за Вами. Наши специалисты всегда готовы проконсультировать Вас по всем тонкостям ремонтных и отделочных работ в Вашей квартире.--}}
{{--            </p>--}}
{{--            <p class="optimize__text">--}}
{{--                Так же Вы можете доверить закупку материалов нашим специалистам, ведь у нас есть скидки практически во всех строительных магазинах Томска, что часто позволяет сэкономить приличную сумму на ремонте!--}}
{{--            </p>--}}

{{--            <div class="optimize__wrap">--}}

{{--                <img class="optimize__img" src="{{ URL::asset('images/1.jpg') }}" alt="Отделка квартир под ключ в Томске">--}}
{{--                <img class="optimize__img" src="{{ URL::asset('images/1.jpg') }}" alt="Отделка квартир под ключ в Томске">--}}

{{--            </div>--}}
{{--            <div class="optimize__btn">--}}
{{--                <button class="btn btn__accent show_popup">Оставить заявку</button>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

    <div class="error">
        <div class="container">
            <div class="error__inner">
                <h1 class="error__title">Страница находится в разработке, зайдите позже!</h1>


            </div>
        </div>
    </div>





@endsection

