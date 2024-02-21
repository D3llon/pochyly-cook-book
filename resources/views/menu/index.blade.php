<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-6 text-gray-900 dark:text-white">
                    <table class="table-auto w-full text-center border-collapse border border-slate-500">
                        <thead>
                            <tr class="font-semibold text-xl">
                                <th class="border border-slate-600">Dátum</th>
                                <th class="border border-slate-600">Kuchár</th>
                                <th class="border border-slate-600">Polévka</th>
                                <th class="border border-slate-600">Hlavné jedno</th>
                                <th class="border border-slate-600">Príloha</th>
                                <th class="border border-slate-600">Salát</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($menus->count() > 0)
                                @foreach($menus as $menu)
                                    <tr>
                                        <td class="border border-slate-600">{{ \Carbon\Carbon::parse($menu->date)->format('l d.m.Y') }}</td>
                                        <td class="border border-slate-600">{{ $menu->cook?->name ?? '-' }}</td>
                                        <td class="border border-slate-600">{{ $menu->soup?->name ?? '-' }}</td>
                                        <td class="border border-slate-600">{{ $menu->mainCourse?->name ?? '-' }}</td>
                                        <td class="border border-slate-600">{{ $menu->sideDish?->name ?? '-' }}</td>
                                        <td class="border border-slate-600">{{ $menu->salad?->name ?? '-' }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-xl font-semibold">Zívam prázdnotú</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
