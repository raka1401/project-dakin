<?php

namespace App\Livewire\Master;

use Livewire\Component;
use App\Models\Tahun;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TahunForm extends Component
{
    use LivewireAlert;

    public $tahunId, $nama_tahun, $status;

    public $count = 0;

    public function increment()
    {
        $this->count++;
        $this->dispatch('counter-incremented', ['count' => $this->count]);
    }

    public function render()
    {
        return view('livewire.master.tahun-form', [
            'tahun' => Tahun::all()
        ]);
    }

    public function store()
    {
        $this->validate([
            'nama_tahun' => 'required',
            // 'status' => 'boolean'
        ]);

        Tahun::create([
            'nama_tahun' => $this->nama_tahun,
            'status' => $this->status
        ]);

        $this->resetInput();
        // $this->dispatch('tahunAdded');  // Notifikasi ke frontend
    }

    public function edit($id)
    {
        $tahun = Tahun::findOrFail($id);
        $this->tahunId = $id;
        $this->nama_tahun = $tahun->nama_tahun;
        $this->status = $tahun->status;
    }

    public function delete($id)
    {
        $tahun = Tahun::find($id);
        if ($tahun) {
            $tahun->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }
    }

    private function resetInput()
    {
        $this->tahunId = null;
        $this->nama_tahun = '';
        $this->status = null;
    }
}
