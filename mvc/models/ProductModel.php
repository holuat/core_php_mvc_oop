<?php 
    class ProductModel extends DB
    {
        public function Tong($m, $n)
        {
            return $m + $n;
        }

        public function getProduct()
        {
            $query = "select * from product";
            $rows = mysqli_query($this->con, $query);
            $mang = array();

            while($row = mysqli_fetch_assoc($rows)){
                $mang[] = $row;
            }
            return json_encode($mang, JSON_UNESCAPED_UNICODE);
        }
    }

?>