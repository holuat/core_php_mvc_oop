<?php 
class api_product extends Controller
{
    function sayHi()
    {
      echo 'hi api_product';
    }
    public function danhsach()
    {
        $model = $this->model("ProductModel");
        $product = $model->getProduct();
        header('Content-Type: application/json');

        // return json for another Device
        
        echo json_encode(array(
            'status'=>200,
            'success'=>true,
            'data'=> json_decode($product, true)
        ));   

        // return view for MVC

        // $this->view("layoutView", [
        //     "page" => "contactView",
        //     "products" => $product
        // ]);
    }

}
class Product
{
    public $id;
    public $product_name;
    public $product_price;
    public $product_quantity;

    public function __construct($id,$product_name,$product_price,$product_quantity)
    {
        $this->id = $id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_quantity = $product_quantity;
    }
}

?>