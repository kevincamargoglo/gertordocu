<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Folder;

class Folders extends Component
{    
    public $data,
           $modal=false;
    protected $listeners = ['refresh-folders' => '$refresh'];


    public function render()
    {
        $this->data = Folder::all();  
        

        return view('livewire.folders');
    }
    public function openFolder($iden){
        dd($iden);
    }
}
