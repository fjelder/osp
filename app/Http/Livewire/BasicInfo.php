<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BaseInfo;
class BasicInfo extends Component
{
    public $info;

    protected $rules = [

        'info.name' => 'required',
        'info.nip' => 'required|numeric',
        'info.regon' => 'required|numeric',
        'info.krs' => 'required|numeric',
        'info.email' => 'required|email',
        'info.number' => 'required|numeric',
        'info.linkFacebook' => '',
        'info.linkYoutube' => '',
    ];

    public function mount()
    {
        $this->info = BaseInfo::first();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update(){
        $this->validate();
        if($this->info->linkYoutube == ' ')
        {
            $this->info->linkYoutube = null;
        }
        if($this->info->linkFacebook == ' ')
        {
            $this->info->linkFacebook = null;
        }
        $this->info->save();
        session()->flash('flash.banner', 'Dane zostały zaaktualizowane!');
        session()->flash('flash.bannerStyle', 'success');
        return $this->redirect('/admin');
    }

    public function render()
    {
        return view('livewire.basic-info', [
            'info' => $this->info
        ]);
    }
}