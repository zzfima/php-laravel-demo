<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\View\View;

class IndexController extends Controller
{
    //mainPage called from web.php as route and passed 'listItems' to mainPage
    public function mainPage(): View
    {
        return view('mainPage',
            ['uncompletedTodoItems' => ListItem::where('completed', false)->get()],
            ['completedTodoItems' => ListItem::where('completed', true)->get()],
        );
    }

}
