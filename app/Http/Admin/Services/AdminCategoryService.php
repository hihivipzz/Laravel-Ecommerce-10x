<?php
    namespace App\Http\Admin\Services;

use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;
use Dotenv\Exception\ValidationException;

    class AdminCategoryService{
        public function getCategoryList(){
            $categories = Category::all();

            return view('admin.dashboard');
        }

        public function addCategory(CreateCategoryRequest $request){
            try{
                $category = new Category();
                $category->name = $request->input('name');
                $result = $category->save();
                if($result){
                    //redirect
                }else{
                    //redirect
                }
                
            }catch(ValidationException $e){
                //redirect
            }
            
        }
    }
?>