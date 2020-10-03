<div class="toggle-menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>
<div class="header__closer"></div>



<header class="header {{ $header }}">

    <div class="header__top {{ $headertop ?? '' }}">
        <div class="container">
            <div class="header__contacts">
                <div class="header__contacts-icon">
                    <div class="header__contacts-wrap">
                        <i class="fas fa-phone"></i>
                        <a href="tel:89528052426" class="header__contacts-link">8 (952) 805 24-26</a>
                    </div>
                    <div class="header__contacts-wrap">
                        <i class="far fa-envelope"></i>
                        <a href="mailto:prorab70ru@yandex.ru" class="header__contacts-link">prorab70ru@yandex.ru</a>
                    </div>
                </div>
                <a href="#" class="header__btn show_popup">Заказать звонок</a>
            </div>
        </div>
    </div>

    <div class="container">



        <div class="header__inner">
            <?php $home = '/' ?>

            @if($home == $_SERVER['REQUEST_URI'])

                <img src="{{ asset('images/logo.png') }}" alt="logo" class="header__logo">



            @else
                <a href="{{ URL('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="header__logo">

                </a>
            @endif







            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item"><a href="{{ url('/') }}" class="header__link">Главная</a></li>

                    <li class="header__item header__item--dropdown" itemprop="itemListElement"><a href="#" class="header__link header__link-drop">Услуги</a><i class="header__icon fas fa-sort-down"></i></li>
                        <ul class="header__dropdown">
                            <li class="header__dropdown-item"><a href="{{ url('/remont-kvartir') }}" class="header__dropdown-link">Ремонт квартир</a></li>
                            <li class="header__dropdown-item"><a href="{{ url('/remont-ofisov') }}" class="header__dropdown-link">Ремонт офисов</a></li>
                            <li class="header__dropdown-item"><a href="{{url('otdelka-polov')}}" class="header__dropdown-link">Ремонт полов</a></li>
                            <li class="header__dropdown-item"><a href="{{ url('/otdelka-potolka') }}" class="header__dropdown-link">Отделка потолка</a></li>
                            <li class="header__dropdown-item"><a href="{{ url('/otdelka-sten') }}" class="header__dropdown-link">Отделка стен</a></li>
                            <li class="header__dropdown-item"><a href="{{ url('/otdelka-balkonov') }}" class="header__dropdown-link">Отделка балконов</a></li>
                            <li class="header__dropdown-item"><a href="{{ url('/otdelka-sanuzlov') }}" class="header__dropdown-link">Отделка санузлов</a></li>
                        </ul>
                    <li class="header__item"><a href="{{ url('/portfolio') }}" class="header__link">Портфолио</a></li>
                    <li class="header__item"><a href="{{ url('/about-us') }}" class="header__link">О нас</a></li>
                    <li class="header__item"><a href="{{ url('/blog') }}" class="header__link">Блог</a></li>
                    <li class="header__item"><a href="{{ url('/kontakty') }}" class="header__link">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

