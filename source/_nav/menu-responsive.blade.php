<nav id="js-nav-menu" class="nav-menu hidden lg:hidden bg-gray-900 -mx-4 rounded-b">
    <ul class="my-0">
        <li class="p-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="uppercase hover:underline {{ $page->isActive('') ? 'active text-green-500' : 'text-green-200' }}"
            >
                Blog
            </a>
        </li>
        <li class="p-4">
            <a
                    title="{{ $page->siteName }} Gallery"
                    href="/gallery"
                    class="uppercase hover:underline {{ $page->isActive('/gallery') ? 'active text-green-500' : 'text-green-200' }}"
            >
                Gallery
            </a>
        </li>
        <li class="p-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="uppercase hover:text-green-500 {{ $page->isActive('') ? 'active text-green-500' : 'text-green-200' }}"
            >About</a>
        </li>
        <li class="p-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="uppercase hover:text-green-500 {{ $page->isActive('') ? 'active text-green-500' : 'text-green-200' }}"
            >Contact</a>
        </li>

        <li class="text-center">
            <a class="inline-block text-green-200 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 tippy" data-tippy-content="Twitter: @kallepyorala" href="https://twitter.com/kallepyorala">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="inline-block text-green-200 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 tippy" data-tippy-content="Instagram: @kallepyorala" href="https://www.instagram.com/kallepyorala">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="inline-block text-green-200 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 tippy" data-tippy-content="500px: AzurInspire" href="https://500px.com/AzurInspire">
                <i class="fab fa-500px"></i>
            </a>
            <a class="inline-block text-green-200 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 tippy" data-tippy-content="Flickr: kallepyorala" href="https://flickr.com/photos/kallepyorala/">
                <i class="fab fa-flickr"></i>
            </a>
        </li>
    </ul>
</nav>
