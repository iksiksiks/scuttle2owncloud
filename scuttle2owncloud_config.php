<?php
/**
* scuttle2owncloud_config.php
* released under MIT License(see extra file)
* version 0.9.1a
* (c) by repat, <repat[at]repat[dot]de>, http://repat.de
* June 2013
* Forked and modified by iksiksiks in October 2019; added datetime parsing
*/

// Enter user(name), password and database.
// Everything else should be fine unless you specifically changed it before
$scuttleHost = "localhost";
$scuttleUser = "";
$scuttlePassword = "";
$scuttleDb = "";
$scuttleBmTable = "sc_bookmarks";
$scuttleTagsTable = "sc_tags";
// uncommend this in case of semantic scuttle
//$scuttleTagsTable = "sc_bookmarks2tags";

$owncloudHost = "localhost";
$owncloudUser = "";
$owncloudPassword = "";
$owncloudDb = "";
$owncloudBmTable = "oc_bookmarks";
$owncloudTagsTable = "oc_bookmarks_tags";
$owncloudUsername = "";

// Don't change these!
$ID = 0;
$TAG = 1;
$TITLE = 1;
$URL = 2;
$DESCRIPTION = 3;
$DATETIME = 4;
$MODIFIED = 5;
?>
