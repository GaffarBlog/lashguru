<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatManageSvgFile extends Model
{
    use HasFactory;
    protected $fillable = ['cat_manage_svg_file_id', 'title', 'width_in_px', 'height_in_px', 'content_type'];

    public function svg_category(){
        return $this->belongsTo(CatManageSvgFiles::class, 'cat_manage_svg_file_id');
    }
}
