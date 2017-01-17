<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'content', 'author', 'created_at', 'updated_at'];

    public function index($where = '')
    {
        $art = new Article();

        $art->title = '小钞钞';
        $art->content = '小钞钞不算太傻';
        $art->author = '小钞钞';

        $res = $art->save();

        var_dump($res);
    }
}
