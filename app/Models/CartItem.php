<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['content_id', 'quantity'];

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id', 'ID_KONTEN');
    }
}
