@props([
    'breadcrumbs' => [],
])

<header
    {{ $attributes->class([
        'filament-main-topbar sticky top-0 z-10 flex h-16 w-full shrink-0 items-center border-b bg-white',
        'dark:bg-gray-800 dark:border-gray-700' => config('filament.dark_mode'),
    ]) }}>
    <div class="flex items-center w-full px-2 sm:px-4 md:px-6 lg:px-8">
        <button x-cloak x-data="{}"
            x-bind:aria-label="$store.sidebar.isOpen ? '{{ __('filament::layout.buttons.sidebar.collapse.label') }}' :
                '{{ __('filament::layout.buttons.sidebar.expand.label') }}'"
            x-on:click="$store.sidebar.isOpen ? $store.sidebar.close() : $store.sidebar.open()"
            @class([
                'filament-sidebar-open-button shrink-0 flex items-center justify-center w-10 h-10 text-primary-500 rounded-full outline-none hover:bg-gray-500/5 focus:bg-primary-500/10',
                'lg:mr-4 rtl:lg:mr-0 rtl:lg:ml-4' => config(
                    'filament.layout.sidebar.is_collapsible_on_desktop'),
                'lg:hidden' => !(
                    config('filament.layout.sidebar.is_collapsible_on_desktop') &&
                    config('filament.layout.sidebar.collapsed_width') === 0
                ),
            ])>
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <div class="flex items-center justify-between flex-1">
            <x-filament::layouts.app.topbar.breadcrumbs :breadcrumbs="$breadcrumbs" />
            <a href="/" target="__blank" class="bg-slate-500 p-1 rounded text-white font-bold ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                </svg>
                Lihat Blog</a>
            @livewire('filament.core.global-search')

            @livewire('filament.core.notifications')

            <x-filament::layouts.app.topbar.user-menu />
        </div>
    </div>
</header>
