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

    <body class="bg-green-100 font-sans leading-normal tracking-normal">
        <div class="min-h-screen flex flex-col pt-12 lg:pt-16">
            <div class="bg-gray-900 mt-0 w-full fixed -mt-12 lg:-mt-16">
                <div class="max-w-6xl px-6 mx-auto flex items-center">
                    @include('_nav.menu', ['logo' => true])
                </div>
            </div>

            @yield('cover_image')

            <main role="main" class="flex-1 max-w-6xl mx-auto px-6 my-6 bg-green-100 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                @yield('body')
            </main>

            @include('_layouts.footer')
            @stack('scripts')
        </div>
    </body>
</html>
