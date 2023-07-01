<?php namespace Amatemalas\CookieConsent;

use Amatemalas\Cookieconsent\Components\CookiesPopup;
use System\Classes\PluginBase;
use Event;
use App;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            CookiesPopup::class => 'cookieConsent',
        ];
    }

    public function registerSettings()
    {
    }
}
