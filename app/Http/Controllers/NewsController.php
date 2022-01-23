<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class NewsController extends BaseController
{

    private $news = [
        1 => [
            'title' => '<h2>News 1</h2>',
            'text' => '<p>Some text</p> '
        ],
        2 => [
            'title' => '<h2>News 2</h2>',
            'text' => '<p>Some text</p> '
        ],
        3 => [
            'title' => '<h2>News 3</h2>',
            'text' => '<p>Some text</p> '
        ]
    ];
    public function index(){

        $response = '';
        foreach ($this -> news as $id => $item){

            $url = route('news::Catalog', ['id' => $id]);
            $response .= " <div>
                    <a href ='{$url}'>
                       {$item['title']}

                    </a>
                     </div>";
        }
        return $response;
    }

    public function card($id){


        $news = $this->news[$id];

        return $news['title'] ;
    }


}
