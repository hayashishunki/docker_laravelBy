<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BbsEntry;

class BbsEntryController extends Controller
{
    //投稿一覧画面表示
    function index() {
        $item_list = BbsEntry::all();
        return view("bbs_entry_list", [
            "item_list => $item_list"
        ]);
    }
    //投稿処理
    function create() {
        echo "create";
    }
}
