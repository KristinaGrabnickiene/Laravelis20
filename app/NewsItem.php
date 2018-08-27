<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    // Kuri duombazes lentele bus naudojama siam modeliui
    protected $table = 'news';
}
