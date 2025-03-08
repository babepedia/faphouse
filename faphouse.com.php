<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('max_execution_time',1200);

$stattime = microtime(1);

$mysqli = new mysqli("172.188.89.41", "babpe", "8WF7LLRWHALsFjinvFU4", "babpe") or die(mysqli_error($mysqli));

include '../functions.php';
include '../libs/simple_html_dom.php';
$mysqli->set_charset('utf8mb4');


$login = '';
$pass = 'HPc9k#x#?5';

// Get video list

$headers = [

    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:135.0) Gecko/20100101 Firefox/135.0",
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
    "Accept-Language: en-US,en;q=0.5",
// "Accept-Encoding: gzip, deflate, br, zstd",
    "Connection: keep-alive",
    'Cookie: trdata=90d9c62803c2bdec63201093755c6f5bdfe76b2a84c9e4de1464d4028dbb7ed9a%3A2%3A%7Bi%3A0%3Bs%3A6%3A%22trdata%22%3Bi%3A1%3Bs%3A31%3A%22%7B%22firstVisitedAt%22%3A%221573715038%22%7D%22%3B%7D; attribution=6eb0ae6c7ff1bb823d99a7cdbd826034af097db69f46e5e7ade642dd6fc6eaffa%3A2%3A%7Bi%3A0%3Bs%3A11%3A%22attribution%22%3Bi%3A1%3Bs%3A227%3A%22%7B%22attribution_activity%22%3A1741215341%2C%22attribution_channel%22%3A%22seo%22%2C%22attribution_affiliate_name%22%3Anull%2C%22attribution_group%22%3Anull%2C%22fapcash_campaign_name%22%3Anull%2C%22fapcash_click_id%22%3Anull%2C%22fapcash_domain%22%3Anull%2C%22fapcash_affiliate_name%22%3Anull%7D%22%3B%7D; guid=08yseyjxu5f4sw0kss4wcc00so; sex_orientation=straight; _fh_exp=203_v1_p100%7C207_v1_p100%7C173_v2_p100%7C176_v2_p100%7C179_v1_p100%7C194_v1_p100%7C195_v1_p100%7C202_v3_p100%7CML029_v1_p100; monoIndexRecsShowTime=1741215341; AMP_439b0e7372=JTdCJTIyZGV2aWNlSWQlMjIlM0ElMjJkZmY2ZTkyNS01YWM3LTQ1NzktODZmMy05ZGZjYTFkMTkyN2ElMjIlMkMlMjJ1c2VySWQlMjIlM0ElMjIzNDE5NTkyNCUyMiUyQyUyMnNlc3Npb25JZCUyMiUzQTE3NDEyMTUzMjAwOTklMkMlMjJvcHRPdXQlMjIlM0FmYWxzZSUyQyUyMmxhc3RFdmVudFRpbWUlMjIlM0ExNzQxMjE1MzQzMzA1JTJDJTIybGFzdEV2ZW50SWQlMjIlM0EzOTYlN0Q=; AMP_MKTG_439b0e7372=JTdCJTdE; cookie-accepted=1; cookie-settings={"all":1,"ne":0,"tptc":0,"eo":0}; aged-enough=1; __fp=08f6a00a07697cb7475c21877d1da3f1; __gtdfirst_60_on_mainw=304; __gtdfirst_60_on_mainh=190; __gtdcontestw=304; __gtdcontesth=190; __gtdsecond_60_on_mainw=304; __gtdsecond_60_on_mainh=190; tutm=93aff613bb8f6638bf923d39d0e0acbc440515ae8111939c80d24b03454b55a8a%3A2%3A%7Bi%3A0%3Bs%3A4%3A%22tutm%22%3Bi%3A1%3Bs%3A104%3A%22%7B%22utmSource%22%3A%22theporndude%22%2C%22utmMedium%22%3A%22fapcash%22%2C%22utmCampaign%22%3A%22dTY%22%2C%22utmTerm%22%3Anull%2C%22utmContent%22%3A%22arab%22%7D%22%3B%7D; tref=c961a4ce24b3b1722a4923740a5626b13c92345436a7ab2c588b96669b61b246a%3A2%3A%7Bi%3A0%3Bs%3A4%3A%22tref%22%3Bi%3A1%3Bs%3A72%3A%22%7B%22referrer%22%3A%22https%3A%2F%2Fpay.fhrdr.com%2F%22%2C%22referring_domain%22%3A%22pay.fhrdr.com%22%7D%22%3B%7D; __gtdmainGridw=288; __gtdmainGridh=180; ctxUrlStore=%7B%7D; __gtdrelatedw=0; __gtdrelatedh=0; __gtdsimilarw=304; __gtdsimilarh=190; __gtdvideoPurchasew=285; __gtdvideoPurchaseh=178; __gtdporn_radarw=320; __gtdporn_radarh=200; limit-trailer-views=2632734%2C2761004; popularRecsShowTime=1741170398; PHPSESSID=u3njo8j7c0drj0gfg0hg4shidt; prs=--; siteMode=desktop; amp_custom_session_id=1156856837eef5f86a4463e77b5147608d8115ed8d; locale=en; translate-video-titles=1; __cf_bm=LzlJ0pxAyJxaECHd6WZa.foH9L3_nAnkVkTmXrHdU2k-1741215316-1.0.1.1-Q3t6GQrPWetjfJ_Qv8NYief7FjFYdzuHqAYFoEQvCjKqvUnESVHM2ENt9HAdHEYaWsKSCC7nud0tPNioe1L.nnfwRmOKoj5aPNzxeu_uY2s; user_device_theme=light; screenWidth=1920; screenHeight=1080; _identity=da9f864c45b78ab942a30b18e460b7c236497ebae6948e37dc756b665d9d9398a%3A2%3A%7Bi%3A0%3Bs%3A9%3A%22_identity%22%3Bi%3A1%3Bs%3A82%3A%22%5B34195924%2C%22P3dq90g11jnGsAHui-R9DDodAY0nF_hr%22%2C2592000%2C%22u3njo8j7c0drj0gfg0hg4shidt%22%5D%22%3B%7D; _csrf=a9ec47c76c229a190a4a7d4616d81242d9ce7e54c19a159744656b3deb3aa3b5a%3A2%3A%7Bi%3A0%3Bs%3A5%3A%22_csrf%22%3Bi%3A1%3Bs%3A32%3A%22N0xE8FL7MpKQ5-4nUgfq-Ux_kPmUVGy3%22%3B%7D',
    "Upgrade-Insecure-Requests: 1",
    "Sec-Fetch-Dest: document",
    "Sec-Fetch-Mode: navigate",
    "Sec-Fetch-Site: none",
    "Sec-Fetch-User: ?1",
    "Priority: u=0, i",
    "TE: trailers",


];




