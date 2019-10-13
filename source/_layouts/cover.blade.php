<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link rel="stylesheet" href="https://unpkg.com/tippy.js@5/dist/backdrop.css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="font-sans bg-green-100 leading-normal tracking-normal">
        <div id="cover-image" class="w-full m-0 p-0 bg-auto bg-center" style="background-image:url('/assets/img/cover.jpg'); background-repeat: no-repeat; background-size: cover; height: 60vh; max-height:460px;">
            <div class="container max-w-4xl mx-auto pt-16 flex flex-col items-center break-normal">
                <!--Title-->
                <img src="/assets/img/kalle.pyorala.svg" alt="{{ $page->siteName }} - {{ $page->siteDescription }}" class="w-3/4 lg:w-1/2" />
            </div>
        </div>

        <!-- container -->
        <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
            <div class="mx-0 sm:mx-6">
                <!--Nav-->
                @include('_nav.menu')
                <!-- main -->
                <main role="main" class="bg-green-100 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                    @yield('body')
                </main>
            </div>
        </div>

        @include('_layouts.footer')
        @stack('scripts')
    </body>
</html>
