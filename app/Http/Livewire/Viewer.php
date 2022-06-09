<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Files;
use Illuminate\Support\Facades\Storage;
class Viewer extends Component
{
    public   
            $collection_name,
            $file_name,
            $file_type,
            $file_extension,
            $file_url,
            $file_urls = [],
            $file_departamento,
            $description,
            $modal=false,
            $currentId,
            $currentName,
            $currentData=[],
            $folder,$data;
          
    protected $listeners = ['some-event' => '$refresh'];

    public function openmodal($id)
    {        
        $this->modal=!$this->modal;
        $this->currentId=$id;
        $this->currentData = Files::find($id);       
        
    }
    public function closemodal()
    {        
        $this->modal = false;
    }
    
    public function download($name)
    {                
        return response()->download(storage_path('files\DAj00XXn1jAKq6qyPxWiLbq3S57g5hYDbCnzyhyX.png'));
    }
    public function delete($id)
    {        
        
        if($id){
            $data = Files::where('id', $id);
            $data->delete();
        }
        session()->flash('message', 'Registro eliminado con éxito.');

    }

    public function render()    
    {
        
        $this->data = Files::where('folder_id',$this->folder)->get() ;

        return view('livewire.viewer');
    }
    
}
