<footer class="bg-gray-900">
    <div class="container max-w-6xl mx-auto px-6 py-8">
        <div class="flex justify-between">
            <div class="flex items-center">
                <a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
                    <span class="text-base text-gray-200 font-light">&copy; Kalle Pyörälä {{ date('Y') }}</span>
                </a>
            </div>
            @include('_nav.external')
            <div>
                <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                    @include('_nav.items')
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/9d828308f6.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5"></script>
<script src="{{ mix('js/main.js', 'assets/build') }}"></script>

<script>
    tippy('.tippy');
</script>