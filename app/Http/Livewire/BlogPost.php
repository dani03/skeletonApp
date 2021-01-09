<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogPost extends Component
{
    public Array $data;
    public function loadData(){
        $this->data = [
            "image" => "eeee",
        ];
    }
    
    public function render()
    {
        return view('livewire.blog-post');
    }
}
