<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public Array $data;
    /*
    permet le chargement des données
    */
    public function loadData(){
        sleep(1);
        $this->data = [
            'image' => 'https://www.pexels.com/fr-fr/photo/mode-homme-gens-bureau-5945256/',
            'name' => 'daniel Same',
            'description' => 'bonjour je m\'appelle daniel'
        ];
    }
    public function render()
    {
        return view('livewire.card');
    }
}
