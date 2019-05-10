<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use App\Employee;
use Image;


class AdminController extends Controller
{
    public function create(){

      return view('create');
    }
    public function store(Request $request){
      
          $request->validate([
        'name' => 'required|exists:employees,name',
        'email' => 'required|email|unique:employees,email',
        'dateofbirth' => 'required|date',
        'salary' => 'required|integer|max:20000',

        'thumbnail' => 'required',
         'thumbnail.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

      }
        
    

        
         public function uploadimage(Request $request){
         if($request->hasfile('image'))

         {

            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/thumbnail/', $name);  
                $data[] = $name;  
            }
         }

        $form= new Form();
        $form->filename=json_encode($data);
       }

   public function singleimage(){


      return view('singleimage');
    }

    
    public function singleupload(Request $request){
    
      # code...
     
      $image = $request->file('image');

        $filename = time().'.'.$image->getClientOriginalExtension();

     
   

        $destinationPath = public_path('/thumbnail');

        $img = Image::make($image->getRealPath());

       $img->resize(100, 100, function ($constraint) {

       $constraint->aspectRatio();

    })->save($destinationPath.'/'.$filename);
    $obj=new ImageModel();
    $obj->image=$filename;
    if($obj->save()){
      return redirect()->route('singleshow');
    }



  }
  public function singleshow(){
    $obj=ImageModel::all();
    return view('singleshow',['data'=>$obj]);
  }
      public function multipleimage(){


        return view('multipleimage');
    }

    
    public function multipleupload(Request $request){
      
        foreach ($request->file('image') as $image) {
           // $image = $request->file('image');

            $filename = time().'.'.$image->getClientOriginalExtension();

         
       

            $destinationPath = public_path('/thumbnail');

            $img = Image::make($image->getRealPath());

           $img->resize(100, 100, function ($constraint) {

               $constraint->aspectRatio();

            })->save($destinationPath.'/'.$filename);
            $form=new ImageModel();
            $form->image=$filename;
            if($form->save()){

            }

        }
            return redirect()->route('multipleshow');
        }



    
    public function multipleshow(){
        $form=ImageModel::all();
        return view('multipleshow',['data'=>$form]);
    }
}