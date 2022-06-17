<?php

namespace App\Traits;

use Jantinnerezo\LivewireAlert\LivewireAlert;

trait DeleteConfirm
{

    use LivewireAlert;

    public $model_id;

    public function delete($id, $btn_confirm = 'hapus', $btn_cancel = 'batal')
    {
        $this->confirm('Yakin hapus data ini?', [
            'toast' => false,
            'text' => 'Data yang dihapus tidak dapat dikembalikan',
            'position' => 'center',
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'cancelButtonText' => 'Tidak',
            'onConfirmed' => $btn_confirm,
            'onDismissed' => $btn_cancel,
        ]);

        $this->model_id = $id;

    }

}
