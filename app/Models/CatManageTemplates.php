<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatManageTemplates extends Model
{
    use HasFactory;
    protected $table = 'cat_manage_templates';
    protected $primarykey = 'id';
    protected $fillable = ['temp_name','level_two','level_three'];
}
