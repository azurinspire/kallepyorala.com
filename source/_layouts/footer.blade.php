<footer class="bg-gray-900">
    <div class="container max-w-6xl mx-auto px-6 py-8">
        <div class="flex flex-col lg:flex-row justify-between">
            <div class="flex justify-center lg:items-center">
                <span class="text-base text-gray-200 font-light">&copy; Kalle Pyörälä {{ date('Y') }}</span>
            </div>
            <div class="lg:mt-2">
                @include('_nav.external')
            </div>
            <div>
                <ul class="list-reset justify-center flex-1 lg:flex items-center">
                    @include('_nav.items')
                </ul>
            </div>
            @include('_nav.external', ['alwaysVisible' => true])
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