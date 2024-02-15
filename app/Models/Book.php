<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    //protected $fillable = ['title', 'original_title', 'cover', 'slug', 'editor', 'translator', 'print', 'isbn', 'summary', 'pages', 'format_id', 'type_id', 'form_id', 'author_id', 'language_id', 'origin_id', 'publisher_id', 'period_id', 'year_id', 'genre_id'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
                $query
                    ->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('original_title', 'like', '%' . request('search') . '%')
                    ->orWhere('editor', 'like', '%' . request('search') . '%')
                    ->orWhere('print', 'like', '%' . request('search') . '%')
                    ->orWhere('translator', 'like', '%' . request('search') . '%')
                    ->orWhere('isbn', 'like', '%' . request('search') . '%')
                    ->orWhere('summary', 'like', '%' . request('search') . '%');
        };

        if($filters['type'] ?? false) {
            $query->where('type', 'like', '%' . request('type') . '%');
        }

        $query->when($filters['format'] ?? false, fn($query, $format) =>
            $query->whereHas('format', fn ($query) =>
                $query->where('slug', $format)

        ));

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn ($query) =>
                $query->where('slug', $author)
        ));
    }
    //Relationship to author
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
    //Relationship to genre
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
    //Relationship to author
    public function keyword()
    {
        return $this->belongsToMany(Keyword::class);
    }
    //Relationship to language
    public function Language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
    //Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //Relationship to form
    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id');
    }
    //Relationship to format
    public function format()
    {
        return $this->belongsTo(Format::class, 'format_id');
    }
    //Relationship to origin
    public function origin()
    {
        return $this->belongsTo(Origin::class, 'origin_id');
    }
    //Relationship to period
    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }
    //Relationship to publisher
    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }
    //Relationship to type
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
    //Relationship to year
    public function year()
    {
        return $this->belongsTo(Year::class, 'year_id');
    }

}

// hasOne, hasMany, belongsTo, belongsToMany
