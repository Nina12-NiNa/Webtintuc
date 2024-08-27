<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;
use App\Models\LoaiTin;
use App\Models\User;

class ThongKeController extends Controller
{
    public function index()
    {
        // Đếm số lượng tin
        $soLuongTin = Tin::count();

        // Đếm số lượng loại tin
        $soLuongLoaiTin = LoaiTin::count();

        // Đếm số lượng khách hàng (người dùng)
        $soLuongKhachHang = User::count();

        // Truyền dữ liệu tới view
        return view('backend.thongke', compact('soLuongTin', 'soLuongLoaiTin', 'soLuongKhachHang'));
    }
}

