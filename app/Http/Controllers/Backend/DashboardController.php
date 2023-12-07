<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomeModel;
use Illuminate\Support\Facades\Validator;
use Str;


class DashboardController extends Controller
{
    public function dashboard(Request $request) 
    {
        $data['homeRecord'] = HomeModel::all();
        return view('backend.dashboard.list');
    }
    public function admin_home(Request $request) 
    {
        $data['homeRecord'] = HomeModel::all();
        return view('backend.home.list', $data);
    }
    public function admin_home_post(Request $request)
    {
        $homeModelCount = HomeModel::count();
        $validator = Validator::make($request->all(), [
            'your_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'work_experience' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'description' => 'required|string|max:255',
            'profile' => 'required|image' 
        ]);
        
        if ($validator->fails()) {
            return redirect('admin/home')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($homeModelCount === 0) {
            $insertRecord = new HomeModel;
        } else {
            if ($request->add_to_update == "Add") {
                $insertRecord = request()->validate([
                    'profile' => 'required'
                ]);
            } else {
                $insertRecord = HomeModel::find($request->id);
            }
        }
        
        

        
        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->work_experience = trim($request->work_experience);
        $insertRecord->description = trim($request->description);

        if (!empty($request->file('profile'))) {

            if (!empty($insertRecord->profile) && file_exists('public/storage/imgs/'. $insertRecord->profile)) {
                unlink('public/storage/imgs/'. $insertRecord->profile);
            }

            $file       = $request->file('profile');
            $randomStr  = Str::random(30);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/imgs/', $filename);
            $insertRecord->profile = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', "Home Page Successfully Save");
    }

    public function admin_home_delete($id)
    {
        HomeModel::where('id', $id)->delete(); 
        return redirect()->to('admin/home')->with('success', 'Berhasil melakukan delete data'); 
    }

}