<?php

require 'vendor/autoload.php';

use \Done\Subtitles\Subtitles;

function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}

if (isset($_POST['vtt'])) {

    $output = [];
    
    $string = $_POST['vtt'];
    $subtitles = @Subtitles::load($string, 'srt');
    $blocks = $subtitles->getInternalFormat(); // array
    foreach ($blocks as $block) {
        foreach ($block['lines'] as $line) {
            $output[]= strip_tags($line);
        }
    } 
    $output = implode("\n", $output);
    if ($_POST['mode'] == 'show') {
        echo '<textarea name="vtt" cols=60 rows=40>';
        echo $output;
        echo '</textarea><br/><br/>';
        $d = isLocalhost() ? "/" : "/vtt";
        echo "<button onclick='window.location.href=\"$d\"'>VOLTAR</a>";
    } else {
        header('Content-Disposition: attachment; filename="sample.txt"');
        header('Content-Type: text/plain'); # Don't use application/force-download - it's not a real MIME type, and the Content-Disposition header is sufficient
        header('Content-Length: ' . strlen($output));
        header('Connection: close');
        
        echo $output;
    }
} else {
    ?>
    <form method="post">
    <textarea name="vtt" cols=60 rows=40></textarea><br/><br/>
    
    <label><input checked type="radio" id="html" name="mode" value="show">
    Apenas exibir</label><br/>
    <label><input type="radio" id="css" name="mode" value="download">
    Fazer download</label><br/><br/>
    
    <radiogroup></radiogroup>
    <button>ENVIAR</button>
    </form>
    <?php
}