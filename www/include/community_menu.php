<?php
include_once('./_common.php');

function ComuMenu($active){
    $sub_tab = '';
        $sub_tab .= "/media|Media,";
        $sub_tab .= "/faq|FAQ,";
        $sub_tab .= "/qa|Q&A";

    $sub_tab01 = explode(",", $sub_tab);
?>

<ul class="comu-menu-ul">
    <?php
    for ($i = 0; $i < count($sub_tab01); $i++) {
        $sub_tab02 = explode("|", $sub_tab01[$i]);
        // $link = $sub_tab02[0];

        if ($lang == "ko") {
            $link = "{$sub_tab02[0]}_ko";
        } elseif ($lang == "") {
            $link = "{$sub_tab02[0]}_en";
        }
        ?>
        
        <li class="comu-menu-li <?=$active==$i?'active':'';?>"><a href="<?=$link?>"><?=$sub_tab02[1]?></a></li>
    <?php } ?>
</ul>

<?php } ?>