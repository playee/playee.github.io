<!DOCTYPE html>
<html>
<head>
<title>Media Gallery</title>
<link rel="stylesheet" type="text/css" href="/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body background="../bg.png">
<?php include("../nav.php"); ?>
<hr>
<center><div class="main11" style="max-width:900px"><div class="nokia">Media Gallery</div><div class="spacing1">
<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'GIFS')">GIFS</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'MEMES')">MEMES</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'WALLPAPERS')">WALLPAPERS</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'VIDEOS')">VIDEOS</a></li>
</ul>
<div id="GIFS" class="tabcontent"><center>
<img src="http://i.imgur.com/ItSv7un.gif"><br><br><br><br><img src="http://i.imgur.com/YyD2L4h.gif"><br><br><br><br><img src="http://i.imgur.com/WTOFtmI.gif"><br><br><br><br><img src="http://i.imgur.com/Jirx8wW.gif"><br><br><br><br><img src="http://i.imgur.com/ZA9J9Uv.gif"><br><br><br><br><img src="http://i.imgur.com/OQEPm.gif"><br><br><br><br><img src="http://i.imgur.com/ACspr.gif"><br><br><br><a href="https://forums.everybodyedits.com/viewtopic.php?id=32326" class="btn1">Click here to see more gifs!</a>
</div>
<div id="MEMES" class="tabcontent"><center>
<blockquote class="imgur-embed-pub" lang="en" data-id="a/2P6XU" data-context="false"><a href="//imgur.com/a/2P6XU">Everybody Edits MEMES</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
</div>
<div id="WALLPAPERS" class="tabcontent"><center>
<blockquote class="imgur-embed-pub" lang="en" data-id="a/zUtFE" data-context="false"><a href="//imgur.com/zUtFE">Everybody Edits WALLPAPERS</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
</div>
<div id="VIDEOS" class="tabcontent"><center>
<h3 style="font-size: 30px;">Speedart</h3><br><br><br>
<iframe width="640" height="360" src="https://www.youtube.com/embed/kzmDaUOWj-Q?rel=0" frameborder="0" allowfullscreen></iframe><br><br><br><br>
<iframe width="640" height="360" src="https://www.youtube.com/embed/4sbWJeIzpF4?rel=0" frameborder="0" allowfullscreen></iframe><br><br><br>
<h3 style="font-size: 30px;">Gameplay</h3><br><br><br>
<iframe width="640" height="360" src="https://www.youtube.com/embed/6FZBrrfa4W4?rel=0" frameborder="0" allowfullscreen></iframe><br><br><br><br>
<iframe width="640" height="360" src="https://www.youtube.com/embed/FMMRCf2tqDo?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<script text="text/javascript">
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<?php include_once("../analyticstracking.php") ?>
</body>
</html>