function fh_chkvdo_exist($videoid)
{
    global $mysqli;
    $xq = $mysqli->query("SELECT * FROM `faphouse` WHERE id = '{$videoid}' limit 1");
    if($xq->num_rows)
    {
        return 1;
    }
    return 0;
}
// channels list
if(0)
{

    for($i=1;$i<55;$i++)
    {
        $caturl = "https://faphouse.com/studios?page={$i}";
        $rul = "https://faylab.com/p.php?u=" . base64_encode($caturl);

        $resp =func_get_content($rul);

        $html = str_get_html($resp);
        $sdivs = $html->find("div.studios-list div.studios-list__container div.studio");
        foreach ($sdivs as $sdiv) {
            $link = $sdiv->find("a.studio__thumb",0);
            $img1 = $link->find("img.studio__thumb-picture",0);
            $logo = $sdiv->find("img.studio__thumb-avatar_picture",0);
            $title = $img1->alt;
            if($title)
            {
                $slug = basename($link->href);


                $logox = $mysqli->real_escape_string($logo->src);
                $imagex = $mysqli->real_escape_string($img1->src);
                $titlex = $mysqli->real_escape_string($title);

                $xq = $mysqli->query("SELECT * FROM `faphouse_studios` WHERE slug = '{$slug}' limit 1");
                if($xq->num_rows)
                {

                }else{
                    $mysqli->query("INSERT INTO `faphouse_studios`(`slug`, `name`, `logo`, `poster`) VALUES ('{$slug}','{$titlex}','{$logox}','{$imagex}')");
                }

echo "page{$i}";

              //  echo "slug: {$slug}--- title:$title --- logo:{$logox} ---image:{$imagex} \n";

            }


        }
     //   exit();
    }

}
if(1)
{
    //  $xq = $mysqli->query("SELECT id,slug FROM `faphouse_cats` where time = 0 order by time asc limit 1");
    $xq = $mysqli->query("SELECT id,slug FROM `faphouse_studios` where vids is null order by id asc limit 100");
    while ($row = $xq->fetch_assoc())
    {
        $slug = $row['slug'];
        $caturl = "https://faphouse.com/studios/{$slug}";
        $caturl = "https://faphouse.com/studios/{$slug}?sort=popular";

       // $resp = func_get_content("https://faylab.com/p.php?u=" . base64_encode($caturl));

        $resp = func_get_content($caturl,'get',[],$headers);

      //  file_put_contents('fh.txt',$resp);
       // exit();

        $vids =  fh_findvideo($resp,'div.fh-grid__container div.thumb');
        $vidsx = $mysqli->real_escape_string(json_encode($vids));

        $time =time();
        $mysqli->query("UPDATE `faphouse_studios` SET `vids` = '{$vidsx}',`time`='{$time}' WHERE id = '{$row['id']}'");
    }

}

