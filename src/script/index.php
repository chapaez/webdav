<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webdav/autoload.php');
use Uni\WebDav as UW;
if($_POST['command']=='add')
    UW\WebDavFacade::addPostPage();
elseif ($_POST['command']=='del')
    UW\WebDavFacade::delPostPage();