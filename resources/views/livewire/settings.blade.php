<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

        {{-- titre et Button  creation  --}}

        <div class="flex justify-between items-center mt-2">
            <h4>Liste des annees scolaires</h4>
            <a href="{{ route('settings.create_school_year')}}" class="bg-blue-500 rounded-md p-2 text-sm text-white">
                Nouvelle Annee Scolaire
            </a>
        </div>


        <div class="flex flex-col">
            {{-- message aui apparitra apre une operation --}}
            <div class="block p-1 bg-green-500 text-white rounded-sm mt-2 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, aperiam!
            </div>
        </div>

        {{-- Stylies le tableau --}}

        <div class="overflow-x-auto">
            <div class="py-4 inline-block min-w-full">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b-2 bg-gray-50">
                            <tr>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Thead</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Thead</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Thead</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Thead</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="border-b-2 border-gray-100">
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">tbody</td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">tbody</td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">tbody</td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">tbody</td>
                            </tr>
                            <tr class="border-b-2 border-gray-100">
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">tbody</td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">tbody</td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">tbody</td>
                                <td class="text-sm font-medium text-gray-900 px-6 py-6">tbody</td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- Pagination --}}

                </div>
            </div>
        </div>

    </div>
</div>