// exit();


// cat list
if(0) {

    for ($i = 0; $i < 8; $i++)
    {
        $caturl = "https://faphouse.com/categories/all";
        $caturl = "https://faphouse.com/categories?sort=alpha&page={$i}";
        $rul = "https://faylab.com/p.php?u=" . base64_encode($caturl);

        $resp =func_get_content($rul);

        $html = str_get_html($resp);
        $links = $html->find("div.grid a.thumb-category-v2");
        foreach ($links as $link) {

            $name = '';
            $image = '';

            $spans = $link->find('span');
            foreach ($spans as $span) {
                $span->outertext = '';
            }

            // Get only the first text node
            $name = '';
            foreach ($link->nodes as $node) {
                if ($node->nodetype == HDOM_TYPE_TEXT) {
                    $name = trim($node->text());
                    break; // Stop at first text node
                }
            }

            $img = $link->find("img",0);
            if($img)
            {
                $image = $img->src;
                $name = $img->alt;
                $imagex = $mysqli->real_escape_string($image);
            }

            // Escape the name for safe database insertion
            $namex = $mysqli->real_escape_string($name);


            $hrf = $link->href;
            $url = "https://faphouse.com" . $hrf;

            if(strpos($url,'/c/')>0)
            {
                $ptrn = '#\/c\/(.+)\/videos#';
                if(preg_match($ptrn,$hrf,$mtc))
                {
                    echo "{$url} - {$mtc[1]} \n";
                    $slugx = $mysqli->real_escape_string($mtc[1]);
                    if($mysqli->query("SELECT * FROM `faphouse_cats` WHERE slug = '{$slugx}' limit 1")->num_rows)
                    {

                        $mysqli->query("UPDATE `faphouse_cats` SET `name`='{$namex}',`poster`='{$imagex}' WHERE slug = '{$slugx}'");

                    }else{
                        $mysqli->query("INSERT INTO `faphouse_cats`(`slug`, `time`) VALUES ('{$slugx}','0')");
                    }

                }
            }

        }

    }

echo 'done';
exit();
}

