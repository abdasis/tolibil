<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card py-3">
        <div class="card-body">
            <div class="row h-100">
                <div class="col-md-7">
                    <form wire:submit.prevent="update">
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <x-form-input type="text" placeholder="Masukan Mata Kuliah" name="name"
                                                  wire:model.defer="name" label="Nama Mata Kuliah"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <x-form-input type="number" placeholder="1" name="semester"
                                                  wire:model.defer="semester" label="Semester Saat Ini"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <x-form-input type="text" placeholder="Masukan Nama Dosen Pengampu" name="lecturer"
                                                  wire:model.defer="lecturer" label="Dosen Pengampu"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <x-form-input type="text" placeholder="Masukan Nama Ruangan" name="classroom"
                                                  wire:model.defer="classroom" label="Nama Ruangan"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <x-form-select name="day" wire:model.defer="day" label="Hari Kuliah">
                                        <option value="">Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </x-form-select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group mb-2">
                                    <x-form-input type="number" name="total_hours" wire:model.defer="total_hours"
                                                  label="SKS"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <x-form-input type="time" label="Jam Mulai" name="start_time"
                                                  wire:model.defer="start_time"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <x-form-input type="time" label="Jam Selesai" name="end_time"
                                                  wire:model.defer="end_time"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-2">
                                <x-form-textarea name="description" wire:model.defer="description" label="Deskripsi"/>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <button class="btn btn-primary btn-border w-md float-end">
                                <i class="ri-save-line me-1"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="card bg-soft-warning shadow-none border-dashed m-4">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center">
                                <i class="ri-chat-quote-line me-1"></i>
                                Panduan
                            </h5>
                            <ul>
                                <li>Kamu bisa menambahkan jadwal pelajaran</li>
                                <li>Kamu bisa mendapatkan notifikasi ke WhatsApp sesuai dengan jam pelajaran</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
