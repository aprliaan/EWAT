<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.guest');
    }

    public function compose(View $view)
    {
     $routeAction = $this->request->route()->getAction();

     if (array_key_exists('active_menu', $routeAction)) {
         $view->with('active_menu', $routeAction['active_menu']);
     } else {
         $view->with('active_menu', 'default');
     }
    }
}
