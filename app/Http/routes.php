<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Polaroidコントローラをルートで登録
Route::get('/polaroid', 'PolaroidController@index');

Route::get('/sakura', function() {
    $data = Twitter::query('search/tweets', 'GET', array(
	//'q' => "LinQ100面相 from:@araki_sakura filter:images", 
	'q' => 'from:araki_sakura filter:images', 
	'lang' => 'ja', 
	'locale' => 'ja', 
	//'result_type' => 'popular',
	//'include_entities' => true,
	'count' => 100,
	'format' => 'json'
    ));
    // オブジェクトを配列に変換
    $tweets = json_decode($data, true);

    //Twitter標準の画像添付機能（p.twimg.comというアドレスのやつ）
    $images = [];
    foreach($tweets['statuses'] as $tweet) {
	array_push($images, $tweet['entities']['media'][0]['media_url_https']);
    }



// ツイート検索パラメータの設定、「q」は検索文字列、「count」は取得件数（最大100件）
    $params = array(
	//'q' => "LinQ100面相 from:@araki_sakura filter:images", 
	'q' => 'from:araki_sakura filter:images', 
	'lang' => 'ja', 
	'locale' => 'ja', 
	//'result_type' => 'popular',
	'include_entities' => true,
	'count' => 100,
	'format' => 'json'
    );
 
// リクエスト回数
$request_number = 10;
 
$tweet_texts = array();
$tweet_images = array();

for ($i = 0; $i < $request_number; $i++) {
 
    // ツイート検索実行
    echo $params['count'] * $i + 1 . " - " . $params['count'] * ($i + 1) . " 件目取得中\n";
    $tweets_obj = Twitter::query('search/tweets', 'GET', $params);
 
    // オブジェクトを配列に変換
    $tweets_arr = json_decode($tweets_obj, true);
 
    // ツイート本文を抽出
    //Twitter標準の画像添付機能（p.twimg.comというアドレスのやつ）
    for ($j = 0; $j < count($tweets_arr['statuses']); $j++) {
        $tweet_texts[] = $tweets_arr['statuses'][$j]['text'];
	$tweet_images[] = $tweets_arr['statuses'][$j]['entities']['media'][0]['media_url_https'];
    }
 
    // 先頭の「?」を除去
    // $next_results = preg_replace('/^\?/', '', $tweets_arr['search_metadata']['next_results']);
 
    // next_results が無ければ処理を終了
    // if (!$next_results) {
    //    break;
    // }
 
    // パラメータに変換
    // parse_str($next_results, $params);
}





    return view('index')->with('tweets', $tweet_images);
});
