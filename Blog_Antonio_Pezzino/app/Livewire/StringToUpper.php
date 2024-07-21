<?php

namespace App\Livewire;

use Livewire\Component;

class StringToUpper extends Component
{
    public $text;

    public function transform()
    {
        $this->text = strtoupper($this->text);
    }


    public function render()
    {
        return view('livewire.string-to-upper');
        
        /*[
            'textToUpper' => strtoupper($this->text),
        ]);*/
    }
}
