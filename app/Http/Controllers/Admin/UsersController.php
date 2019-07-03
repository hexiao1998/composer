<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;
use App\Http\Requests\UsersInsertRequest;
use App\Models\Userss; 
use A;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       // dd($data);
        //获取搜索参数
        $k=$request->input("keyword");
        $kk=$request->input("keywords");
        //var_dump($k);
        //获取列表数据
        // echo "555";
        // 
        $data=Userss::where("username","like","%".$k."%")->where("email","like","%".$kk."%")->paginate(2);
        return view("Admin.Users.index",['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加模板
        return view("Admin.Users.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersInsertRequest $request)
    {
        // dd($request->all());
        $data=$request->except(['repassword','_token']);
        $data['password']=Hash::make($data['password']);
        $data['status']=1;
        //dd($data);
        if(Userss::create($data)){
            return redirect("/adminusers")->with("success","添加成功");
        }else{
            return back()->with("error","添加失败");
        }
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
        //修改数据
        $data=Userss::find($id);
        return view("Admin.Users.edit",['data'=>$data]);
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
        $data=$request->except(['_token','_method']);
        if(Userss::where("id","=",$id)->update($data)){
            return redirect("/adminusers")->with("success","修改成功");
        }else{
            return back("/adminusers/$id/eidth")->with("error","修改失败");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除
        if(Userss::where("id","=",$id)->delete()){
            return redirect("/adminusers")->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }
    public function a(){
       pay(); 
    }
     public function b(){
       $a = new A();
       $a->sends(); 
    }
}
