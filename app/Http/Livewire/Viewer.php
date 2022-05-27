<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Files;

class Viewer extends Component
{
    public   
            $collection_name,
            $file_name,
            $file_type,
            $file_extension,$file_url,
            $file_urls = [],
            $file_departamento,
            $description,
            $modal=false,
            $currentId,
            $currentName,
            $currentData=[];

    public function openmodal($id)
    {        
        $this->modal=!$this->modal;
        $this->currentId=$id;
        $this->currentData = Files::find($id);       

    }
    public function closemodal()
    {        
        $this->modal=false;
        

    }

    public function render()    
    {
        $data = Files::all();
        
        return view('livewire.viewer', compact('data'));
    }
    
}
