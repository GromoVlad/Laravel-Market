<?php


namespace App\ViewComposers;


use App\Model\Category;
use Illuminate\Contracts\View\View;

class CategoriesComposer
{
    public function compose(View $view)
    {
        $categories = Category::get();
        $view->with('categories', $categories);
    }
}
