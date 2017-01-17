<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user as user;
use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user :: where('id', 1)
                ->orderBy('id','desc')
                ->take(10)
                ->get();

        echo '<pre>';
        var_dump($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::insert('insert into `users` (`name`,`email`,`created_at`,`updated_at`) values ("钞钞","1436091534@qq.com","' . date('Y-m-d H:i:s') . '", "' . date('Y-m-d H:i:s') . '")');
        return '数据添加成功';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        DB::update("update users set name = ? where id = ?", ['赵四', 1]);
        return '数据修改成功';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete()
    {
        DB::delete("delete from users where id = ?",[1]);
        return '数据删除成功';
    }

    public function turnCate()
    {
        DB::select("TURNCATE table `users`");
        return '数据表清空成功';
    }
}
