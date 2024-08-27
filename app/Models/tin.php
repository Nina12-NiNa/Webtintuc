<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory; // Thêm HasFactory nếu bạn sử dụng factories

    protected $table = 'tin'; // Tên bảng
    protected $primaryKey = 'id'; // Khóa chính

    // Loại bỏ $data vì không cần thiết
    // protected $data =['ngayDang']; 

    protected $fillable = [
        'tieuDe',
        'tomTat',
        'urlHinh',
        'ngayDang',
        'noiDung',
        'idLT',
        'xem',
        'noiBat',
        'anHien',
        'tags',
        'lang',
    ];
    public function loaiTin()
{
    return $this->belongsTo(LoaiTin::class, 'idLT');
}


}