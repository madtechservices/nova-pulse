<?php

namespace Madtechservices\NovaPulse;

use Laravel\Nova\Tool;
use Laravel\Nova\Menu\MenuSection;
use Illuminate\Http\Request;

class NovaPulse extends Tool
{
    /**
     * Define the menu item or section for the tool.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Nova\Menu\MenuSection
     */
    public function menu(Request $request)
    {
        return MenuSection::make('Nova Pulse') // Label in the sidebar
            ->path('/nova-pulse') // Path for the menu item
            ->icon('heart'); // Heroicon
    }
}
