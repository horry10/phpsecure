<link rel="stylesheet" type="text/css" href="<?=plugin_http_path('assets/css/style.css')?>">

<form method = "post" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="file" name="image1">

	<button>submit</button>
</form>
<div style="padding:20px;max-width: 600px;margin:auto;background: #eee;">
	<center><h3>This is a plugin</h3></center>
	<center>This plugin is being rendered from the file: <?=plugin_path('views/view.php')?></center>
</div>

<script src="<?=plugin_http_path('assets/js/plugin.js')?>"></script>