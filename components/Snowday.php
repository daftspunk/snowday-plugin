<?php namespace Albrightlabs\SnowDay\Components;

use AlbrightLabs\SnowDay\Models\Settings;
use Cms\Classes\ComponentBase;

class SnowDay extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Snow Day Banner',
            'description' => 'Displays a cross-site banner message.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page->addCss('/plugins/albrightlabs/snowday/assets/css/styles.css','core');
    }

    public function message()
    {
        if($settings = Settings::get('show_showday')){
            return Settings::get('snowday_message');
        }
    }

    public function enabled()
    {
        if($settings = Settings::get('show_showday')){
            return true;
        }

        return false;
    }
}
