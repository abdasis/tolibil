<?php

namespace App\Http\Livewire\MataKuliah;

use App\Models\Schedule;
use Livewire\Component;
use App\Traits\DeleteConfirm;
class Show extends Component
{
    use DeleteConfirm;
    public $schedule;

    public function mount($mataKuliah)
    {
        $this->schedule = Schedule::find($mataKuliah);
    }


    public function render()
    {
        return view('livewire.mata-kuliah.show');
    }
}
