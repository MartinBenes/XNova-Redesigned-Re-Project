<?php

/**
 * Editd by Anthony
 *
 * I have translated this page into English
 *
 * Copyright 2008 by MadnessRed
 */

/**
 * annonce2.php
 *
 * @version 1.0
 * @copyright 2008 by ??????? for XNova
 */

define('INSIDE'  , true);
define('INSTALL' , false);

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.'.$phpEx);

if ($game_config['enable_announces'] == 0) {
	message("Market disabled");
}

$actions = $_GET['action'];

if($actions == 2)
{
$page .=<<<HTML
<center>
<br>
<table width="600">
<td class="c" colspan="10" align="center"><b><font color="white">Add a trade</font></b></td></tr>
<td class="c" colspan="10" align="center"><b>Resources for sale</font></b></td></tr>

<form action="annonce.php?action=5" method="post">
<tr><th colspan="5">Metal</th><th colspan="5"><input type="texte" value="0" name="metalvendre" /></th></tr>
<tr><th colspan="5">Crystal</th><th colspan="5"><input type="texte" value="0" name="cristalvendre" /></th></tr>
<tr><th colspan="5">Deuterium</th><th colspan="5"><input type="texte" value="0" name="deutvendre" /></th></tr>

<td class="c" colspan="10" align="center"><b>Resources wanted</font></b></td></tr>
<tr><th colspan="5">Metal</th><th colspan="5"><input type="texte" value="0" name="metalsouhait" /></th></tr>
<tr><th colspan="5">Crystal</th><th colspan="5"><input type="texte" value="0" name="cristalsouhait" /></th></tr>
<tr><th colspan="5">Deuterium</th><th colspan="5"><input type="texte" value="0" name="deutsouhait" /></th></tr>
<tr><th colspan="10"><input type="submit" value="Add trade" /></th></tr>

<form>
</table>
HTML;

display($page,"Player Trades");
}
?>
