<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$merchandise = htmlspecialchars($_POST['merchandise'], ENT_QUOTES);
$order = htmlspecialchars($_POST['order'], ENT_QUOTES);
print "私の名前は、".$name;
echo '<br />';
print "ご希望の商品は、".$merchandise;
echo '<br />';
print "注文数は、".$order;
?>