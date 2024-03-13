<?php

namespace App\Http\Admin\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AdminBaseController extends BaseController
{   
    public function __construct()
    {
        view()->share('sidebarItems',$this->sidebarItems);
    }

    private $sidebarItems = [
        ['title' => 'Category', 'url' => 'category'],
        ['title' => 'Product', 'url' => 'product'],
        ['title' => 'Post', 'url' => 'post']
    ];
}   