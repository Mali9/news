<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'comment', 'user_id','new_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function news()
    {
        return  $this->belongsTo('App\News');
    }


}
