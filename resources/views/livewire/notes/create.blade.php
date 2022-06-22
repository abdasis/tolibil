<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="form-group mb-3">
                    <x-form-input
                        name="judul"
                        wire:model.defer="judul"
                        placeholder="Masukan Judul ..."
                        class="form-control-lg border-white"
                    />
                </div>
                <textarea id="premiumskinsandicons-snow" placeholder="Isi catatan disini ..."></textarea>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        tinymce.init({
            selector: 'textarea#premiumskinsandicons-snow',
            skin: 'borderless',
            icons: 'fluent',
            plugins: 'quickbars image lists code table codesample autosave',
            toolbar: 'blocks | forecolor backcolor | bold italic underline strikethrough | link image blockquote codesample | align bullist numlist | code ',
            height: 700,
            menubar: false,

        });
    </script>
@endpush

@push('styles')
    <style>
        .tox:not(.tox-tinymce-inline) .tox-editor-header {
            background-color: #fff;
            border-bottom: none;
            box-shadow: 0 2px 2px -2px rgb(34 47 62 / 10%), 0 1px 1px -4px rgb(34 47 62 / 7%) !important;
            padding: 4px 0;
            transition: box-shadow .5s;
        }
        .tox-tinymce{
            border: none !important;
        }
    </style>
@endpush
