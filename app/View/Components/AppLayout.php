<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $pageTitle;
    public $breadcrumbsName;
    public $breadcrumbsData;

    public function __construct($pageTitle, $breadcrumbsName = '', $breadcrumbsData = null)
    {
        $this->pageTitle       = $pageTitle;
        $this->breadcrumbsName = $breadcrumbsName;
        $this->breadcrumbsData = $breadcrumbsData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('admin.layout.app');
    }
}
