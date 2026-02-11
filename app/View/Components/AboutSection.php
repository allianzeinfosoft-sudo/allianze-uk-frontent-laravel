<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AboutSection extends Component
{
    public $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('components.home.about-section', [
            'data' => $this->data,
        ]);
    }
}