if(1)
{
  //  $xq = $mysqli->query("SELECT id,slug FROM `faphouse_cats` where time = 0 order by time asc limit 1");
    $xq = $mysqli->query("SELECT id,slug FROM `faphouse_cats` where vids is null order by id asc limit 100");
    while ($row = $xq->fetch_assoc())
    {
        $slug = $row['slug'];
        $caturl = "https://faphouse.com/c/{$slug}/videos";

        $resp = func_get_content("https://faylab.com/p.php?u=" . base64_encode($caturl));
        file_put_contents('fh.txt',$resp);
        exit();

       $vids =  fh_findvideo($resp);
       $vidsx = $mysqli->real_escape_string(json_encode($vids));

        $time =time();
        $mysqli->query("UPDATE `faphouse_cats` SET `vids` = '{$vidsx}',`time`='{$time}' WHERE id = '{$row['id']}'");
    }
}




if(isset($_REQUEST['gvdta']))
{

    $dvdta = $_REQUEST['gvdta'];


    $keeploop =1;
    while ($keeploop)
    {
        $accending = $_REQUEST['gvdta'];
        $xq = $mysqli->query("SELECT id,slug FROM `faphouse`  where pagedata is null order by  rand()  limit 3");
        if($xq->num_rows)
        {
            while ($row = $xq->fetch_assoc())
            {
                //  $mysqli->query("UPDATE `faphouse` SET `pagedata`='1' WHERE id = '{$row['id']}'");
                $videoslug = $row['slug'];
                fh_get_video_data($videoslug);
            }
        }else{
            echo 'no more data';
            $keeploop = 0;
            exit();
        }

        if($dvdta == '1')
        {
             exit();
        }

    }
}

