<?php 
    namespace App\Http\Admin\Controllers;

    
    use App\Http\Admin\Controllers\AdminBaseController;
    use App\Http\Admin\Services\AdminCategoryService;

    class AdminCategoryController extends AdminBaseController{
        protected $adminCategoryService;

        public function __construct() {
            parent::__construct();
            $this->adminCategoryService = new AdminCategoryService();
        }

        public function getCategoryList(){
            return $this->adminCategoryService->getCategoryList();
        }

        public function addCategory(){
            
        }
    }
?>