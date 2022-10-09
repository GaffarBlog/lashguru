<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadImage extends Model
{
    use HasFactory;
    protected $table = 'upload_images';
    protected $primarykey = 'id';
    protected $fillable = ['filename', 'tumb', 'keywords', '2400x1440', '2400x1000', '2400x750', '2400x500', '600x600', '450x600'];
}
