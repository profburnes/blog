<?php

namespace App\View\Components;

use App\Models\Categorias;
use Illuminate\View\Component;

class Sidebar extends Component
{

    public $categorias;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categorias = Categorias::orderby('categoria')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
