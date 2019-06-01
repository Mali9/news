<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'title', 'body','image', 'user_id','cat_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function cat()
    {
        return  $this->belongsTo('App\Cat');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    public function testDatabase()
    {
        $user = factory(App\News::class,100)->make();

        // Use model in tests...
    }

}
