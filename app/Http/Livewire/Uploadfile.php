<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Uploadfile extends Component
{
    public $openModal = false, $folder, $subfolder;
    protected $listeners = ['some-event' => 'openModal'];

    public function openModal()
    {
        $this->openModal = !$this->openModal;
    }

    public function render()
    {
        return view('livewire.uploadfile');
    }
}
