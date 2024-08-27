<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiTin;

class LoaiTinController extends Controller
{
    public function loaitin()
    {
        $data = LoaiTin::all();
        return view('backend.loaitin', ['data' => $data]);
    }
    public function them(){
        return view("backend/themlt");
    }
    public function them_(Request $request){
        $lt = new LoaiTin;
        $lt->tenLT = $_POST['tenLT'];
        $lt->save();
        return redirect('backend/loaitin');
    }
    function xoa($idLT){
        $lt = Loaitin::find($idLT);
        if ($lt==null) return redirect('/thongbao');
        $lt->delete();
        return redirect('/backend/loaitin');
    }

    
}
