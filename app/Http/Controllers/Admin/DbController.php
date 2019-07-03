<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据库表的数据
       // $data=DB::select("select * from info");
       // echo '<pre>';
        //var_dump($data);
       //return view("Admin.Db.index",['data'=>$data]);
       //
       //
       //数据库练习
       //查询数据
       
       //$data1 = Db::select("select * from info");
       //
       //插入数据
     // $res=DB::insert("insert into info(name,age)value('anan',18)")
       //dd($res);
       //删除数据
      //$data= DB::delete("delete from info where id=6");
      //删除表
      //DB::statement("drop table php216");
      //dd($data);
      //插入单条数据
      // DB::table('user')->insert(['name'=>'aaa','age'=>12,'sex'=>0]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
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
}
