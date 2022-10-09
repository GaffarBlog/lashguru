<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatManageColors extends Model
{
    use HasFactory;
    protected $table = 'cat_manage_colors';
    protected $primarykey = 'id';
    protected $fillable = ['color_name','level_two'];
}
