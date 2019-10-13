<nav class="mt-0 w-full">
    <div id="vue-search" class="container mx-auto flex items-center justify-between">
        @if (isset($logo))
            <div class="my-2 lg:my-0">
                <a href="/">
                    <img src="/assets/img/kalle.pyorala.svg" alt="{{ $page->siteName }} - {{ $page->siteDescription }}" class="w-48" />
                </a>
            </div>
        @endif
        <!-- site menu -->
        <div class="flex pl-4 text-sm">
            <ul class="justify-between items-center hidden lg:flex">
                @include('_nav.items')
            </ul>
            @include('_nav.menu-toggle')
        </div>

        <!--<search></search>-->

        <!-- external links -->
        @include('_nav.external')
    </div>
    <div>
        @include('_nav.menu-responsive')
    </div>
</nav>
