<?php
namespace App\Interfaces\api;
use Illuminate\Http\Request;

interface CategoryInterface {
    public function all();
    public function getcategorybyid($id);


}

?>
