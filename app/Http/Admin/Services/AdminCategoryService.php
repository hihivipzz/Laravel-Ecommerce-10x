<?php
    namespace App\Http\Admin\Services;

use App\Http\Admin\Requests\GetCategoryRequest;
use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;
use Dotenv\Exception\ValidationException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;

    class AdminCategoryService{
        public function getCategoryList(GetCategoryRequest $request){
            $search='';
            $page = 1;
            $perpage = 5;
            if($request != null){
                if ($request->has('search')) {
                    $search = $request->input('search');
                }
    
                if ($request->has('page')) {
                    $page = $request->input('page');
                }
            }
            $searchCategories = Category::where('name', 'like', '%' . $search . '%')->get();
            $categories = Category::where('name', 'like', '%' . $search . '%')
                           ->paginate($perpage, ['*'], 'page', $page);
            $viewData = [
                'categories'=>$categories,
                'search'=>$search, 
                'page'=>$page,
                'perPage'=>$perpage,
                'total'=>count($searchCategories)];
            return view('admin.categoryInfo',$viewData);
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