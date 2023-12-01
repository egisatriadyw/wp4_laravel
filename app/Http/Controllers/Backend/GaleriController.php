<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Str;

use App\Models\GaleriModel;

class GaleriController extends Controller
{

    public function admin_galeri(Request $request) 
    {
        $data['galeriRecord'] = GaleriModel::all();
        return view('backend.galeri.list', $data);
    }
    public function galeri_add(Request $request) 
    {
       return view('backend.galeri.add');
    }

    public function galeri_add_post(Request $request) 
    {
       //dd($request->all());
       $insertRecord = new GaleriModel;
       $validator = Validator::make($request->all(), [
        'image' => 'required|image',
        'deskripsi' => 'required|string|max:255',
        ]);
        
        if ($validator->fails()) {
            return redirect('admin/galeri/add')
                ->withErrors($validator)
                ->withInput();
        }

       $insertRecord->deskripsi = trim($request->deskripsi);
       

       if (!empty($request->file('image'))) {


        $file       = $request->file('image');
        $randomStr  = Str::random(30);
        $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
        $file->move('public/galeri/', $filename);
        $insertRecord->image = $filename;
    }
    $insertRecord->save();

    return redirect('admin/galeri')->with('success', "Galeri Page Successfully Save");

    
    }
    public function admin_galeri_edit($id, Request $request)
    {
        $data['galeriRecord'] = GaleriModel::find($id);
        return view('backend.galeri.edit', $data);
    }
    

    public function admin_galeri_edit_post($id, Request $request)
    {
        // dd($request->all());
        $updateRecord = GaleriModel::find($id);

        $updateRecord->deskripsi = trim($request->deskripsi);

        if(!empty($request->file('image')))
        {

            if(!empty($updateRecord->image)&&file_exists('public/galeri/'.$updateRecord->image)){
                unlink('public/galeri/'.$updateRecord->image);
            }
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/galeri/', $filename);
            $updateRecord->image = $filename;
        }
        $updateRecord->save();

        return redirect('admin/galeri')->with('success', "Galeri Page Successfully Update");
 


    }

    public function admin_galeri_delete($id)
    {
        GaleriModel::where('id', $id)->delete(); 
        return redirect()->to('admin/galeri')->with('success', 'Galeri Berhasil melakukan delete data'); 
    }
    
}