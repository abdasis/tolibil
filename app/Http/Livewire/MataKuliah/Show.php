<?php

namespace App\Http\Livewire\MataKuliah;

use App\Models\Schedule;
use Livewire\Component;
use App\Traits\DeleteConfirm;
class Show extends Component
{
    use DeleteConfirm;
    public $schedule;

    protected $listeners = ['delete' => 'handleDelete'];

    /*method untuk menghapus jadwal*/
    public function handleDelete()
    {
        if ($this->model_id){
            Schedule::find($this->model_id)->delete();
            $this->flash('success', 'Berhasil',[
                'text'=>'Berhasil menghapus jadwal'
            ], route('mata-kuliah.index'));
        }else{
            $this->alert('error', 'Gagal',[
                'text'=>'Gagal menghapus jadwal'
            ]);
        }
    }

    public function mount($mataKuliah)
    {
        $this->schedule = Schedule::find($mataKuliah);
    }

    public function render()
    {
        return view('livewire.mata-kuliah.show');
    }
}
