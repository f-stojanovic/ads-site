<?php

namespace App\Http\ViewComposer;

use Illuminate\View\View;

class AreaComposer
{
    private $area;

    public function compose(View $view)
    {
        //US in conifg

        if(!$this->area) {
        $this->area = \App\Area::where('slug', session()->get('area', 'us'))->first();
    }
        return $view->with('area', $this->area);
    }
}