@extends('layouts.custom')

@section('title', 'Контакты компании Прораб70')
@section('description', 'Как с нами связаться. Тел: 89528052426')
@section('keywords', '')
@section('canonical', 'https://prorab70.ru/kontakty')
@section('og:title', 'Контакты компании Прораб70')
@section('og:description', 'Как с нами связаться. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/kontakty')
@section('twitter:title', 'Контакты компании Прораб70')
@section('twitter:description', 'Как с нами связаться. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') Контакты @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Контакты @endslot
        @slot('activelink') {{ url('/kontakty') }} @endslot
        @slot('img') {{ URL::asset('images/bg-breadcrumbs.jpg') }} @endslot
    @endcomponent




   <div class="kontakty">
       <div class="container">
           <div class="kontakty__inner">
               <h1 class="kontakty__title">Наши контакты</h1>
               <a href="tel:89528052426" class="kontakty__link">8 (952) 805 24-26</a>
               <a href="mailto:prorab70ru@yandex.ru" class="kontakty__link">prorab70ru@yandex.ru</a>
               <p class="kontakty__adress">г.Томск, пл. Батенькова 2</p>

           </div>
       </div>
   </div>





@endsection

