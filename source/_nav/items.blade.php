<li class="mr-2">
    <a
        title="{{ $page->siteName }}"
        href="/"
        class="uppercase inline-block py-2 px-2 no-underline hover:underline {{ $page->isActive('') ? 'active text-green-500' : 'text-green-200' }}"
    >
        Home
    </a>
</li>
<li class="mr-2">
    <a
        title="{{ $page->siteName }} Blog"
        href="/blog"
        class="uppercase inline-block py-2 px-2 no-underline hover:underline {{ $page->isActive('/blog') ? 'active text-green-500' : 'text-green-200' }}"
    >
        Blog
    </a>
</li>
<li class="mr-2">
    <a
        title="{{ $page->siteName }} Gallery"
        href="/gallery"
        class="uppercase inline-block py-2 px-2 no-underline hover:underline {{ $page->isActive('/gallery') ? 'active text-green-500' : 'text-green-200' }}"
    >
        Gallery
    </a>
</li>
<li class="mr-2">
    <a
        title="{{ $page->siteName }} About"
        href="/about"
        class="uppercase inline-block py-2 px-2 text-gray-600 no-underline hover:underline {{ $page->isActive('/about') ? 'active text-green-500' : 'text-green-200' }}"
    >
        About
    </a>
</li>
<li class="mr-2">
    <a
        title="{{ $page->siteName }} Contact"
        href="/contact"
        class="uppercase inline-block py-2 px-2 text-gray-600 no-underline hover:underline {{ $page->isActive('/contact') ? 'active text-green-500' : 'text-green-200' }}"
    >
        Contact
    </a>
</li>