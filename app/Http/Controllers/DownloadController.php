<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YoutubeDl\Options;
use YoutubeDl\YoutubeDl;

class DownloadController extends Controller
{
    public function getDownload()
    {
        return view('dashboard');
    }
    public function download(Request $request)
    {
        $url = $request->url;
        if(empty($url)) {
            return redirect()->back();
        }
        $yt = new YoutubeDl();
        $collection = $yt->download(
            Options::create()
                ->downloadPath('/home/mamun/www/download/storage/download')
                ->yesPlaylist()
                ->url($url)
        );

        foreach ($collection->getVideos() as $video) {
            if ($video->getError() !== null) {
                echo "Error downloading video: {$video->getError()}.";
            } else {
                echo $video->getTitle();
            }
        }
        return redirect()->back();
    }
}
