<!-- POST -->
<?php
$company = htmlspecialchars($_POST["company"], ENT_QUOTES);
print "会社名は" . $company . "ですね";
?>

<!-- GET -->
<?php
$company = htmlspecialchars($_GET["company"], ENT_QUOTES);
print "<br />" . "会社名は" . $company . "ですね";
?>