<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin; // Sử dụng tên lớp đúng

class TinController extends Controller
{
    public function index()
    {
        return view("home");
    }
    

    public function chitiet($id = 0)
    {
        $tin = Tin::find($id); // Sử dụng mô hình để tìm bản ghi
        $data = ['id' => $id, 'tin' => $tin];
        $data = Tin::orderBy('ngayDang', 'desc')->get();
        return view("chitiet", $data);
    }

    

    public function tintrongloai($idLT = 0)
    {
        $listtin = Tin::where('idLT', $idLT)->get(); // Sử dụng mô hình để lấy danh sách tin
        $data = Tin::orderBy('ngayDang', 'desc')->get();
        $data = ['idLT' => $idLT, 'listtin' => $listtin];
        
        return view("tintrongloai", $data);
    }

    public function danhsach()
    {
        $data = Tin::all();
        // $data = Tin::orderBy('idLT', 'desc')->get();
        return view('backend.danhsach', ['data' => $data]);
    }

    public function them()
    {
        return view("backend/themtin");
    }

    public function them_(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'tieuDe' => [
                'required',
                'string',
                'max:255',
                // Custom validation rule to check for duplicate titles
                function ($attribute, $value, $fail) {
                    if (Tin::where('tieuDe', $value)->exists()) {
                        $fail('Tiêu đề này đã tồn tại.');
                    }
                }
            ],
            'tomTat' => 'required|string|max:500',
            'file' => 'required|string|',
            'idLT' => 'required|integer',
            'noiDung' => 'required|string',
            'ngayDang' => 'required|date',
            'xem' => 'required|integer',
        ]);

        // Format the date and handle potential exceptions
        try {
            $formattedDate = date('Y-m-d', strtotime($validated['ngayDang']));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['ngayDang' => 'Ngày không hợp lệ'])->withInput();
        }

        // Create and save the new news item
        $t = new Tin;
        $t->tieuDe = $validated['tieuDe'];
        $t->tomTat = $validated['tomTat'];
        $t->file = $validated['file'];
        $t->idLT = $validated['idLT'];
        $t->noiDung = $validated['noiDung'];
        $t->ngayDang = $formattedDate;
        $t->xem = $validated['xem'];
        $t->save();

        // Redirect with a success message
        return redirect()->route('backend.danhsach')->with('success', 'Tin đã được thêm thành công!');
    }

    function xoa($id)
    {
        $t = Tin::find($id);
        if ($t == null) return redirect('/thongbao');
        $t->delete();
        return redirect('/backend/danhsach');
    }
    public function capnhaptin($id)
    {
        $t = Tin::find($id);
        if ($t == null)
            return redirect('/thongbao');
        return view('backend/capnhaptin', ['tin' => $t]);
    }
    public function capnhaptin_($id, Request $request)
    {
        // Find the Tin record by id
        $t = Tin::find($id);
        if ($t == null) {
            return redirect('/thongbao');
        }
        $validatedData = $request->validate([
            'tieuDe' => [
                'required',
                'string',
                'max:255',
                // Custom validation rule to check for duplicate titles
                function ($attribute, $value, $fail) use ($id) {
                    if (Tin::where('tieuDe', $value)->where('id', '!=', $id)->exists()) {
                        $fail('Tiêu đề này đã tồn tại.');
                    }
                }
            ],
            'tomTat' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png|max:2000',
            'idLT' => 'required|integer',
            'noiDung' => 'required|string',
            'ngayDang' => 'required|date',
            'xem' => 'required|integer|min:0',
        ], $this->messages());

        // Assign the validated inputs to the Tin object
        $t->tieuDe = $validatedData['tieuDe'];
        $t->tomTat = $validatedData['tomTat'];
        $t->idLT = $validatedData['idLT'];
        $t->noiDung = $validatedData['noiDung'];
        $t->ngayDang = $validatedData['ngayDang'];
        $t->xem = $validatedData['xem'];


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads', $filename, 'public');
            $t->file = $filename; // Store filename in database
        }


        $t->save();

        // Redirect to the danhsach route
        return redirect()->route('backend.danhsach');
    }

    protected function messages()
    {
        return [
            'tieuDe.required' => 'Tiêu đề là bắt buộc.',
            'tieuDe.string' => 'Tiêu đề phải là chuỗi.',
            'tieuDe.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'tomTat.required' => 'Tóm tắt là bắt buộc.',
            'tomTat.string' => 'Tóm tắt phải là chuỗi.',
            'file.file' => 'Tập tin không hợp lệ.',
            'file.mimes' => 'Tập tin phải là định dạng jpg, jpeg, hoặc png.',
            'file.max' => 'Tập tin không được lớn hơn 7MB.',
            'idLT.required' => 'Loại tin là bắt buộc.',
            'idLT.integer' => 'Loại tin phải là số nguyên.',
            'noiDung.required' => 'Nội dung là bắt buộc.',
            'noiDung.string' => 'Nội dung phải là chuỗi.',
            'ngayDang.required' => 'Ngày đăng là bắt buộc.',
            'ngayDang.date' => 'Ngày đăng không hợp lệ.',
            'xem.required' => 'Số lượt xem là bắt buộc.',
            'xem.integer' => 'Số lượt xem phải là số nguyên.',
            'xem.min' => 'Số lượt xem phải lớn hơn hoặc bằng 0.',
        ];
    }
    


    public function show($id)

{
    $tin = Tin::findOrFail($id);
    $tin->increment('xem');
    $relatedNews = Tin::where('idLT', $tin->idLT)
                      ->where('id', '!=', $id)
                      ->take(4)
                      ->get();

    return view('chitiet', compact('tin', 'relatedNews'));
}

    
public function search(Request $request)
{
    $keyword = $request->input('keyword');

    $results = Tin::whereHas('loaitin', function ($query) use ($keyword) {
                        $query->where('tenLT', 'LIKE', "%{$keyword}%");
                    })
                    ->orWhere('tieuDe', 'LIKE', "%{$keyword}%")
                    ->orWhere('tomTat', 'LIKE', "%{$keyword}%")
                    ->orderBy('ngayDang', 'desc')
                    ->get();
    
    return view('search', compact('results', 'keyword'));
}
}
