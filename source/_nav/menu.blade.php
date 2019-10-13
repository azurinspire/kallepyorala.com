<nav class="mt-0 w-full">
    <div id="vue-search" class="container mx-auto flex items-center justify-between">
        @if (isset($logo))
            <div>
                <a href="/">
                    <img src="/assets/img/kalle.pyorala.svg" alt="{{ $page->siteName }} - {{ $page->siteDescription }}" class="w-48" />
                </a>
            </div>
        @endif
        <!-- site menu -->
        <div class="flex pl-4 text-sm">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                @include('_nav.items')
            </ul>
        </div>

        <!--<search></search>-->

        <!-- external links -->
        @include('_nav.external')
    </div>
</nav>
