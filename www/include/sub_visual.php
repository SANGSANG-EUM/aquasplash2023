<?php
include_once('./_common.php');

function sub_visual($sub_id, $additional_class = ''){
  $visual_class = $sub_id . "_vs";

  // $additional_class에 'back'가 포함되어 있다면 'back' 클래스 추가
  if ($additional_class === 'back') {
    $visual_class .= ' back';
  }
?>
<div class="sub_visual <?php echo $visual_class; ?>">
  <button type="button" onclick="history.go(-1)" class="sub-vs-back mainsec3-btn"><img src="/source/img/icon-back.png" alt=""><span>Back</span></button>
</div>

<?php } ?>