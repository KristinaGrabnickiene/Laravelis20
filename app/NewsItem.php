<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    // Kuri duombazes lentele bus naudojama siam modeliui
    protected $table = 'news';

public function coments(){
//sujungimas :)
//https://laravel.com/docs/5.6/eloquent-relationships
    return $this ->hasMany ("App\Comment", 'news_id', 'id');
}
}
