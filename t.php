<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . "/Subscene.php";
//Search movie by name
// if(isset($_GET["q"])){
//     $movies = Subscene::search($_GET["q"]);
//     echo json_encode($movies);
// }
// //get sub by url
// if(isset($_GET["urlsub"])){
//     $subtitles = Subscene::getSubtitles($_GET["urlsub"]);
//     echo json_encode($subtitles);
// }

// // get sub info by url
// if(isset($_GET["urlinfo"])){
//     $subtitle_info = Subscene::getSubtitleInfo($_GET["urlinfo"]);
//     echo json_encode($subtitle_info);
// }

// get list sub by imdb id
if(isset($_GET["imdb"]) && isset($_GET["title"])){
    $movies = Subscene::search($_GET["title"]);
    $searched_data;
    foreach ($movies as $i) {
        $searched_data = Subscene::getSubtitles($i["url"]);
        if(strpos($searched_data["imdb"], $_GET["imdb"]) !== false){
            break;
        }
    }
    echo json_encode($searched_data);
}
// Array
// (
//     [title] => Fast Five (Fast & Furious 5: The Rio Heist)
//     [poster] => https://i.jeded.com/i/fast-five-fast-and-furious-5-the-rio-heist.154-8128.jpg
//     [author] => msasanmh
//     [comment] => برای تمامی نسخه‌های بلوری و غیر اکستندد ---
// ترجمه جدید سال 2015
//     [imdb] => https://www.imdb.com/title/tt1596343
//     [preview] => <p>
//                                                                 1<br>00:00:35,702 --&gt; 00:00:38,128<br>JUDGE: Dominic Toretto.<br><br>2<br>00:00:38,455 --&gt; 00:00:42,499<br>You are // hereby sentenced<br>to serve 25 years to life<br><br>3<br>00:00:42,500 --&gt; 00:00:46,295<br>at the Lompoc Maximum Security<br>Prison system<br><br>4<br>00:00:46,296 --&gt; 00:00:50,098<br>&lt;i&gt;without the possibility<br>of early parole.&lt;/i&gt;<br><br>5<br>00:01:35,845 --&gt; 00:01:37,645<br>(TIRES SQUEALING)<br><br>6<br>
//                                                         </p>
//     [info] => Fast.Five.2011.720p.BluRay.x264.YIFY
// Fast.Five.2011.1080p.BluRay.x264.YIFY
// Fast.Five.2011.720p.BluRay.x264.DTS-WiKi
// Fast.Five.2011.1080p.BluRay.x264.DTS-WiKi
// Fast.Five.2011.BluRay.720p.DTS.x264-CHD
// Fast.Five.2011.BluRay.1080p.DTS.x264-CHD
// Fast.Five.2011.EXTENDED.720p.BluRay.DTS.x264-DON
// Fast.Five.2011.BluRay.1080p.DTS.DUAL.x264
// Fast and Furious 5 Fast Five 2011 BDRip 500MB x264 AAC-DiDee
// Fast Five 2011 720p BDRip XviD AC3-ViSiON
// 
//     [details] => Online:5/1/2015 9:34 AM 
// Hearing Impaired:No
// Foreign parts:Yes
// Framerate:23.976
// Files:2 (72,727bytes)
// Production type:Translated a subtitle
// Release type:Blu-ray
// ---------------------------------------
// Rated:10/10 from15 users
// Voted as Good by:15 users
// Downloads:2,438
// 
//     [download_url] => https://subscene.com/subtitles/farsi_persian-text/WqoLpe1QAjx6piQHWXmhrAM3cg2siBVAHTCqvpqNOvuT4VkzRdV0daps-FEMwk__g1FFHwEbjQ9G23wsaVEeYnk2VAVS3x2ExEMA-z7JdEGvZHH-sYVYDMyfsiTKaj_50
// )