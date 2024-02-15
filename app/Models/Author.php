<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
