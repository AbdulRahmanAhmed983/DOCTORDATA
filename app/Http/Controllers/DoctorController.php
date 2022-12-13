<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Imports\DoctorsImport;
use Excel;
class DoctorController extends Controller
{
    // composer require maatwebsite/excel --ignore-platform-reqs
    public function __construct()
    {
        $this->middleware('auth');
    }

    ################# Begin Crud Operation ####################
    public function index(){
        $id = 0;
        $doctors = Doctor::selections()->get();
        return view('blades.index',compact(['doctors','id']));
    }

    public function showDoctor($id){
        $doctors = Doctor::selections()->find($id);
        if(!$doctors){
            return redirect()->route('blades.edit',$id)->with(['error' => 'Dr.Not Found']);
            } 
        return view('blades.card',compact('doctors'));
    }
    public function AddDoctor(){
        $doctors = Doctor::selections()->get();
        return view('blades.create',compact('doctors'));
    }

    public function StoreDoctor(Request $request){
        try{

            $doctors =  Doctor::selections()->get();
            if(!$doctors)
            return redirect()->route('index')->with(['error' => 'Please Try Again']);
        

        Doctor::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'address' =>$request->address,
            'city' =>$request->city,
            'specialist' =>$request->specialist,
            'phone' =>$request->phone,
            'district' =>$request->district,
            'mobile' => $request->mobile,
            'clinic_number' =>$request->clinic_number,
        ]);
        return redirect()->route('index')->with(['success' => 'Dr.Has Been Added']);
    }catch(\Exception $ex){

        return redirect()->route('index')->with(['error' => 'Please Try Again']);

        }
    }

    public function EditDoctor($id){
        try{
            $doctors = Doctor::selections()->find($id);
              if(!$doctors){
              return redirect()->route('index')->with(['error' => 'Dr.Not Found']);
          }
          return view('blades.edit',compact('doctors'));
      }catch(\Exception $ex){
        return redirect()->route('index')->with(['error' => 'Please Try Again']);
      }
    }

    public function UpdateDoctor($id,Request $request){
        try{
        $doctors = Doctor::selections()->find($id);
        if(!$doctors){
            return redirect()->route('blades.edit',$id)->with(['error' => 'Dr.Not Found']);
            } 
            $data = $request->except('_token','id');
            Doctor::where('id',$id)->update($data);
            return redirect()->route('index')->with(['success' => 'done updated']);
  
         }catch(\Exception $ex){
            return redirect()->route('blades.index')->with(['error' => 'Please Try Again']);

        }
    }
    public function delete($id){
        try {
        $dataStd = Doctor::find($id);
        if (!$dataStd)
        return redirect()->route('blades.edit',$id)->with(['error' => 'Dr.Not Found']);
        $dataStd->delete();
        return redirect()->route('index')->with(['success' => 'Dr.Has Been Deleted']);
        }catch(\Exception $ex){
            return redirect()->route('blades.edit',$id)->with(['error' => 'Dr.Not Found']);
        }
    } 

        ################# END Crud Operation ####################


            ###################### Begin import Excel File ############################

        public function showimportDoctor(){
            return view('blades.import');
        }

        public function storeimportDoctor(Request $request){
                $file = $request->file('file'); 
                if(!$file)
                return redirect()->route('index')->with(['error' => 'Please Import File Excel Again']);
                Excel::import(new DoctorsImport,$file);
                return redirect()->route('index')->with(['success' => 'Excel File Imported Successfully']);
            }

            ###################### END import Excel File ############################

}
