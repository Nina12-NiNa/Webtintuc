<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    // Đặt tên bảng
    protected $table = 'loaitin';

    // Đặt cột khóa chính
    protected $primaryKey = 'idLT';

    // Đặt cột khóa chính không tự động tăng (nếu cần)
    public $incrementing = true; // Đặt thành false nếu khóa chính không phải là số nguyên tự động tăng

    // Không sử dụng timestamps (created_at, updated_at)
    public $timestamps = false;

    // Các cột có thể được gán hàng loạt
    protected $fillable = [
        'idLT',
        'tenLT',
    ];
}

