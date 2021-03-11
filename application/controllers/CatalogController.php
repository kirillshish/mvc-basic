<?php

namespace application\controllers;

use application\core\Controller;

class CatalogController extends Controller
{

    public function showAction()
    {
        $products = $this->model->getProduct();
        $laptops = [];
        $phones = [];
        $games = [];
        $photos_videos = [];
        foreach($products as $product){
            if($product['category_name']=='Laptops'){
                $laptops[] = $product;
            }
            elseif($product['category_name']=='Phones'){
                $phones[] = $product;
            }
            elseif($product['category_name']=='Games'){
                $games[] = $product;
            }
            elseif($product['category_name']=='Photo/Video'){
                $photos_videos[] = $product;
            }
        }
        $vars = [
            'laptops'=>$laptops,
            'phones'=>$phones,
            'games'=>$games,
            'photos_videos'=>$photos_videos,
        ];
        $this->view->render('Каталог',$vars);
    }

    public function categoryAction()
    {
        $this->view->render('Категории');
    }

    public function productAction()
    {
        $this->view->render('Товар');
    }

}