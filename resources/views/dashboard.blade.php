<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 pt-6 text-gray-900 dark:text-gray-100">
                    Vitaj, {{ auth()->user()->name }}!
                </div>
                <div class="px-6 py-6 dark:text-white">
                    Dneska ({{ \Carbon\Carbon::now()->format('l d.m.Y') }}) {{ $dailyMenu ? 'máme na objed:' : 'si neco mosíš najít v ledničke.' }}
                    @if($dailyMenu)
                        @if($dailyMenu->soup)
                            <p class="font-semibold text-xl">
                                {{ $dailyMenu->soup->name }}
                            </p>
                        @endif
                        <p class="font-semibold text-xl">
                            {{ $dailyMenu->mainCourse?->name }}
                        </p>
                        <p class="font-semibold text-xl">
                            {{ $dailyMenu->sideDish?->name }}
                        </p>
                        <p class="font-semibold text-xl">
                            {{ $dailyMenu->salad?->name }}
                        </p>
                        @if($dailyMenu->cook)
                            <p class="font-semibold">
                                Kuchtík dnešného objeda je {{ $dailyMenu->cook->name }}
                            </p>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
