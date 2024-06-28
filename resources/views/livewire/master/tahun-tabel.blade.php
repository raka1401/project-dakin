<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header mb-4">
                <h5 class="card-title">Tabel Tahun</h5>
            </div>
            <div class="card-body">
                {{-- <button>apa</button> --}}
                <table class="table table-bordered">
                    <thead class="table-secondary">
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tahuns as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->nama_tahun }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <a href="" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                    <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tahuns->links() }}
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Data Tahun</h5>
                <form wire:submit="createOrUpdate">
                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tahun" wire:model="nama_tahun">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-3 pt-0">Status</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="statusAktif"
                                    value="aktif" wire:model="status" checked>
                                <label class="form-check-label" for="statusAktif">
                                    Aktif
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="statusTidakAktif"
                                    value="tidak aktif" wire:model="status">
                                <label class="form-check-label" for="statusTidakAktif">
                                    Tidak Aktif
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