function fh_get_video_data($videoslug)
{

    echo "\n<div>video slug: {$videoslug}</div>";

    global $headers;


  //  $headers = [];
  //  $url ="https://faylab.com/p.php?u=".base64_encode("https://faphouse.com/videos/muslim-step-father-stepdaughter-K0v15m");
    $url ="https://faphouse.com/videos/{$videoslug}";
    $resp = func_get_content($url,'get',[],$headers);
 //  $resp = file_get_contents('faph.html');

   // file_put_contents('faph.html',$resp);

// Assuming $resp contains the HTML from your previous fetch
    $html = str_get_html($resp);
    $data = [];

    try {
        // Find the main video container
        $body = $html->find("div.video div.video__wrap div.video__main.video__main_gold", 0);
        if (!$body) {
            throw new Exception("Video container not found");
        }


        $vidfull = $html->find("div#video-full",0);
        if ($vidfull) {
            // Get all attributes into the $data array
            $data = $vidfull->attr;

            // Optionally, clean up or decode JSON-encoded attributes if needed
            if (isset($data['data-el-pornstar-ids'])) {
                $data['data-el-pornstar-ids'] = json_decode($data['data-el-pornstar-ids'], true);
            }
            if (isset($data['data-el-pornstar-names'])) {
                $data['data-el-pornstar-names'] = json_decode($data['data-el-pornstar-names'], true);
            }
            if (isset($data['data-el-formats'])) {
                $data['data-el-formats'] = html_entity_decode($data['data-el-formats']);
                  $data['data-el-formats'] = json_decode($data['data-el-formats'], true);
            }
        }


        // Extract description
        $description = $html->find('.video-info-details__description p', 0);
        if ($description) {
            $data['description'] = $description->plaintext;
        }

// Extract categories/tags
        $categories = $html->find('.video-info-details__categories a.vid-c');
        $data['categories'] = [];
        foreach ($categories as $category) {
            $category_data = [
                'title' => trim($category->plaintext),
                'url' => $category->href
            ];
            // If there's an image (e.g., for studios or pornstars)
            $img = $category->find('img', 0);
            if ($img) {
                $category_data['image'] = $img->src;
            }
            $data['categories'][] = $category_data;
        }


        // Extract trailer video info
        $trailer = $body->find('video#video-trailer', 0);
        if ($trailer) {
            $data['trailer'] = [
                'src' => $trailer->src ?? '',
                'poster' => $trailer->poster ?? '',
                'fallback' => $trailer->getAttribute('data-fallback') ?? ''
            ];
        }

        // Extract background image from purchase div
        $purchase = $body->find('div.video-purchase', 0);
        if ($purchase) {
            $style = $purchase->getAttribute('style');
            preg_match("/url\('(.*?)'\)/", $style, $matches);
            $data['background_image'] = $matches[1] ?? '';
            $data['duration_seconds'] = $purchase->getAttribute('data-el-duration') ?? '';
        }

        // Extract preview thumbnail
        $preview = $body->find('div.preview-container', 0);
        if ($preview) {
            $img = $preview->find('img.t-i', 0);
            if ($img) {
                $data['preview_thumb'] = [
                    'src' => $img->src ?? '',
                    'width' => $img->width ?? '',
                    'height' => $img->height ?? '',
                    'alt' => $img->alt ?? ''
                ];
            }
            $quality = $preview->find('span.t-vb', 0);
            if ($quality) {
                $quality_text = $quality->plaintext ?? '';
                $data['quality'] = trim(substr($quality_text, 0, strpos($quality_text, ' ') ?: strlen($quality_text)));
                $duration = $preview->find('span.t-vb span', 0);
                $data['duration'] = $duration->innertext ?? '';
            }
        }

        // Extract video info
        $info = $html->find('div.video__info', 0);
        if ($info) {
            // Title
            $data['title'] = $info->find('h1.video__title', 0)->innertext ?? '';

            // Studio info
            $studio_link = $info->find('a.video-info-details__studio-link', 0);
            if ($studio_link) {
                $data['studio'] = [
                    'name' => $studio_link->innertext ?? '',
                    'slug' => basename($studio_link->href ?? ''),
                    'url' => $studio_link->href ?? ''
                ];
            }

            // Studio avatar
            $avatar = $info->find('img.fh-studio-avatar__img', 0);
            if ($avatar) {
                $data['studio']['avatar'] = $avatar->src ?? '';
            }

            // Likes
            $like_button = $info->find('button[data-el="ButtonLike"]', 0);
            if ($like_button) {
                $data['likes'] = $like_button->getAttribute('data-el-counter') ?? '';
            }

            // Comments
            $comments = $info->find('a[data-el="ButtonScrollTo"] .fh-button__inner-counter', 0);
            $data['comments_count'] = $comments->innertext ?? '';

            // Description and publish date
            $desc_container = $info->find('div.video-info-details__description', 0);
            if ($desc_container) {
                $data['publish_date'] = $desc_container->find('span.video-publish-date', 0)->innertext ?? '';
                $data['description'] = $desc_container->find('p', 0)->innertext ?? '';
            }

            // Categories/Tags
            $tags_container = $info->find('div.video-info-details__categories', 0);
            if ($tags_container) {
                $tags = [];
                foreach ($tags_container->find('a.vid-c') as $tag) {
                    $tag_name = trim($tag->plaintext);
                    $tags[] = [
                        'name' => $tag_name,
                        'url' => $tag->href ?? ''
                    ];
                }
                $data['tags'] = $tags;
            }

            // Download options
            $download_list = $info->find('div.dropdown__list-video-downloads', 0);
            if ($download_list) {
                $downloads = [];
                foreach ($download_list->find('a.list__item') as $download) {
                    $downloads[] = [
                        'quality' => $download->find('span.quality', 0)->innertext ?? '',
                        'size' => $download->find('span.size', 0)->innertext ?? ''
                    ];
                }
                $data['download_options'] = $downloads;
            }
        }

    } catch (Exception $e) {
        $data['error'] = $e->getMessage();
    }

    $isprem = 0;
    if(isset($data['data-el-formats']))
    {
        echo "<div style='background-color: green'>Premium</div>";
        $isprem = 1;
    }else{
        echo "<div style='background-color: red'>Not prem</div>";
    }

    global $mysqli;
    $datax = $mysqli->real_escape_string(json_encode($data));
    $videoslugx = $mysqli->real_escape_string($videoslug);
    if(1)
    {
        $mysqli->query("UPDATE `faphouse` SET `pagedata`='{$datax}',`isprem`='{$isprem}' WHERE slug ='{$videoslugx}'");
    }


// Clean up
    $html->clear();
    unset($html);

  //  print_r($data);
}




