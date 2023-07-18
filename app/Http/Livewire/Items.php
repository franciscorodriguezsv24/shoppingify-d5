<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class Items extends Component
{
    public $search;

    public function render()
    {
        $items = Item::where("name", "LIKE", "%" .$this->search. "%")->get();

        return view('livewire.items', compact("items"));
    }
}
