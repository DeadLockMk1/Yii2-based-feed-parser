<?php
/**
 * Created by PhpStorm.
 * User: F@N
 * Date: 11.10.2015
 * Time: 0:21
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
//use app\components\SimplePie;

class FeedParserController extends Controller
{
    public function actionIndex()
    {
        $this->render('index', [
            'defaultFeedUrl'=>'127.0.0.1/rss',
        ]);
    }

    public function actionGetFeed()
    {
//        $request = Yii::$app->request;
//        $url = $request->post('feedUrl');
//        $limit = $request->post('limit');
//        $feed = new SimplePie();
//        $feed->set_feed_url($url);
//        $feed->enable_cache(false);
//        $feed->init();
//        $items=$feed->get_items(0, $limit);
//        var_dump($items);
//        foreach ($items as $item) {
//            $data_arr = array();
//            $data_arr['hash'] = md5($item->get_id()); // md5(id)
//            $data_arr['name'] = $item->get_title();
//            $data_arr['link'] = $item->get_permalink();
//            $data_arr['date'] = $item->get_date('Y-m-d H:i:s');
//            //----------------------alias---------------------------------------
//            $alias = $item->get_title();
//            $data_arr['alias'] = ($alias) ? $alias : 'origami-model';
//            //-----------------------вложения-----------------------------------
//            $data['enclosures'] = $item->get_enclosures();
//
//            //-------------------изображение------------------------------------
//            $img_url = $item->get_content();
//            if ($data['enclosures'][0]) {
//                $data_arr['image_big'] = $data['enclosures'][0]->link;
//                $data_arr['width'] = $data['enclosures'][0]->width;
//                $data_arr['height'] = $data['enclosures'][0]->height;
//            }
//            var_dump($data_arr);
//        }
    }
}