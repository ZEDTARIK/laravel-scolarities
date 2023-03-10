<div class="p-2 bg-white shadow-sm">
    <form method="POST" wire:submit.prevent="store">
        @csrf
        @method('post')

        <div class="p-5">
            <x-jet-label value="{{__('Annee Scolaire :')}}" class="p-1" />
            <input wire:model="schoolYear" type="text" class="block mt-3 rounded-lg w-full @error('schoolYear') border-red-500 @enderror">

            @error('schoolYear')
            <div class="text text-red-400 rounded-lg text-sm"> * {{ $message }}</div>
            @enderror

        </div>

        <div class="p-5 flex justify-between items-center">
            <button class="bg-green-500 p-3 rounded-lg text-white text-sm" type="submit">Ajouter</button>
        </div>
    </form>