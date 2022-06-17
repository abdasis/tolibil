<?php

namespace App\Http\Livewire\MataKuliah;

use App\Models\Schedule;
use Livewire\Component;
use App\Traits\DeleteConfirm;
class Show extends Component
{
    use DeleteConfirm;
    public $schedule;

    protected $listeners = ['delete' => 'deleted'];

    public function deleted()
    {
        if ($this->model_id ){
            $schedule = Schedule::find($this->model_id);
            $schedule->delete();
            $this->flash('success', 'Berhasil', [
                'text' => 'Matakuliah Berhasil Dihapus'
            ], route('mata-kuliah.index'));
        }else{
            $this->alert('error', 'Kesalahan',[
                'text' => 'Terjadi kesalahan silahkan periksa kembali'
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
