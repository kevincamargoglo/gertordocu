<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Folder;

class Newfolder extends Component
{
    public $openModal = false, $nameFolder;
    
    public function openModal()
    {
        $this->openModal = !$this->openModal;
    }
    public function saveFolder()
    {
        
        Folder::create([
            'name' => $this->nameFolder
        ]);
        
        $this->emit('refresh-folders');
        $this->nameFolder = "";
        $this->openModal();
    }
    public function render()
    {
        return view('livewire.newfolder');
    }
}
