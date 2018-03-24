<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Config;

class LayoutComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $join_us_form = Config::where('name', 'join_us_form')
            ->first();
            
        $view->with('join_us_form', $join_us_form);
    }
}