if(0)
{
    $url = "https://faphouse.com/c/small-tits/videos";
    $url = "https://faphouse.com/search/videos?q=very+thick+dick";

   // echo "https://faylab.com/p.php?u=" . base64_encode($url); exit();

    // Get content with error checking
    $resp = func_get_content("https://faylab.com/p.php?u=" . base64_encode($url));

    fh_findvideo($resp);
}

function fh_findvideo($resp,$cardq = 'div.page__main div.grid div.thumb')
{

    $vids = [];
    global $mysqli;

        $html = str_get_html($resp);
        if (!$html) {
            throw new Exception("Failed to parse HTML");
        }

        $data = [];
        $cards = $html->find($cardq);

        if (empty($cards)) {
            throw new Exception("No video cards found on page");
        }

        foreach ($cards as $thumb) {
            $item = [];

            $slug = '';
            $title = '';
            $poster = '';
            $quality = '';
            $duration = '';


            // Get data attributes
            $item['id'] = $thumb->getAttribute('data-id') ?? '';
            $videoid = $item['id'];
            $vids[$videoid] = $videoid;
            if(fh_chkvdo_exist($videoid))
            {
                echo 'exists';
                continue;
            }

            // Uncomment if you need the JSON data
            // $item['el_pp'] = json_decode($thumb->getAttribute('data-el-pp') ?? '[]', true);

            // Get video link
            $video_link = $thumb->find('a.t-vl', 0);
            $item['video_slug'] = $video_link ? basename($video_link->href ?? '') : '';
            $slug = $item['video_slug'];


            // Get image info
            $image = $thumb->find('img.t-i', 0);
            if ($image) {
                $poster = $image->src;
                $item['image'] = [
                    'src' => $image->src ?? '',
                    'srcset' => $image->srcset ?? '',
                    'width' => $image->width ?? '',
                    'height' => $image->height ?? '',
                    'alt' => $image->alt ?? ''
                ];
            }

            // Get video preview
            $video = $thumb->find('video.t-v', 0);
            if ($video) {
                $poster = $video->poster;
                $item['video_preview'] = [
                    'src' => $video->src ?? '',
                    'poster' => $video->poster ?? ''
                ];
            }

            // Get quality and duration
            $video_quality = $thumb->find('span.t-vb', 0);
            if ($video_quality) {
                $quality_text = $video_quality->plaintext ?? '';
                $item['quality'] = $quality_text ? trim(substr($quality_text, 0, strpos($quality_text, ' ') ?: strlen($quality_text))) : '';
                $duration = $thumb->find('span.t-vb span', 0);
                $item['duration'] = $duration ? ($duration->innertext ?? '') : '';
            }

            // Get title
            $title = $thumb->find('a.t-tv', 0);
            $item['title'] = $title ? ($title->innertext ?? '') : '';


            // Get studio/model info
            $studios = $thumb->find('a.t-ti-s');
            foreach ($studios as $studio) {
                if ($studio->href) {
                    $surl = $studio->href;
                    $parts = explode('/', trim($surl, '/')); // Trim slashes and explode

                    if (count($parts) >= 2) {
                        $type = $parts[0]; // models or studios
                        $item[$type][] = [$studio->innertext, basename($studio->href)];
                    }
                }
            }

            // Add to main data array
            $data[] = $item;
            $posterx = $mysqli->real_escape_string($poster);
            $titlex = $mysqli->real_escape_string($item['title']);
            $durationx = trim($item['duration']);
            $qualityx = trim($item['quality']);

           // print_r($item);


            $mysqli->query("INSERT INTO `faphouse`(`vid`, `slug`, `title`, `poster`, `quality`, `duration`) VALUES ('{$videoid}','{$slug}','{$titlex}','{$posterx}','{$qualityx}','{$durationx}')");


        }

        // Clean up
        $html->clear();
        unset($html);


        return $vids;
      //  print_r($data);

}

$endtitme = microtime(1);

$totaltime = $endtitme - $stattime;
echo "Total time: {$totaltime}";