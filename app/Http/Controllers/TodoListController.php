<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function saveItem(Request $request){

        // \Log::info(json_encode($request->all()));
        if ($request->listItem!= NULL){

            $newListItem = new ListItem;
            $newListItem->name = $request->listItem;
            $newListItem->is_complete = 0;        
            $newListItem->save();
            return redirect('/');
        }
        else {
            \Log::info('write someting');
            return redirect('/');
        }
    }

    public function markComplete($Id){
        \Log::info($Id);
        $completeListItem = ListItem::find($Id);
        if ( $completeListItem->is_complete == 1)
        {
            $completeListItem->is_complete = 0;
            $completeListItem->save();
            return redirect('/completed');
        } else {
           
            $completeListItem->is_complete = 1;
            $completeListItem->save();
            return redirect('/');
        }
    
    }

    public function showList(){

        // \Log::info(json_encode($request->all()));
        

        return view('home',['listItems'=> ListItem::where('is_complete',0)->get() ]);
    }

    public function showListCompleted(){

        // \Log::info(json_encode($request->all()));
        

        return view('home',['listItems'=> ListItem::where('is_complete',1)->get() ]);
    }



    public function deleteList(){

        // \Log::info(json_encode($request->all()));
        

        ListItem::truncate();
        return redirect('/');
    }

}
