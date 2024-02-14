@extends('layouts.theme')
@section('content')
    <section class="single-news page-container">
        <div class="single-news-wrap">
            <div class="page-intro">
                <div class="page-breadcrumbs">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs-item"><a class="breadcrumbs-item__link breadcrumbs-item__link-home" href="{{url('/')}}">Homepage</a></li>
                        <li class="breadcrumbs-item"><a class="breadcrumbs-item__link" href="{{url('/news')}}">News</a></li>
                        <li class="breadcrumbs-item__current--color breadcrumbs-item">singleNews</li>
                    </ul>
                </div>
{{--                <h2 class="page-title text-title">{{$news->title[App::currentLocale()]}}</h2>--}}
            </div>
            <div class="single-news-item-wrap">
                <div class="single-news-item">
{{--                    <h3 class="single-news-item__title text-24">{{$news->description['subtitle_1'][App::currentLocale()]}}</h3>--}}
                    {{--                    <p class="single-news-item__descr text-14"></p>--}}
{{--                    {!! $news->description['description_top'][App::currentLocale()] !!}--}}
{{--                    <div class="single-news-item__img-wrap"><img class="single-news-item__img" src="{{ $news->thumbnailUrl  }}" alt=""></div>--}}
{{--                    <h3 class="single-news-item__title text-24">{{$news->description['subtitle_2'][App::currentLocale()]}}</h3>--}}
{{--                    {!!$news->description['description_bottom'][App::currentLocale()]!!}--}}
                </div>
                <div class="single-news-item__date">
{{--                    <span class="single-news-item__date-day text-14">{{$news->year}}</span>--}}
{{--                    <span class="single-news-item__date-month text-14">{{$news->month}}</span>--}}
{{--                    <span class="single-news-item__date-year text-14">{{$news->day}}</span>--}}
                </div>
            </div>
            <h4 class="single-news__subtitle text-m">Останні новини</h4>
            <div class="news-page-list">
{{--
                @foreach($otherNews as $item)
                    <div class="news-page-item">
                        <div class="news-page-item-intro-wrap">
                            <div class="news-page-item-intro">
                                <h2 class="news-page-item__title text-24">{{$item->title[App::currentLocale()]}}</h2>
                                {!! $item->description['description_top'][App::currentLocale()] !!}
                                <a class="news-page-item__btn btn" href="{{ route('news.show', $item->slug) }}">Читати новину</a>
                            </div>
                            <div class="news-page-item-date">
                                <span class="news-page-item-date__day text-14">{{$news->day}}</span>
                                <span class="news-page-item-date__month text-14">{{$news->month}}</span>
                                <span class="news-page-item-date__year text-14">{{$news->year}}</span>
                            </div>
                        </div>
                        <div class="news-page-item__img-wrap"> <img class="news-page-item__img" src="{{ $news->thumbnailUrl  }}" alt=""></div>
                    </div>
                @endforeach
--}}
            </div>
        </div>
    </section>
@endsection
@push('footer-scripts')
    @vite([ 'resources/js/common.js'])
@endpush
