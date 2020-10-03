@extends('layouts.custom')

@section('title', 'Портфолио компании Прораб70')
@section('description', 'Наши работы. Тел: 89528052426')
@section('keywords', '')
@section('canonical', 'https://prorab70.ru/portfolio')
@section('og:title', 'Портфолио компании Прораб70')
@section('og:description', 'Наши работы. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/portfolio')
@section('twitter:title', 'Портфолио компании Прораб70')
@section('twitter:description', 'Наши работы. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') Наши работы @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Наши работы @endslot
        @slot('activelink') {{ url('/portfolio') }} @endslot
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

