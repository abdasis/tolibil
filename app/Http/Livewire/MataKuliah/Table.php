<?php

namespace App\Http\Livewire\MataKuliah;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Schedule;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class Table extends DataTableComponent
{
    public function configure(): void
    {
        $this->setPrimaryKey('id')->setTableRowUrl(function($schedule) {
            return route('mata-kuliah.show', $schedule->id);
        });
    }
    public function filters(): array
    {
        return [
            SelectFilter::make('Active')
                ->options([
                    '' => 'All',
                    'yes' => 'Yes',
                    'no' => 'No',
                ]),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable()->deselected(),
            Column::make('Mata Kuliah', 'name')
                ->searchable()->sortable(),
            Column::make('Hari', 'day')->sortable(),
            Column::make('SKS', 'total_hours')->sortable(),
            Column::make('Jam Masuk', 'start_time')->sortable(),
            Column::make('Jam Selesai', 'end_time')->sortable(),
            Column::make("Tanggal Dibuat", "created_at")
                ->sortable()
                ->format(fn($tanggal) => $tanggal->format('d-m-Y H:i')),
            Column::make("Terakhir Diperbarui", "updated_at")
                ->sortable()
                ->format(fn($tanggal) => $tanggal->format('d-m-Y H:i')),
        ];
    }

    public function builder(): Builder
    {
        return Schedule::query()
            ->where('user_id', auth()->user()->id);
    }
}
