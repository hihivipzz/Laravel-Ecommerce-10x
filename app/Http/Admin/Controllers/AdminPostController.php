<?php 
    namespace App\Http\Controllers;

    use App\Http\Services\AdminPostService;
    use Illuminate\Routing\Controller as BaseController;

    class AdminPostController extends BaseController{
        protected $adminPostService;

        public function __construct() {
            $this->adminPostService = new AdminPostService();
        }
    }
?>