<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>添加音乐</title>
		<style>
		.upload-music{margin:70px auto 20px;width:700px;}
		li{list-style:none;}
		</style>
		<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" />
	</head>
	<body>
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Music uploader</a>
          <div class="nav-collapse"></div>
        </div>
      </div>
    </div>
	<div class="upload-music">
		<?php echo validation_errors(); ?>
		<form action="<?php echo base_url();?>music/upload" method="post" enctype="multipart/form-data" />
		<table class="table table-striped">
			<tr>
			<td>歌    手：</td>
			
			<td><input type="text" class="input-xlarge" name="artist"></td>
			</tr>
			<tr>
			<td>歌曲名字：</td>
			
			<td><input type="text" name="song_name" class="input-xlarge"/></td>
			</tr>
			<tr>
			<td>歌    曲：</td>
			
			<td><input type="file" name="song_url" /> mp3格式文件</td>
			</tr>
			<tr>
			<td>专辑名字：</td>
			
			<td><input type="text" name="album"  class="input-xlarge"/></td>
			</tr>
			<tr>
			<td>专辑封面：</td>
			
			<td><input type="file" name="album_image" /> jpg/gif/png格式</td>
			</tr>
			<tr>
			<td></td>
			
			<td><input type="submit" id="upload" class="btn-large btn-primary" value="上传歌曲"/></td>
			</tr>
			</table>
		</form>
	</div>
	</body>
</html>