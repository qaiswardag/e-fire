<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Person extends Component
{
    public function render()
    {
        return view('livewire.person', [
            'people' => \App\Models\Person::paginate(6)
        ]);
    }
}
