<?php

namespace App\Livewire\Master;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tahun;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class TahunTabel extends Component
{
    use WithPagination;
    use LivewireAlert;


    // public $tahun;
    public $tahuns;
    public $perPageOptions = [5, 10, 20, 100];
    public $perPage = 5;
    public $nama_tahun;
    public $status;

    public function mount()
    {
        $this->tahuns = Tahun::paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.master.tahun-tabel');
    }

    public function createOrUpdate()
    {
        if (isset($this->tahun_id)) {
            $tahun = Tahun::find($this->tahun_id);
            $tahun->update([
                'nama_tahun' => $this->nama_tahun,
                'status' => $this->status,
            ]);
        } else {
            Tahun::create([
                'nama_tahun' => $this->nama_tahun,
                'status' => $this->status
            ]);
        }
        $this->alert('success', 'Data Berhasil Disimpan');
        $this->render();

    }
}
