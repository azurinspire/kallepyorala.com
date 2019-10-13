@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Gallery</h1>
    @php
        $gallery = [[
            'https://live.staticflickr.com/65535/48305235041_cf2939dcf3_h.jpg',
            'https://live.staticflickr.com/65535/48305235041_a77f422258_n.jpg'
        ],[
            'https://live.staticflickr.com/65535/48300533782_35e5d44c63_h.jpg',
            'https://live.staticflickr.com/65535/48300533782_96d285b1f1_n.jpg'
        ],[
            'https://live.staticflickr.com/65535/48234591986_5b563d6d27_h.jpg',
            'https://live.staticflickr.com/65535/48234591986_d71e6b05da_n.jpg'
        ],[
            'https://live.staticflickr.com/65535/48234994817_0422351fd2_h.jpg',
            'https://live.staticflickr.com/65535/48234994817_eaa8ef5143_n.jpg'
        ],[
            'https://live.staticflickr.com/65535/48213620042_cdaf99b087_h.jpg',
            'https://live.staticflickr.com/65535/48213620042_45912803e9_n.jpg'
        ],[
            'https://live.staticflickr.com/4823/39889656663_45e23e8898_h.jpg',
            'https://live.staticflickr.com/4823/39889656663_6fc1f9e0e3_n.jpg'
        ]];
    @endphp

    <div class="grid -mx-2 flex flex-wrap">
        @foreach ($gallery as $image)
            <div>
                <a data-fancybox="gallery" href="{{ $image[0] }}">
                    <img src="{{ $image[1] }}" class="w-64 h-64 object-cover m-2">
                </a>
            </div>
        @endforeach
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush