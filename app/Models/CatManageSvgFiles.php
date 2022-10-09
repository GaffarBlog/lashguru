<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatManageSvgFiles extends Model
{
    use HasFactory;
    protected $table = 'cat_manage_svg_files';
    protected $primarykey = 'id';
    protected $fillable = ['svg_file','level_two','level_three'];
}
