@extends('layouts.custom')

@section('title', 'О компании | Прораб70')
@section('description', 'Информация о компании Прораб70. Тел: 89528052426')
@section('keywords', '')
@section('canonical', 'https://prorab70.ru/about-us')
@section('og:title', 'О компании | Прораб70')
@section('og:description', 'Информация о компании Прораб70. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/about-us')
@section('twitter:title', 'О компании | Прораб70')
@section('twitter:description', 'Информация о компании Прораб70. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') О компании @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') О компании @endslot
        @slot('activelink') {{ url('/about-us') }} @endslot

        @slot('img') {{ URL::asset('images/bg-breadcrumbs.jpg') }} @endslot
    @endcomponent




    <div class="error">
        <div class="container">
            <div class="error__inner">
                <h1 class="error__title">Страница находится в разработке, зайдите позже!</h1>


            </div>
        </div>
    </div>





@endsection

