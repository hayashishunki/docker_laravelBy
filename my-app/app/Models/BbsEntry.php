<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//関連付けにはprotected $table = "テーブル名"

class BbsEntry extends Model
{
    protected $table = "bbs_entry";
}
