<?php
/*
 * Template Name: Ronak
 */
get_header(); ?>
<?php if(isset($_GET['album_id'])){ ?>
<?php
$album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('Album ID not specified.');
$album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die('Album name not specified.');
 
$page_title = "{$album_name} Photos";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container">
 
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
    <!-- blue imp gallery -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="Bootstrap-Image-Gallery-3.1.1/css/bootstrap-image-gallery.min.css">
 
    <style>
    .photo-thumb{
        width:214px;
        height:214px;
        float:left;
        border: thin solid #d1d1d1;
        margin:0 1em 1em 0;
    }
 
    div#blueimp-gallery div.modal {
        overflow: visible;
    }
    </style>
</head>
<body>
 
<div class="container">
 <?php
echo "<h1 class='page-header'>";
    echo "<a href='index.php'>Albums</a> / {$page_title}";
echo "</h1>";
 
$access_token="1516711765090542|HlDwrVThbPc2SHofyvi5DTYZ8uc";
$json_link = "https://graph.facebook.com/v2.3/{$album_id}/photos?fields=source,images,name&access_token={$access_token}";
$json = file_get_contents($json_link);
 
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
 
$photo_count = count($obj['data']);
for($x=0; $x<$photo_count; $x++){
 
    // $source = isset($obj['data'][$x]['source']) ? $obj['data'][$x]['source'] : "";
    $source = isset($obj['data'][$x]['images'][0]['source']) ? $obj['data'][$x]['images'][0]['source'] : ""; //hd image
    $name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
 
    echo "<a href='{$source}' data-gallery>";
        echo "<div class='photo-thumb' style='background: url({$source}) 50% 50% no-repeat;'>";
 
        echo "</div>";
    echo "</a>";
 
}
?>
</div>
 
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="Bootstrap-Image-Gallery-3.1.1/js/bootstrap-image-gallery.min.js"></script>
 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
<!-- to make photos full view -->
<script>
$('#blueimp-gallery').data('useBootstrapModal', false);
$('#blueimp-gallery').toggleClass('blueimp-gallery-controls', true);
</script>
 
</body>
</html>
<?php } else {
	?>
<?php
$page_title = "Photo Albums";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style>
    .col-md-4{
        margin: 0 0 2em 0;
    }
    </style>
</head>
<body>
 
<div class="container">
 <?php
 
echo "<div class='col-lg-12'>";
    echo "<h1 class='page-header'>{$page_title}</h1>";
echo "</div>";
 
$access_token="1516711765090542|HlDwrVThbPc2SHofyvi5DTYZ8uc";
 
$fields="id,name,description,link,cover_photo,count";
//$fb_page_id = "138987566188974";
$fb_page_id= "298445400649117";
 
$json_link = "https://graph.facebook.com/v2.8/{$fb_page_id}/albums?fields={$fields}&access_token={$access_token}";
$json = file_get_contents($json_link);
 
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
 
$album_count = count($obj['data']);
for($x=0; $x<$album_count; $x++){
 
    $id = isset($obj['data'][$x]['id']) ? $obj['data'][$x]['id'] : "";
    $name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
    $url_name=urlencode($name);
    $description = isset($obj['data'][$x]['description']) ? $obj['data'][$x]['description'] : "";
    $link = isset($obj['data'][$x]['link']) ? $obj['data'][$x]['link'] : "";
 
    $cover_photo = isset($obj['data'][$x]['cover_photo']['id']) ? $obj['data'][$x]['cover_photo']['id'] : "";
 
    // use this for older access tokens:
    // $cover_photo = isset($obj['data'][$x]['cover_photo']) ? $obj['data'][$x]['cover_photo'] : "";
     
    $count = isset($obj['data'][$x]['count']) ? $obj['data'][$x]['count'] : "";
 
    // if you want to exclude an album, just add the name on the if statement
    if( 
        $name!="Profile Pictures"
        //$name!="Cover Photos"
        //$name!="Timeline Photos"
    ){
 
        $show_pictures_link = "?album_id={$id}&album_name={$name}";
 
        echo "<div class='col-md-4'>";
            echo "<a href='{$show_pictures_link}'>";
                echo "<img class='img-responsive' style='height: 420px; width:350px;' src='https://graph.facebook.com/v2.3/{$cover_photo}/picture?access_token={$access_token}' alt=''>";
            echo "</a>";
            echo "<h3>";
                echo "<a href='{$show_pictures_link}'>{$name}</a>";
            echo "</h3>";
 
            $count_text="Photo";
            if($count>1){ $count_text="Photos"; }
 
            echo "<p>";
                echo "<div style='color:#888;'>{$count} {$count_text} / <a href='{$link}' target='_blank'>View on Facebook</a></div>";
                echo $description;
            echo "</p>";
        echo "</div>";
    }
}
?>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
</body>
</html>
<?php } ?>
<?php
get_footer();