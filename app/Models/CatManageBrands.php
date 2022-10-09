<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatManageBrands extends Model
{
    use HasFactory;
    protected $table = 'cat_manage_brands';
    protected $primarykey = 'id';
    protected $fillable = ['brand_name'];
}
