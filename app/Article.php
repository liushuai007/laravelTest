<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'content', 'author', 'created_at', 'updated_at'];

    public static function index($where = '', $whereClase = '')
    {
        $art = new Article();
        if(!empty($where)){
            $art::where($where,$whereClase);
        }
        return $art::get();

    }

    public static function create($data)
    {
        $art = new Article();

        $art->title = '小钞钞';
        $art->content = '小钞钞不算太傻';
        $art->author = '小钞钞';

        $res = $art->save();

        var_dump($res);
    }
}
