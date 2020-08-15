<?php
	include_once("bloggerClass.php");
	if(isset($_GET['url'])){
		$stream = new bloggerStream();
$stream->loadApi($_GET['url']);
$videoLink = $stream->grab(); //direct mp4 url
$posterImg = $stream->poster(); // poster image url
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <script src="/Ndpx54TlGhYkCfM4hbPL-Af33BI.js"></script><link href="/videojs-logo.min.css" rel="stylesheet">
  <link href="/videojs-resolution-switcher.css" rel="stylesheet">
  <link href="/video-js.min.css" rel="stylesheet" type="text/css">
  <link href="/videojs.ads.css" rel="stylesheet" type="text/css">
  <link href="/videojs.ima.css" rel="stylesheet" type="text/css">
  <link href="/videojs-skin-flat.min.css" rel="stylesheet" type="text/css">

  <script src="/videojs-ie8.min.js"></script>
  <script src="/video.min.js"></script>
  <style media="screen">
  .vjs-watermark-text {
    font-size: 20px !important;
  }
  </style>
  <script>
    videojs.options.flash.swf = "#";
  </script>
  <style type="text/css">
		html, body {
			margin: 0;
			padding: 0;
		}
		#video {
			position: absolute;
			width: 100% !important;
			height: 100% !important;
		}
		#player {
			position: absolute;
			width: 100% !important;
			height: 100% !important; 
			padding: 0;
		</style>
</head>
</head>

<body class="drive-viewer-fixed-frame">
    
      
        <video id="topddl_player" class="video-js vjs-default-skin" controls preload="none" poster="<?php echo $posterImg; ?>">
          
            <source src="<?php echo $videoLink;?>" type='video/mp4' label='360' res='360' />
          
          <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
        </video>
        <script src="//imasdk.googleapis.com/js/sdkloader/ima3.js"></script>
        <script src="/videojs-resolution-switcher.js"></script>
        <script src="/videojs-logo.min.js"></script>
        <script src="/videojs-hotkeys.js"></script>
        <script src="/videojs.ads.min.js"></script>
        <script src="/videojs.ima.min.js"></script>
        <script>
        var body = document.body,  html = document.documentElement;
        var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
        var setup = {width: document.body.clientWidth, height};
        
        videojs('topddl_player', setup )
        
        videojs('topddl_player').videoLogo({
          watermark: "MiteFansub Player",
        })
        
        
        videojs('topddl_player').videoJsResolutionSwitcher();
        videojs('topddl_player').hotkeys({
          volumeStep: 0.1,
          seekStep: 5,
          enableModifiersForNumbers: false,
          alwaysCaptureHotkeys: true
        });
        videojs('topddl_player').on('error', function(err) {
          var current_time = videojs('topddl_player').currentTime();
          
          window.location = window.location.href.replace(/\&autoplay\=true\&time\=\d+\&retry\=\d+/g, '') + '&autoplay=true&time=' + current_time + '&retry=1';
          // console.log(err);
        })
        
          videojs('topddl_player').ima({
            id: 'topddl_player',
            adTagUrl: ' '
          });
        
        </script>
</body>
</html>
