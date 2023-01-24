<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

        {{-- titre et Button  creation  --}}

        <div class="flex justify-between items-center mt-2">

            <div class="">
                <input placeholder="Rechercher par Annee" wire:model="search" type="text" class="block mt-1 rounded-lg border-gray-500 w-full">
            </div>
            <a href="{{ route('settings.create_school_year')}}" class="bg-blue-500 rounded-md p-2 text-sm text-white">
                Nouvelle Annee Scolaire
            </a>
        </div>


        <div class="flex flex-col">
            @if(Session::get('success'))
            <div class="block p-1 bg-green-500 text-white rounded-sm mt-2 text-center">
                <span>{{ Session::get('success')}}</span>
            </div>
            @endif
        </div>

        {{-- Stylies le tableau --}}

        <div class="overflow-x-auto">
            <div class="py-4 inline-block min-w-full">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b-1 bg-gray-100">
                            <tr>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">#</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">School Year</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Active</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($YearSchoolList as $item)
                            <tr class="border-b-2 border-gray-100">
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->id }}</td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->school_year }}</td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">
                                    @if($item->active)
                                    <span class="p-1 text-sm bg-green-400 text-white rounded-lg">Active</span>
                                    @else
                                    <span class="p-1 text-sm bg-red-400 text-white rounded-lg">In Active</span>
                                    @endif
                                </td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">
                                    @if($item->active)
                                    <button class="p-1 text-sm bg-blue-500 text-white rounded-lg text-center">Rendre Active</button>
                                    @else
                                    <button class="p-1 text-sm bg-blue-300 text-white rounded-lg text-center">Rendre InActive</button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr> 
                                <td class="text-sm text-center font-medium text-gray-900 px-3">No Data</td> 
                            </tr>
                            @endforelse

                        </tbody>
                    </table>

                    <div class="p-3">
                        {{ $YearSchoolList->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>