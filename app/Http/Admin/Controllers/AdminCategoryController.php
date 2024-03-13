<?php 
    namespace App\Http\Admin\Controllers;

    
    use App\Http\Admin\Controllers\AdminBaseController;
use App\Http\Admin\Requests\GetCategoryRequest;
use App\Http\Admin\Services\AdminCategoryService;
    use GuzzleHttp\Psr7\Request;

    class AdminCategoryController extends AdminBaseController{
        protected $adminCategoryService;

        public function __construct() {
            parent::__construct();
            $this->adminCategoryService = new AdminCategoryService();
        }

        public function getCategoryList(GetCategoryRequest $request){
            return $this->adminCategoryService->getCategoryList($request);
        }

        public function addCategory(){
            
        }
    }
?>