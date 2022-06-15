<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subfolder;

class Showsubfolder extends Component
{
    public $data,$folder,$subfolder;
    protected $listeners = ['refresh-subfolders' => '$refresh'];
    public function render()
    {
        
        $this->data = Subfolder::where('folder_id', $this->folder)->get();
        return view('livewire.showsubfolder');

    }
}
