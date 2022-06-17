<?php

namespace App\Http\Livewire\MataKuliah;

use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{
    use LivewireAlert;

    public $name, $lecturer, $total_hours, $day, $start_time, $end_time, $classroom, $description, $semester;

    public function rules()
    {
        return[
            'name' => 'required|min:3|unique:schedules',
            'lecturer' => 'required|min:3',
            'total_hours' => 'required|min:1',
            'day' => 'required|min:1',
            'start_time' => 'required|min:1',
            'end_time' => 'required|min:1',
            'semester' => 'required',
            'classroom' => 'required|min:1',
        ];
    }

    public function store()
    {
        $this->validate();
        try {
            $user = Auth::user();

            $user->schedules()->create([
                'name' => $this->name,
                'lecturer' => $this->lecturer,
                'semester' => $this->semester,
                'total_hours' => $this->total_hours,
                'day' => $this->day,
                'start_time' => $this->start_time,
                'end_time' => $this->end_time,
                'classroom' => $this->classroom,
                'description' => $this->description,
            ]);

            $this->alert('success', 'Berhasil',[
                'text'=>'Berhasil menambahkan jadwal'
            ]);

            $this->reset();

        }catch (\Exception $e) {
            $this->alert($e->getMessage(), 'danger');
        }
    }

    public function render()
    {
        return view('livewire.mata-kuliah.create');
    }
}
