<?php 
class Home extends Controller
{
    // trên thực tế thì bởi vì trong 1 class có nhiều function thường gọi đến chung 1 model để lấy dữ liệu
    // thành ra lặp đi lặp lại nhiều lần nên cần khai báo biến toàn cục thuộc tính để xài chung trong __contructor
    public $productModel;
    // public $categoryModel;

    public function __construct()
    {
        $this->productModel = $this->model("ProductModel");
        // $this->categoryModel = $this->model("CategoryModel");
    }

    function sayHi()
    {
      echo 'default-homepage';
    }

    function show($a, $b)
    {
        $tong = $this->productModel->tong($a, $b);
        
        $this->view("layoutView", [
            "page"=>"newsView",
            "getProduct"=>$this->productModel->getProduct()
        ]);
    }
}

?>