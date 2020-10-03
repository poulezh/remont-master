@extends('layouts.custom')

@section('title', 'Блог компании Прораб70')
@section('description', 'Интересные статьи по отделочным работам. Тел: 89528052426')
@section('keywords', '')
@section('canonical', 'https://prorab70.ru/blog')
@section('og:title', 'Блог компании Прораб70')
@section('og:description', 'Интересные статьи по отделочным работам. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/blog')
@section('twitter:title', 'Блог компании Прораб70')
@section('twitter:description', 'Интересные статьи по отделочным работам. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') Блог @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Наш блог @endslot
        @slot('activelink') {{ url('/blog') }} @endslot
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

