<?php
/* © LeoCRAFT Digital, "Catana" https://catana.leocraft.digital */
include($_SERVER['DOCUMENT_ROOT'].'/engine/config.php');
include($_SERVER['DOCUMENT_ROOT'].'/engine/core/database/connection.php');

$search = $_POST['search'];
print_r($search);
$list = getData("SELECT * FROM records WHERE (page_id=".$search['page_id'].") AND (title LIKE '%".$search['search']."%') ORDER BY num ASC, date DESC");

foreach($list as $item) {
    if($item['public']) { $public = 'mdi-eye-outline'; $class = ''; }
    else { $public = 'mdi-eye-off'; $class = ' class="off"'; }
    echo '<li id="'.$item['id'].'"'.$class.'>';
    echo '<div class="cover" style="background-image: url('.$item['img'].')"></div>';
    echo '<div>';
    echo '<p>'.$item['title'].'</p>';
    echo '</div>';
    echo '<div class="func-admin">';
    echo '<a id="edit" help="Edit"><i class="mdi mdi-pencil fs-3x"></i></a>';
    echo '<a id="public" help="Public Off"><i class="mdi '.$public.' fs-3x"></i></a>';
    echo '<a id="del" help="Delete"><i class="mdi mdi-delete fs-3x"></i></a>';
    echo '</div>';
    echo '</li>';
}