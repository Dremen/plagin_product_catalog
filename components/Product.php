<?php namespace Sydonios\Product\Components;

use Cms\Classes\ComponentBase;

use function MongoDB\BSON\toJSON;

class Product extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Компонент Товар',
            'description' => 'Вывод товара'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {

        $slug = $this->page['slug'] = $this->param('slugProduct');
        if (isset($slug) && $slug) {
            $card = $this->page['card'] = \Sydonios\Product\Models\Product::where('slug', $slug)->with('product_photo', 'note_photo', 'photos_end_articles')->first();
        }else{
            $this->page['products'] = \Sydonios\Product\Models\Product::all();
        }

        $basketdropdon = array(
            [
                'name' => 'Бокал l’Universel',
                'pack' => 'Упаковка состоит из 2 штук',
                'count' => '1',
                'price' => '6990'
            ],
            [
                'name' => 'Бокал l’Universel',
                'pack' => 'Упаковка состоит из 2 штук',
                'count' => '1',
                'price' => '6990'
            ]);

        $basketlist = array(
            [
                'name' => 'Бокал l’Universel',
                'pack' => array(
                    [
                        'text' => 'pack 1',
                        'price' => '6990'
                    ]),

            ],
            [
                'name' => 'Бокал l’Universel',
                'pack' => array(
                    [
                        'text' => 'pack 1',
                        'price' => '6990'
                    ]),

            ]
        );
        $this->page['basketList'] = $basketdropdon;
    }


//        $client = new Client();
//        $response = $client->request('GET', "http://localhost/sydonios/public/api/products");
//        $response = \GuzzleHttp\json_decode($response->getBody());


        // $this->page['product'] = $response->data;

//        $this->page['basketList'] = $basketlist;


//    public function onUpdateBasket()
//    {
//        $data = post();
//
//
//        Session::put('key', $data);
//        $this->page['test'] = Session::get('key');
//
//        //рендер
//        $content = ['basketDropdown' => $this->renderPartial('basketDropdown'), 'basketList' => $this->renderPartial('basketList')];
//        return Response::make($content, 200);
//    }


}
