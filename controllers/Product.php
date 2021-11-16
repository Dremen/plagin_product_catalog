<?php namespace Sydonios\Product\Controllers;

use BackendMenu;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use Backend\Classes\Controller;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;


/**
 * Product Back-end Controller
 */
class Product extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();


        BackendMenu::setContext('Sydonios.Product', 'product', 'product');
    }

//    public function index(){
//
//
//
//        $client = new Client();
//        $response = $client->request('GET', "http://localhost/sydonios/public/api/products");
//        $response = \GuzzleHttp\json_decode($response->getBody());
//
//        Db::delete('delete from sydonios_product_products');
//
//        foreach($response->data as $test){
//            $data = new \Sydonios\Product\Models\Product;
//            $data->id = $test->id;
//            $data->name = $test->product_name;
//            $data->save();
//        }
//
//        $this->asExtension('ListController')->index();
//    }

}
