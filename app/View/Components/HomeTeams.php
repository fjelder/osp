<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Management;
class HomeTeams extends Component
{
    public $management;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->management = Management::orderBy('order')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-teams', ['management' => $this->management]);
    }
}