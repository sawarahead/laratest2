<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function foo($searchtext)
    {
        $results = Post::Where('body','LIKE',"%{$searchtext}%")->get();
        return $results;
    }
}
