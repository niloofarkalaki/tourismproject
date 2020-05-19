<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Post extends Model implements Searchable
{
    protected $guarded =[]; 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    

    public function getSearchResult(): SearchResult
    {
        $url = route('posts.show', $this->id);

        return new SearchResult(
            $this,
            $this->caption,
            $url
         );
    }
}
