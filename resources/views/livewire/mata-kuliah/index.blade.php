<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="card">
        <div class="card-header border-0 d-flex justify-content-between align-middle">
            <h4 class="d-flex align-middle">
                <i class="ri-list-check me-1"></i>
                Semua Jadwal
            </h4>
            <a href="{{route('mata-kuliah.create')}}">
                <button class="btn btn-primary btn-border">
                    <i class="mdi mdi-plus"></i>
                    Mata Kuliah Baru
                </button>
            </a>
        </div>
        <div class="card-body">
            <livewire:mata-kuliah.table/>
        </div>
    </div>
</div>
