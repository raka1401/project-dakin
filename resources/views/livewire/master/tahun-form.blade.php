{{-- Success is as dangerous as failure. --}}
<!-- Button trigger modal -->
<div x-data="{ open:false }">
    <button type="button" class="btn btn-primary"  @click="open !open" >
        Tambah Tahun
    </button>
    {{-- <div x-data="{ open: false }" class="mt-4">
        <button @click="open = !open" class="px-4 py-2 bg-blue-500 text-white">Toggle</button>
        <div x-show="open" class="mt-2 p-4 bg-white border rounded">Content to show</div>
    </div> --}}
    {{-- <div style="text-align: center;">
        <h1>{{ $count }}</h1>
        <button wire:click="increment">Increment</button>
        <script>
            window.addEventListener('counter-incremented', event => {
                console.log('Counter incremented to:', event.detail.count);
            });
        </script>
    </div> --}}

    {{-- <div style="text-align: center;">
        <h1>{{ $count }}</h1>
        <button id="incrementBtn">Increment</button>
        <script>
            document.getElementById('incrementBtn').addEventListener('click', function() {
                Livewire.on('increment');
            });
        </script>
    </div> --}}

    <br>

    <div class="modal fade"  tabindex="-1" x-show="open">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Tahun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='store'>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="nama_tahun" class="form-control" placeholder="Nama Tahun">
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model="status">
                            <label class="form-check-label">
                                Aktif
                            </label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
