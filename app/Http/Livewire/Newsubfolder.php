<?php

namespace App\Http\Livewire;
use App\Models\Subfolder;

use Livewire\Component;

class Newsubfolder extends Component
{
    public $openModal = false, $nameFolder, $folder;

    protected $rules = [
        'nameFolder' => 'required|min:3',        
    ];
    protected $listeners = ['refresh-subfolders' => '$refresh'];

    
    public function openModal()
    {
        $this->openModal = !$this->openModal;
    }
    public function saveFolder()
    {
        $this->validate();
                
        Subfolder::create([
            'name' => $this->nameFolder,
            'folder_id' => $this->folder,
        ]);
        
        $this->emit('refresh-subfolders');
        $this->nameFolder = "";
        $this->openModal();
    }

    public function render()
    {
        return view('livewire.newsubfolder');
    }
}
