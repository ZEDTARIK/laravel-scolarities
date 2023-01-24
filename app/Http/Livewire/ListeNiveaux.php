<?php

namespace App\Http\Livewire;

use App\Models\YearSchool;
use Livewire\Component;

class ListeNiveaux extends Component
{
    public function render()
    {
       // @YearSchoolList = YearSchool::paginate(1);

        return view('livewire.liste-niveaux');
    }
}
