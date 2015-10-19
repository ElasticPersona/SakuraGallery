<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Thujohn\Twitter\Facades\Twitter as Twitter;
use Vinkla\Instagram\Facades\Instagram as Instagram;

class GalleryBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $twitterId
     * @return Response
     */
    public function show($twitterId)
    {

        // ツイート検索パラメータの設定、「q」は検索文字列、「count」は取得件数（最大100件）
        $params = array(
            'q' => 'from:'.$twitterId.' filter:images',
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
            //echo $params['count'] * $i + 1 . " - " . $params['count'] * ($i + 1) . " 件目取得中\n";
            $tweets_obj = Twitter::query('search/tweets', 'GET', $params);

            // オブジェクトを配列に変換
            $tweets_arr = json_decode($tweets_obj, true);

            // ツイート本文を抽出
            for ($j = 0; $j < count($tweets_arr['statuses']); $j++) {
                $tweet_texts[] = $tweets_arr['statuses'][$j]['text'];
                $tweet_images[] = $tweets_arr['statuses'][$j]['entities']['media'][0]['media_url_https'];
            }

            // next_results が無ければ処理を終了
            if (!isset($tweets_arr['search_metadata']['next_results'])) {
                break;
            } else {
                // 先頭の「?」を除去
                $next_results = preg_replace('/^\?/', '', $tweets_arr['search_metadata']['next_results']);

                // パラメータに変換
                parse_str($next_results, $params);
            }
        }

        return view('index')->with('tweets', $tweet_images);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
