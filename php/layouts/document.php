<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Untitled Page" ?></title>
    <?php
        foreach ($headScripts ?? [] as $script) {
            echo "<script src=\"$script\"></script>";
        }
    ?>
</head>
<body class="bg-slate-200 <?= $bodyClass ?? "" ?>">
    
    <?= $content ?? "" ?>
    
    <?php
        foreach ($bodyScripts ?? [] as $script) {
            echo "<script src=\"$script\"></script>";
        }
    ?>
    
</body>
</html><?php
if (isset($GLOBALS["executionStartedAt"])) {
    $elapsedTime = microtime(true) - $GLOBALS["executionStartedAt"];
    $elapsedTime = number_format($elapsedTime, 6, ".", "");
    echo "<!-- Generated in $elapsedTime seconds. -->";
}