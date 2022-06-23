<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BbsEntry;

class BbsEntryController extends Controller
{
    //投稿一覧画面表示
    function index() {
        dd(BbsEntry::all());
    }
    //投稿処理
    function create() {
        echo "create";
    }
}
