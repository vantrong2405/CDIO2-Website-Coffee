<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function pageindexAdmin(){
        return view('indexAdmin');
    }
   public function pageban(){
     return view('pagesAdmin.ban');
   }
   public function pagediem(){
    return view('pagesAdmin.diem-danh');
   }
   public function pagedonhang(){
    return view('pagesAdmin.donhang');
   }
   public function pagelogin(){
    return view('pagesAdmin.login');
   }
   public function pageord(){
    return view('pagesAdmin.ord');
   }
   public function pagequanlykhachhang(){
    return view('pagesAdmin.quanlykhachhang');
   }
   public function pagechuquan(){
    return view('pagesAdmin.quanlydoanhthu.chuquan');
   }
   public function pagequanly(){
    return view('pagesAdmin.quanlydoanhthu.quanly');
   }
   public function pagekho(){
    return view('pagesAdmin.quanlycafe.kho');
   }
   public function pagemon(){
    return view('pagesAdmin.quanlycafe.mon');
   }
   public function pagevattu(){
    return view('pagesAdmin.quanlycafe.vattu');
   }

public function pagenhanvien(){
    return view('pagesAdmin.quanlynhanvien.nhanvien');
}
public function pagephanquyen(){
    return view('pagesAdmin.quanlynhanvien.phanquyen');
}
public function pagequanlyluong(){
    return view('pagesAdmin.quanlynhanvien.quanlyluong');
}
}
