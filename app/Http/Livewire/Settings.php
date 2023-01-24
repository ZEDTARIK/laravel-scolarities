<?php

namespace App\Http\Livewire;

use App\Models\YearSchool;
use Livewire\Component;
use Livewire\WithPagination;

class Settings extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        if (!empty($this->search)) {
            $YearSchoolList = YearSchool::where('school_year', 'like', '%' . $this->search . '%')->paginate(3);
        } else {
            $YearSchoolList = YearSchool::paginate(3);
        }

        return view('livewire.settings', compact('YearSchoolList'));
    }
}
