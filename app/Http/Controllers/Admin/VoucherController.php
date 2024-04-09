<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
use Validator;
use Str;
use Auth;

class VoucherController extends Controller
{
    public function index(){

        $data = [
            'title' => 'Mã giảm giá',
            'vouchers' => Voucher::all()->sortBy('DESC')
        ];

        return view('admin.voucher.index', $data);
    }

    public function create(){
        return view('admin.voucher.create', ['title' => 'Thêm mã giảm giá']);
    }

    public function save(Request $request){
        $validator = Validator($request->all(), [
            'name' => 'required|unique:vouchers',
            'code' => 'required|unique:vouchers',
            'value' => 'required|integer',
        ]);

        if($validator->fails()){
            return redirect()->route('voucherCreate')->withErrors($validator)->withInput();
        }else{
            Voucher::create([
                'name' => $request->name,
                'code' => $request->code,
                'value' => $request->value
            ]);

            return redirect()->route('vouchers');
        }
    }

    public function delete($name){
        $voucher = Voucher::where('name', $name)->first();


        Voucher::destroy($voucher->id);
        return redirect()->route('vouchers')->with('success', 'Data voucher deleted');
    }

    public function edit($name){
        $voucherData = Voucher::where('name', $name)->first();

        $data = [
            'voucher' => $voucherData,
            'title' => 'Chỉnh sửa mã giảm giá'. str_replace('-', ' ', $name)
        ];

        return view('admin.voucher.edit', $data);
    }

    public function editSave(Request $request, $voucher, $id){

        $validator = Validator($request->all(), [
            'name' => 'required',
            'code' => 'required',
            'value' => 'required|integer',
        ]);

        if($validator->fails()){
            return redirect()->route('voucherEdit', ['product' => $request,'id' => $id])->withErrors($validator)->withInput();
        }else{
            Voucher::where('id', $id)->update([
                'name' => $request->name,
                'code' => $request->code,
                'value' => $request->value,
            ]);

            return redirect()->route('voucherEdit', $request->name)->with('success', 'Data updated');
        }
    }
}
