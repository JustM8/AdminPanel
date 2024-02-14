@extends('layouts.theme')

@section('content')
    {{--    @dd($news);--}}
    <section class="news-page page-container">
        <div class="news-page-wrap">
            <div class="page-intro">
                <div class="page-breadcrumbs">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs-item"><a class="breadcrumbs-item__link breadcrumbs-item__link-home" href="index.html">Homepage</a></li>
                        <li class="breadcrumbs-item"><a class="breadcrumbs-item__link" href="#">allNews</a></li>
                        <li class="breadcrumbs-item__current--color breadcrumbs-item">News</li>
                    </ul>
                </div>
                <h2 class="page-title text-title">Новини</h2>
            </div>
            <div class="news-page-list">
{{--
                @foreach($news as $new)
                    <div class="news-page-item">
                        <div class="news-page-item-intro-wrap">
                            <div class="news-page-item-intro">
                                <h2 class="news-page-item__title text-24">{{$new->title[App::currentLocale()]}}</h2>
                                <p class="news-page-item__text text-14">{!! $new->description['description_top'][App::currentLocale()]!!}</p>

                                <a class="news-page-item__btn btn" href="{{ route('news.show', $new->slug) }}">Читати новину</a>
                            </div>
                            <div class="news-page-item-date">
                                <span class="news-page-item-date__day text-14">15</span>
                                <span class="news-page-item-date__month text-14">Січня</span>
                                <span class="news-page-item-date__year text-14">2023</span>
                            </div>
                        </div>
                        <div class="news-page-item__img-wrap"> <img class="news-page-item__img" src="{{ $new->thumbnailUrl  }}" alt=""></div>
                    </div>
                @endforeach
--}}
            </div>
        </div>
    </section>
@endsection
@push('footer-scripts')
    @vite([ 'resources/js/common.js', 'resources/js/news.js'])
@endpush
