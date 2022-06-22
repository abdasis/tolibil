<?php

namespace App\Traits;

use Jantinnerezo\LivewireAlert\LivewireAlert;

trait DeleteConfirm
{

    use LivewireAlert;

    public $model_id;

    public function delete($id, $btn_confirm = 'delete', $btn_cancel = 'cancel')
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
            'customClass' => [
                'container' => '',
                'popup' => '',
                'header' => '',
                'title' => '',
                'closeButton' => '',
                'icon' => '',
                'image' => '',
                'content' => '',
                'htmlContainer' => '',
                'input' => '',
                'inputLabel' => '',
                'validationMessage' => '',
                'actions' => '',
                'confirmButton' => 'btn btn-primary',
                'denyButton' => 'btn btn-danger',
                'cancelButton' => 'btn btn-danger',
                'loader' => '',
                'footer' => ''
            ],
        ]);

        $this->model_id = $id;

    }

}
