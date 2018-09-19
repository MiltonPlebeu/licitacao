<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function gritar()
   {
   	return view ('gritar');
   } 

   public function gritarMultiplo($numero)
   {
 	$as = str_repeat('a', $numero);  	
   	return "grit{$as}r!";
   } 

}
