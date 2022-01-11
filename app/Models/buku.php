<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    public function image()
    {
        if ($this->cover && file_exists(public_path('image/buku/' . $this->cover))) {
            return asset('image/buku/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/buku/' . $this->cover))) {
            return unlink(public_path('image/buku/' . $this->cover));
        }
}
}
