<?php
if(!mysql_connect("cjseahor_stephen","cjseahorn","walter1925"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("cjseahor_stephenTest"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>