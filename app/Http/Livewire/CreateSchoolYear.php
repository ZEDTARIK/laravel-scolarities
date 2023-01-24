<?php

namespace App\Http\Livewire;

use App\Models\YearSchool;
use Carbon\Carbon;
use Livewire\Component;

class CreateSchoolYear extends Component
{

    public $schoolYear;


    public function render()
    {
        return view('livewire.create-school-year');
    }

    public function store(YearSchool $yearSchool)
    {
        $this->validate([
            'schoolYear' => 'string|required|max:9|unique:year_schools,school_year',
        ]);

        $currentYear = Carbon::now()->format('Y');
        try {
            $yearSchool->school_year = $this->schoolYear;
            $yearSchool->current_year = $currentYear;
            $yearSchool->save();

            if ($yearSchool) {
                $this->schoolYear = "";
            }
            return redirect()->back()->with('success', 'Annee Scolaire bien Ajouter');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
