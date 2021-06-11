@extends('layouts.app')
@section('title', 'Журнал успеваемости')
@section('content')
    @if(count($banners) > 0)

        <div class="slider_section">
            <div class="wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($banners as $banner)
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="slider_image_wrapper">
                                        @if(!is_null($banner->attachment))
                                            <img src="{{ $banner->attachment->url }}" alt="{{ $banner->title }}">
                                        @endif
                                    </div>
                                    <div class="slider_text_wrapper">
                                        <div class="slider_text_top">
                                            <div class="slider_title">{{ $banner->title }}</div>
                                            <div class="slider_desc">{{ $banner->description }}</div>
                                        </div>
                                        @if($banner->link)
                                            <a href="{{ $banner->link }}" class="slider_link">
                                                {{ $banner->link_title }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>
            </div>
        </div>
    @endif


    <div class="about_section">
        <div class="wrapper">
            <div class="about">
                <div class="about_title">Что это за проект?</div>
                <div class="about_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Fugiat labore quae dicta aut ipsam commodi dolore qui eius quis voluptatum minus,
                    deleniti cum iusto temporibus quos totam omnis beatae quaerat quisquam consectetur.
                    Voluptatibus officiis accusantium earum porro dolor placeat aperiam error, rem
                    recusandae aspernatur assumenda pariatur fugiat, quo dolorem modi. Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Pariatur nisi dicta exercitationem, nihil vitae
                    temporibus esse! Dolore expedita reprehenderit amet aperiam sequi dolores eos porro
                    maxime cupiditate odio, a ab est magnam. Numquam veniam tempora corporis libero nulla
                    dolor error deserunt minus ipsum temporibus hic, quam provident blanditiis ea nam.
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection