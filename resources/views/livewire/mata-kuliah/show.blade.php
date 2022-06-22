<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">
                        <i class="ri-edit-2-line align-middle me-1 lh-2">
                        </i> Detail Mata Kuliah
                    </h6>
                    <p class="card-subtitle text-muted mb-0">Detail mata kuliah dan catatan yang sudah dibuat</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="text-primary">{{$schedule->name}}</h1>
                            <table class="table table-borderless">
                                <tr>
                                    <td>Dosen Pengampu</td>
                                    <td>:</td>
                                    <td>{{$schedule->lecturer}}</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>{{$schedule->classroom}}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah SKS</td>
                                    <td>:</td>
                                    <TD>{{$schedule->total_hours}}</TD>
                                </tr>
                                <tr>
                                    <td>Hari</td>
                                    <td>:</td>
                                    <td>{{$schedule->day}}</td>
                                </tr>
                                <tr>
                                    <td>Jam Masuk</td>
                                    <td>:</td>
                                    <td>{{$schedule->start_time}}</td>
                                </tr>
                                <tr>
                                    <td>Jam Keluar</td>
                                    <td>:</td>
                                    <td>{{$schedule->end_time}}</td>
                                </tr>
                            </table>
                            <h5>Diskripsi Matakuliah</h5>
                            <p>{{$schedule->description ?? 'Tidak ada deskripsi'}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">
                        <i class="ri-book-3-line align-middle me-1 lh-2">
                        </i> Catatan Kuliah
                    </h6>
                    <p class="card-subtitle text-muted mb-0">Berikut beberapa catatan yang ada pada mata kuliah ini</p>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="border-bottom py-2">
                            <a href="">
                                <i class="ri-book-mark-line"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et hic perferendis. Fugit, magnam optio! A delectus doloremque harum maxime molestias nemo quasi repellat sapiente, sed sunt suscipit unde vel?
                            </a>
                        </li>
                        <li class="border-bottom py-2">
                            <a href="">
                                <i class="ri-book-mark-line"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et hic perferendis. Fugit, magnam optio! A delectus doloremque harum maxime molestias nemo quasi repellat sapiente, sed sunt suscipit unde vel?
                            </a>
                        </li>
                        <li class="border-bottom py-2">
                            <a href="">
                                <i class="ri-book-mark-line"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et hic perferendis. Fugit, magnam optio! A delectus doloremque harum maxime molestias nemo quasi repellat sapiente, sed sunt suscipit unde vel?
                            </a>
                        </li>
                        <li class="border-bottom py-2">
                            <a href="">
                                <i class="ri-book-mark-line"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et hic perferendis. Fugit, magnam optio! A delectus doloremque harum maxime molestias nemo quasi repellat sapiente, sed sunt suscipit unde vel?
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <button wire:click.prevent="delete({{$schedule->id}})" class="btn btn-outline-danger btn-border btn-sm mt-3 mb-3">
            <i class="ri-delete-bin-2-line"></i>
            Hapus
        </button>
        <a href="{{route('mata-kuliah.edit', $schedule)}}">
            <button class="btn btn-outline-secondary btn-border btn-sm btn-block mt-3 mb-3">
                <i class="ri-edit-2-fill"></i>
                Sunting
            </button>
        </a>
    </div>
</div>
