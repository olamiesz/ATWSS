<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Interventions &middot; ATWSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="css/ATWSS.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                           <link rel="icon" type="image/png" href="img/favicon.png">
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.php"><img src="img/favicon.png">ATWSS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            <!--
              <li class="">
                <a href="./introduction.php">Introduction</a>
              </li>
              <li class="">
                <a href="./equipment.php">Equipment</a>
              </li>
            -->
              <li class="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]">
                <a href="./interventions.php">Interventions</a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Dosimeters
				  <b class="caret"></b>
				</a>
                <ul class="dropdown-menu">
                  <li><a href="./dosimeters.php">All Dosimeters</a></li>
                  <li><a href="http://dimi.com">Good Old 'dimi.com'</a></li>
                </ul>
              </li>
              <li class="">
                <a href="./people.php">People</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<?php

require_once('config/oracle.php');

date_default_timezone_set('Europe/Berlin');

$conn = oci_connect($conf['user'], $conf['password'], $conf['host']) or die(oci_error());

$sql = oci_parse($conn, "select * from view_interventions");
oci_execute($sql) or die(oci_error($sql));
$nrows = oci_fetch_all($sql, $intervention);

oci_free_statement($sql);
oci_close($conn);

?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Interventions</h1>
    <p class="lead">Interventions recorded in ATLAS</p>
  </div>
