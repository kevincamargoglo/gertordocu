<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Crypt;

class Users extends Component
{
    use WithPagination;

    public  $name, $email, $role ,$password, $passwordtemp, $user;
    public $openModal = 0;
    public $modeUpdate = 0;
    public $userSelect;



    public function render()
    {                
        return view('livewire.users', ['data' => User::where('name', 'like', '%'.$this->user.'%')->paginate(10) ]);
        
    }
    public function create()
    {
        $this->resetCreateForm();
        $this->openModal();
    }
    public function openModal()
    {
        $this->openModal = !$this->openModal;
    }
    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->passwordtemp = '';
        $this->role = '';

    }
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',    
            'role' => 'required',    
                    
        ]);        
        
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'current_team_id'=> "1"
        ]);
        $user->assignRole($this->role);

        session()->flash('message', 'Usuario creado con éxito');

        $this->openModal();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        $this->modeUpdate = true;
        
        $User = User::findOrFail($id);
        $this->userSelect = $id;        
        $this->role= $User->roles->pluck('name');
        $this->name = $User->name;
        $this->email = $User->email; 
        $this->password = $User->password;   
        $this->openModal();
    }
    public function update()
    {        
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);        
            $user = User::find($this->userSelect);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'current_team_id'=> "1"
            ]);
            $user->assignRole($this->role);

            
            $this->updateMode = false;
            $this->resetCreateForm();
        
    }    
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
