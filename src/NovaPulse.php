<?php

namespace Madtechservices\NovaPulse;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaPulse extends Tool
{
    protected $link;

    public function __construct()
    {
        $this->link = MenuSection::make('Pulse')
            ->path('/'.Str::snake((new \ReflectionClass($this))->getShortName(), '-'))
            ->icon('server');
    }

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-pulse', __DIR__.'/../dist/js/novapulse.js');
        Nova::style('nova-pulse', __DIR__.'/../dist/css/novapulse.css');
        Nova::provideToScript([
            'tool' => [
                'pulse' => '/'.config('pulse.path'),
            ],
        ]);
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @return mixed
     */
    public function menu(Request $request)
    {
        return $this->link;
    }

    public function setName(string $name): self
    {
        $this->link->name = $name;

        return $this;
    }

    public function setIcon(string $icon): self
    {
        $this->link->icon($icon);

        return $this;
    }

    public function setMenu($menu): self
    {
        $this->link = $menu;

        return $this;
    }
}
