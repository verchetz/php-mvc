<?php

namespace programmer\belajar\php\MVC\Controller;

class ProductController{
    function categories($productID, $categoryID){
        echo "Product $productID, Category: $categoryID";
    }
}