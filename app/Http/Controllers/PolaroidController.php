<?php
  namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Thujohn\Twitter\Facades\Twitter as Twitter;
use Vinkla\Instagram\Facades\Instagram as Instagram;

class PolaroidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param str $accountId
     * @return Response
     */
    public function show($accountId) {

        // Twitterユーザ情報取得（スクリーンネーム、プロフィール）
        $params = [
            'screen_name' => $accountId,
            'include_entities' => true,
            'format' => 'json'
        ];
        $userInfo = Twitter::query('users/show', 'GET', $params);
        // オブジェクトを配列に変換
        $userInfo = json_decode($userInfo, true);

        // Twitterツイート検索パラメータの設定、「q」は検索文字列、「count」は取得件数（最大100件）
        $params = [
            'q' => 'from:'.$accountId.' filter:images',
            'lang' => 'ja',
            'locale' => 'ja',
            //'result_type' => 'popular',
            'include_entities' => true,
            'count' => 100,
            'format' => 'json'
        ];

        // リクエスト回数
        $requestNumber = 10;

        $tweetTexts = array();
        $tweetImages = array();

        // 指定ユーザのTwitterツイート画像とテキストを配列へ格納
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

        // Instagramのアカウント名からIDを取得
        $instagramUserInfo = Instagram::connection('main')->searchUser('araki_sakura14', true);
        foreach ($instagramUserInfo->data as $data) {
            $instagramUserId = $data->id;
        }

        $limit = 10;
        $instagramImages = array();

        // 指定ユーザのInstagram 画像とテキストを配列へ格納
        $instagramUserMedia = Instagram::connection('main')->getUserMedia($instagramUserId, $limit);
        foreach ($instagramUserMedia->data as $data) {
            $instagramImages[] = $data->images->standard_resolution->url;
            $instagramTexts[] = $data->caption->text;
        }

        return view('polaroid', compact('userInfo', 'tweetTexts', 'tweetImages', 'instagramImages', 'instagramTexts'));
    }
}
