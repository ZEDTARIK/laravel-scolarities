<div class="p-2 bg-white shadow-sm">
    <form method="POST" wire:submit.prevent="store">
        @csrf
        @method('post')

        <div class="p-5">
            <x-jet-label value="{{__('Libelle Annee Scolaire :')}}" class="p-1" />
            <input wire:model="libelle" type="text" class="block mt-3 rounded-lg border-gray-500 w-full">
        </div>

        <div class="p-5 flex justify-between items-center">
            <button class="bg-red-400 p-3 rounded-lg text-white text-sm">Annuler</button>
            <button class="bg-green-500 p-3 rounded-lg text-white text-sm" type="submit">Ajouter</button>
        </div>
    </form>