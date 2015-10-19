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
     * @return Response
     */
    public function index() {
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

      return view('polaroid');
    }
}
