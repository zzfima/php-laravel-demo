<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    public function saveItem(Request $request): RedirectResponse
    {
        $this->logInfo(json_encode('Item added: ' . $request->listItem));

        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->completed = false;
        $newListItem->save();

        return redirect('/');
    }

    public function markComplete($id): RedirectResponse
    {
        $this->logInfo(' Item id ' . $id . ' is completed');
        $listItem = ListItem::find($id);
        $listItem->completed = true;
        $listItem->save();

        return redirect('/');
    }

    public function logInfo($info): void
    {
        Log::info($info);
    }
}
