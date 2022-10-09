<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatManageSocialIcons extends Model
{
    use HasFactory;
    protected $table = 'cat_manage_social_icons';
    protected $primarykey = 'id';
    protected $fillable = ['social_icon'];
}
