<?php
$req = new \Core\Request;

$files = $req->upload_files();
dd($req->upload_errors);
dd('Upload files'.implode("<br>",$files));
/**put the controller code for your plugin here**/