<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Str;

use App\Models\AboutModel;

class AboutController extends Controller
{

    public function admin_about(Request $request) 
    {
        $data['aboutRecord'] = AboutModel::all();
        return view('backend.about.list', $data);
    }
    public function admin_about_post(Request $request) 
        {
            $aboutModelCount = AboutModel::count();
            Validator::extend('valid_birth_year', function ($attribute, $value, $parameters, $validator) {
                $year = date('Y', strtotime($value));
                return $year >= 1960; // Tahun minimal adalah 1960
            });
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
                'last_name'  => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
                'date_of_birth' => 'required|date|valid_birth_year', 
                'gender' => 'required|in:Pria,Laki-Laki,Wanita,Perempuan,Boy,Girl,Woman,Men', 
                'nationality' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
                'address' => 'required|string|max:255',
                'phone' => 'required|string|max:13|regex:/^[0-9\s]+$/',
                'email' => 'required|email|max:255', 
                'languages' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/', 
            ]);
            
            if ($validator->fails()) {
                return redirect('admin/about')
                    ->withErrors($validator)
                    ->withInput();
            }
            

            if ($aboutModelCount === 0) {
                $insertRecord = new AboutModel;
            } else {
                if ($request->add_to_update == "Add") {
                    $insertRecord = request()->validate([
                        'first-name' => 'required'
                    ]);
                } else {
                    $insertRecord = AboutModel::find($request->id);
                }
            }

            $insertRecord->first_name = trim($request->first_name);
            $insertRecord->last_name = trim($request->last_name);
            $insertRecord->date_of_birth = trim($request->date_of_birth);
            $insertRecord->gender = trim($request->gender);
            $insertRecord->nationality = trim($request->nationality);
            $insertRecord->address = trim($request->address);
            $insertRecord->phone = trim($request->phone);
            $insertRecord->email = trim($request->email);
            $insertRecord->languages = trim($request->language);
            $insertRecord->save();

            return redirect()->back()->with('success', "About Page Successfully Save");
        }

    
    public function admin_about_delete($id)
    {
        AboutModel::where('id', $id)->delete(); 
        return redirect()->to('admin/about')->with('success', 'Berhasil melakukan delete data'); 
    }

}