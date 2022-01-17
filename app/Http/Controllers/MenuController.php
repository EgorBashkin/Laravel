<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
{

    private $menuList = [

        1 =>
            [ 'section' => 'Sport'],
        2 =>
            [ 'section' => 'Society'],
        3=>
            [ 'section' => 'Politics']

    ];
    public function index(){


        $response = '';
        foreach ($this -> menuList as $id => $item){

            $url = route('news::cardMenu', ['id' => $id]);
            $response .= " <div >
                    <a href ='{$url}'>
                     {$item['section']}

                    </a>
                     </div>";
        }
        return $response;
    }

   public function Category($id){


       $menuList = $this->menuList[$id];

       return $menuList ['section'];
    }


}
