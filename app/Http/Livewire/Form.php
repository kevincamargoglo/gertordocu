<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Files;

class Form extends Component
{
    use WithFileUploads;
    public   
            $collection_name,
            $file_name,
            $file_type,
            $file_extension,$file_url,
            $file_urls = [],
            $file_departamento,
            $description,
            $existingImages =false;
/* 
    protected $messages = [
        'file_urls.required' => 'Es necesario subir un archivo.',
        'file_urls.img' => 'Debe ser imagen',
    ]; */
    public function resetData(){
        $this->file_urls = [];
        $this->file_name = "";
        $this->description="";
    }
    public function save()
    {        
        $this->validate([
            'file_urls.*' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp,pdf,docx|max:5120', 
            
        ]);  
        if (is_array($this->file_urls) || is_object($this->file_urls))
        { 

            foreach($this->file_urls as $key => $file_url){
                $this->file_urls[$key] = $file_url->store('files', 'public');            
            }
        }
        $this->file_urls = json_encode($this->file_urls);
        Files::create([
            'file_url' => $this->file_urls,
            'file_name' => $this->file_name,
            'collection_name' => "root",
            'description' => $this->description,
            'file_departamento' => $this->file_departamento,    
            
        ]);
        $this->resetData();        
        session()->flash('message', 'Archivo subido con éxito.');
    }
    
    public function render()
    {
        return view('livewire.form');
    }
}
