<?php 
    namespace App\Http\Admin\Controllers;

    use App\Http\Admin\Services\AdminProductService;
    use Illuminate\Routing\Controller as BaseController;

    class AdminProductController extends BaseController{
        protected $adminProductService;

        public function __construct() {
            $this->adminProductService = new AdminProductService();
        }

        public function getProductList(){
            return $this->adminProductService->getProductList();
        }
    }
?>