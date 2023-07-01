<?php namespace Amatemalas\Cookieconsent\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Cookie;

class CookiesPopup extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'CookiesPopup Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
        $this->page['cookie'] = Cookie::get('cookie-consent');
    }

    public function onAccept()
    {
        $cookie = Cookie::make('cookie-consent', 1, 525960);
        Cookie::queue($cookie);
    }

    public function defineProperties()
    {
        return [];
    }
}
