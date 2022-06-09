<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Files;

class Showfolder extends Component
{
    public $folder, $data;

    
    
    public function render()
    {
        $this->data = Files::where('folder_id', $this->folder)->get();
       
        return view('livewire.showfolder');
    }
}
