<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <title><?php echo $song_name;?>----<?php echo $artist;?></title>
        <link href="<?php echo base_url();?>css/fm.css" rel="stylesheet" />
		<script src="<?php echo base_url();?>js/jquery.js"></script>
		<script src="<?php echo base_url();?>js/jplayer.js"></script>
		<script src="<?php echo base_url();?>js/fm.js"></script>
		<script src="<?php echo base_url();?>js/initPlayer.js"></script>
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17035560-2']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s)
            })();
        </script>
    </head>
    
    <body>
        <div class="music" id="music">
            <div class="music-player" id="player">
                <a href="<?php echo base_url();?>music/single/<?php echo $id;?>" id="single-song"><img src="<?php echo $album_image;?>" width="245px" height="245px" id="album_image" alt="<?php echo $album;?>" /></a>
                <div class="art-list">
                    <h2 class="artists">
                        <?php echo $artist;?>
                    </h2>
                    <p class="album">
                        <?php echo $album;?>
                    </p>
                    <p class="song-name">
                        <?php echo $song_name;?>
                    </p>
                    <div class="progress-box">
                        <span class="buffer" style="width:0%;"></span>
                        <span class="progress" style="width:0%;"></span>
                    </div>
                    <div id="player_times">
                        <span id="player_duration">00:00</span>
                        <span id="player_elapsed">00:00</span>
                    </div>
                    <a href="javascript:;" class="player_control volume_on" title="音量。点击静音。">点击静音</a>
                    <a href="javascript:;" class="player_control muted" title="音量。点击取消静音。"
                    style="display:none;">取消静音</a>
                    <span class="play">
                        <a href="javascript:;" title="play">播放</a>
                    </span>
                    <span class="pause">
                        <a href="javascript:;" title="pause">暂停</a>
                    </span>
                    <a href="javascript:;" class="next" id="next">下一首</a>
                    <span class="volume-bar">
                        <span class="volume-value" width="20%"></span>
                    </span>
                </div>
            </div>
            <div id="music-player" class="music-player"></div>
            <input type="hidden" id="init-song" value="<?php echo $song_url;?>"/>
        </div>
        <span class="create_by">
            <a href="http://weibo.com/279510455" target="_blank">Create by lanqy</a>
            <b title="关闭">x</b>
        </span>
    </body>

</html>