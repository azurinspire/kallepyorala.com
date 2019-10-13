@extends('_layouts.cover')

@section('body')
    @php
        $lastPost = $posts->last();
    @endphp
    <!--Lead Card-->
    <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">

            <div class="w-full md:w-2/3 rounded-t">
                @if ($lastPost->cover_image)
                    <a href="{{ $lastPost->getUrl() }}">
                        <img src="{{ $lastPost->cover_image }}" alt="{{ $lastPost->title }} cover image" class="h-full w-full shadow">
                    </a>
                @endif
            </div>

            <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">

                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="{{ $lastPost->getUrl() }}">
                        <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">{{ $lastPost->getDate()->format('F j, Y') }}</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $lastPost->title }}</div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            {!! $lastPost->getExcerpt() !!}
                        </p>
                    </a>
                </div>


                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            @if ($lastPost->categories)
                                @foreach ($lastPost->categories as $i => $category)
                                    @if ($loop->iteration <= 2)
                                        <a
                                            href="{{ '/blog/categories/' . $category }}"
                                            title="View posts in {{ $category }}"
                                            class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                                        >{{ $category }}</a>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <a href="{{ $lastPost->getUrl() }}" class="text-sm pt-2">READ</a>
                    </div>
                </div>
            </div>

    </div>
    <!--/Lead Card-->

    <!--Posts Container-->
    <div class="flex flex-wrap justify-between pt-12 -mx-6">
        @foreach ($posts->where('featured', true) as $featuredPost)
            <div class="w-full {{$loop->iteration > 2 ? 'md:w-1/3' : 'md:w-1/2' }} p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="{{ $featuredPost->getUrl() }}" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="h-64 relative rounded-t w-full">
                            @if ($featuredPost->cover_image)
                                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="absolute h-full w-full object-cover">
                            @else
                                <img src="https://images.unsplash.com/photo-1556909128-2293de4be38e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3450&q=80" class="absolute h-full w-full object-cover">
                            @endif
                        </div>

                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $featuredPost->getDate()->format('F j, Y') }}</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $featuredPost->title }}</div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            {{ strip_tags($featuredPost->getExcerpt()) }}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            @if ($featuredPost->categories)
                                @foreach ($featuredPost->categories as $i => $category)
                                    @if ($loop->iteration <= ($loop->parent->iteration > 2 ? 2 : 4))
                                        <a
                                            href="{{ '/blog/categories/' . $category }}"
                                            title="View posts in {{ $category }}"
                                            class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                                        >{{ $category }}</a>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <a href="{{ $featuredPost->getUrl() }}" class="text-sm pt-2">READ</a>
                    </div>
                </div>
            </div>
        @endforeach


        @include('_components.newsletter-signup', ['cover' => true])

        @foreach ($posts->where('featured', false)->take(4)->chunk(2) as $row)

            @foreach ($row as $post)
                <div class="w-full {{($loop->parent->even && $loop->even) || ($loop->parent->odd && $loop->odd)  ? 'md:w-1/3' : 'md:w-2/3' }} p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <a href="{{ $post->getUrl() }}" class="flex flex-wrap no-underline hover:no-underline">
                            <div class="h-64 relative rounded-t w-full">
                                @if ($post->cover_image)
                                    <img src="{{ $post->cover_image }}" alt="{{ $post->title }} cover image" class="absolute h-full w-full object-cover">
                                @else
                                    <img src="https://images.unsplash.com/photo-1556909128-2293de4be38e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3450&q=80" class="absolute h-full w-full object-cover">
                                @endif
                            </div>

                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post->getDate()->format('F j, Y') }}</p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post->title }}</div>
                            <p class="text-gray-800 text-base px-6 mb-5">
                                {{ strip_tags($post->getExcerpt()) }}
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                @if ($post->categories)
                                    @foreach ($post->categories as $i => $category)
                                        @if ($loop->iteration <= (($loop->parent->parent->even && $loop->parent->even) || ($loop->parent->parent->odd && $loop->parent->odd) ? 1 : 5))
                                            <a
                                                href="{{ '/blog/categories/' . $category }}"
                                                title="View posts in {{ $category }}"
                                                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                                            >{{ $category }}</a>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <a href="{{ $post->getUrl() }}" class="text-sm pt-2">READ</a>
                        </div>
                    </div>
                </div>

            @endforeach

        @endforeach
    </div>
@stop
