<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BaseInfo;
class BasicInfo extends Component
{
    public $info;

    protected $rules = [

        'info.name' => 'required',
        'info.nip' => 'required|numeric|size:10',
        'info.regon' => 'required',
        'info.*' => '',
        'info.name' => 'required',


    ];

    public function mount()
    {
        $this->info = BaseInfo::first();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.basic-info', [
            'info' => $this->info
        ]);
    }
}
