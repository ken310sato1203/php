<?php
$company = htmlspecialchars($_POST['company'], ENT_NOQUOTES);
print "会社名は" . $company . "ですね";
print "会社名は" . $_POST['company'] . "ですね";