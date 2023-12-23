<?php
namespace App\Interfaces\api;
use Illuminate\Http\Request;

interface ProductInterface {
    public function all();
    public function getproductbyid($id);


}

?>
