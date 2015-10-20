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
     * @param  str  $accountId
     * @return Response
     */
    public function show($accountId)
    {

        // ツイート検索パラメータの設定、「q」は検索文字列、「count」は取得件数（最大100件）
        $params = array(
            'q' => 'from:'.$accountId.' filter:images',
            'lang' => 'ja',
            'locale' => 'ja',
            //'result_type' => 'popular',
            'include_entities' => true,
            'count' => 100,
            'format' => 'json'
        );

        // リクエスト回数
        $requestNumber = 10;

        $tweetTexts = array();
        $tweetImages = array();

        for ($i = 0; $i < $requestNumber; $i++) {

            // ツイート検索実行
            //echo $params['count'] * $i + 1 . " - " . $params['count'] * ($i + 1) . " 件目取得中\n";
            $tweetsObj = Twitter::query('search/tweets', 'GET', $params);

            // オブジェクトを配列に変換
            $tweetsArray = json_decode($tweetsObj, true);

            // ツイート本文を抽出
            for ($j = 0; $j < count($tweetsArray['statuses']); $j++) {
                $tweetTexts[] = $tweetsArray['statuses'][$j]['text'];
                $tweetImages[] = $tweetsArray['statuses'][$j]['entities']['media'][0]['media_url_https'];
            }

            // next_results が無ければ処理を終了
            if (!isset($tweetsArray['search_metadata']['next_results'])) {
                break;
            } else {
                // 先頭の「?」を除去
                $nextResults = preg_replace('/^\?/', '', $tweetsArray['search_metadata']['next_results']);

                // パラメータに変換
                parse_str($nextResults, $params);
            }
        }

        return view('index')->with('tweets', $tweetImages);
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
