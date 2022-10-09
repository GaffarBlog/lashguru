<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatManageTasks extends Model
{
    use HasFactory;
    protected $table = 'cat_manage_tasks';
    protected $primarykey = 'id';
    protected $fillable = ['task_name','level_two','level_three','level_four','level_five','level_six'];
}
