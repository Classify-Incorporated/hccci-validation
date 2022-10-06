<?php

namespace App\Http\Livewire\Usermanagement;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Validator;

class Create extends Component
{
    public $first_name, $last_name, $username, $email;
    public $roles = [];
    public $require_setup = true;
    public $generated_password;
    public $generated_password_display = false;

    protected $validationAttributes = [
        'email' => 'email address'
    ];

    public function rules()
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        return [
            'first_name'                => 'required',
            'last_name'                => 'required',
            'username'                  => ['required', 'max:12', 'unique:users,username', 'without_spaces'],
            'email'                     => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'roles'                     => 'required',
            'require_setup'             => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'username.without_spaces'   => 'space is not allowed'
        ];
    }
    

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        // If administrator role selected remove other role
        if(in_array('administrator', $this->roles)) {
            $this->roles = ['administrator'];
        }
    }

    public function render()
    {
        return view('livewire.usermanagement.create')->layout('layouts.app');
    }

    public function store()
    {
        $this->validate();

        $this->generated_password = (app()->isProduction()) ? Str::upper(Str::random(8)) : 'bxtr1605';

        try {

            DB::beginTransaction();

            $user = User::create([
                'first_name'        => $this->first_name,
                'last_name'         => $this->last_name,
                'username'          => $this->username,
                'email'             => $this->email,
                'password'          => Hash::make($this->generated_password),
                'is_required_setup' => $this->require_setup
            ]);
    
            foreach($this->roles as $name) {
                $user->assignRole($name);
            }

            DB::commit();

            $this->emit('saved'); // Hide form
        
            session()->flash('message', 'Your temporary password: ' . $this->generated_password);

            $this->reset(); // Reset all properties

        } catch (Exception $exception) {

            Log::error($exception);
            
            session()->flash('message', 'Something went wrong behind the scene. Please contact your administrator.');

            DB::rollBack();
        }
    }
}