</header>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
		<div class="span12">
		
		<table class="table table-striped">
			<thead>
			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Start Time</th>
				<th>Dosimeters</th>
				<th>Videos</th>
			</tr>
			</thead>
	
			<tbody>
				<tr>
			 		<td>1</td>
			 		<td><?php echo str_replace(' ','&nbsp;',$intervention['NAME'][1-1]) ?></td>
			 		<td><?php echo str_replace(' ','&nbsp;',date("D, d M Y H:i", $intervention['UNIX_START'][1-1])) ?></td>
			 		<td><a href="http://atlas.web.cern.ch/Atlas/TCOORD/CavCom/plot.php?InterventionID=1">Plots</a></td>
			 		<td>
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-09.34.24.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-09.34.24.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-09.34.24.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-09.34.24.mp4">MP4</a> or <a href="videos/1/130221-09.34.24.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-10.04.06.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-10.04.06.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-10.04.06.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-10.04.06.mp4">MP4</a> or <a href="videos/1/130221-10.04.06.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-11.02.45.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-11.02.45.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-11.02.45.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-11.02.45.mp4">MP4</a> or <a href="videos/1/130221-11.02.45.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-11.59.05.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-11.59.05.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-11.59.05.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-11.59.05.mp4">MP4</a> or <a href="videos/1/130221-11.59.05.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-12.31.13.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-12.31.13.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-12.31.13.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-12.31.13.mp4">MP4</a> or <a href="videos/1/130221-12.31.13.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-14.38.06.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-14.38.06.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-14.38.06.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-14.38.06.mp4">MP4</a> or <a href="videos/1/130221-14.38.06.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-14.43.29.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-14.43.29.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-14.43.29.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-14.43.29.mp4">MP4</a> or <a href="videos/1/130221-14.43.29.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-15.23.18.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-15.23.18.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-15.23.18.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-15.23.18.mp4">MP4</a> or <a href="videos/1/130221-15.23.18.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-15.37.30.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-15.37.30.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-15.37.30.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-15.37.30.mp4">MP4</a> or <a href="videos/1/130221-15.37.30.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/1/130221-15.45.43.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/1/130221-15.45.43.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/1/130221-15.45.43.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/1/130221-15.45.43.mp4">MP4</a> or <a href="videos/1/130221-15.45.43.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
			 		</td>
			 	</tr>
				<tr>
			 		<td>2</td>
			 		<td><?php echo str_replace(' ','&nbsp;',$intervention['NAME'][2-1]) ?></td>
			 		<td><?php echo str_replace(' ','&nbsp;',date("D, d M Y H:i", $intervention['UNIX_START'][2-1])) ?></td>
			 		<td><a href="http://atlas.web.cern.ch/Atlas/TCOORD/CavCom/plot.php?InterventionID=2">Plots</a></td>
			 		<td>
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/2/130226-08.28.31.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/2/130226-08.28.31.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/2/130226-08.28.31.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/2/130226-08.28.31.mp4">MP4</a> or <a href="videos/2/130226-08.28.31.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/2/130226-09.14.21.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/2/130226-09.14.21.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/2/130226-09.14.21.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/2/130226-09.14.21.mp4">MP4</a> or <a href="videos/2/130226-09.14.21.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
			 		</td>
			 	</tr>
				<tr>
			 		<td>3</td>
			 		<td><?php echo str_replace(' ','&nbsp;',$intervention['NAME'][3-1]) ?></td>
			 		<td><?php echo str_replace(' ','&nbsp;',date("D, d M Y H:i", $intervention['UNIX_START'][3-1])) ?></td>
			 		<td><a href="http://atlas.web.cern.ch/Atlas/TCOORD/CavCom/plot.php?InterventionID=3">Plots</a></td>
			 		<td>
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/3/130227-08.24.26.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/3/130227-08.24.26.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/3/130227-08.24.26.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/3/130227-08.24.26.mp4">MP4</a> or <a href="videos/3/130227-08.24.26.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/3/130227-08.36.05.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/3/130227-08.36.05.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/3/130227-08.36.05.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/3/130227-08.36.05.mp4">MP4</a> or <a href="videos/3/130227-08.36.05.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/3/130227-10.34.17.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/3/130227-10.34.17.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/3/130227-10.34.17.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/3/130227-10.34.17.mp4">MP4</a> or <a href="videos/3/130227-10.34.17.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/3/130227-11.24.17.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/3/130227-11.24.17.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/3/130227-11.24.17.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/3/130227-11.24.17.mp4">MP4</a> or <a href="videos/3/130227-11.24.17.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
			 		</td>
			 	</tr>
				<tr>
			 		<td>4</td>
			 		<td><?php echo str_replace(' ','&nbsp;',$intervention['NAME'][4-1]) ?></td>
			 		<td><?php echo str_replace(' ','&nbsp;',date("D, d M Y H:i", $intervention['UNIX_START'][4-1])) ?></td>
			 		<td><a href="http://atlas.web.cern.ch/Atlas/TCOORD/CavCom/plot.php?InterventionID=4">Plots</a></td>
			 		<td>
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/4/130305-14.25.46.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/4/130305-14.25.46.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/4/130305-14.25.46.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/4/130305-14.25.46.mp4">MP4</a> or <a href="videos/4/130305-14.25.46.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/4/130305-14.25.55.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/4/130305-14.25.55.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/4/130305-14.25.55.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/4/130305-14.25.55.mp4">MP4</a> or <a href="videos/4/130305-14.25.55.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
			 		</td>
			 	</tr>
				<tr>
			 		<td>5</td>
			 		<td><?php echo str_replace(' ','&nbsp;',$intervention['NAME'][5-1]) ?></td>
			 		<td><?php echo str_replace(' ','&nbsp;',date("D, d M Y H:i", $intervention['UNIX_START'][5-1])) ?></td>
			 		<td><a href="http://atlas.web.cern.ch/Atlas/TCOORD/CavCom/plot.php?InterventionID=5">Plots</a></td>
			 		<td>
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/5/130307-09.00.08.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/5/130307-09.00.08.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/5/130307-09.00.08.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/5/130307-09.00.08.mp4">MP4</a> or <a href="videos/5/130307-09.00.08.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/5/130307-09.00.22.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/5/130307-09.00.22.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/5/130307-09.00.22.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/5/130307-09.00.22.mp4">MP4</a> or <a href="videos/5/130307-09.00.22.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
			 		</td>
			 	</tr>
				<tr>
			 		<td>6</td>
			 		<td><?php echo str_replace(' ','&nbsp;',$intervention['NAME'][6-1]) ?></td>
			 		<td><?php echo str_replace(' ','&nbsp;',date("D, d M Y H:i", $intervention['UNIX_START'][6-1])) ?></td>
			 		<td><a href="http://atlas.web.cern.ch/Atlas/TCOORD/CavCom/plot.php?InterventionID=6">Plots</a></td>
			 		<td>
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/6/130311-14.25.59.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/6/130311-14.25.59.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/6/130311-14.25.59.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/6/130311-14.25.59.mp4">MP4</a> or <a href="videos/6/130311-14.25.59.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
<video id="movie" width="320" height="240" controls muted preload="metadata">
  <source src="videos/6/130311-15.51.37.webm" type="video/webm; codecs=vp8,vorbis" />
  <source src="videos/6/130311-15.51.37.mp4" type="video/mp4" />
  <object width="320" height="240" type="application/x-shockwave-flash"
    data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
    <param name="movie" value="flowplayer-3.2.1.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="flashvars" value="config={'clip': {'url': '/videos/6/130311-15.51.37.mp4', 'autoPlay':false, 'autoBuffering':true}}" />
    <p>Download video as <a href="videos/6/130311-15.51.37.mp4">MP4</a> or <a href="videos/6/130311-15.51.37.webm">WebM</a>.</p>
  </object>
</video>
<script>
  var v = document.getElementById("movie");
  v.onclick = function() {
    if (v.paused) {
      v.play();
    } else {
      v.pause();
    }
  };
</script>            	    	
			 		</td>
			 	</tr>
			</tbody>
		</table>
		
      	</div>       	
    </div>

  </div>
  

    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>Copyright&copy; 2013 CERN</p>
        <ul class="footer-links">
          <li><a href="http://cern.ch">CERN</a></li>
          <li class="muted">&middot;</li>
          <li><a href="http://cern.ch/atlas">ATLAS</a></li>
          <li class="muted">&middot;</li>
          <li><a href="http://cern.ch/ATWSS">ATWSS</a></li>
        </ul>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>

  </body>
</html>
