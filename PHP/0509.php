<!-- foreach -->
<?php
$arr = array(1,4,7,3,5);
foreach ($arr as $key => &$value) {
  echo "{$key}: {$value}";
  $value = $value * 2;
  echo "=>$value\n";
}
// unset($value)しなければ残ってしまう
echo "value: {$value}\n";
// 最後の要素への参照を解除
unset($value);
echo "unset value: {$value}\n";//=>""
  ?>

<!-- リファレンス -->
<?php

 ?>
