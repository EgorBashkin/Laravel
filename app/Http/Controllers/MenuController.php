<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
{

    private $menuList = [

        1 =>
            [ 'category' => 'sport'],
        2 =>
            [ 'category' => 'society'],
        3=>
            [ 'category' => 'politics']

    ];


    public function index(){


        $response = '';
        foreach ($this -> menuList as $id => $item){

            $url = route('news::category', ['id' => $id]);
            $response .= " <div >
                    <a href ='{$url}'>
                     {$item['category']}
                    </a>
                     </div>";
        }
        return $response;
    }




    public function category($item){

        $menuUrl = $this ->menuList[$item];
        return $menuUrl['category'];
    }





    /* public function news(){

         $response = '';
         foreach ($this -> $newsList as $id => $item){

             $url = route('news::category', ['id' => $id]);
             $response .= " <div >
                     <a href ='{$url}'>
                      {$item['title']}
                     </a>
                      </div>";
         }
         return $response;




     }

     public function card($id){

         $newsList = $this ->$newsList[$id];
         return $newsList ['title'];
     }
 */







}
