<?php
$href           = $href ?? "";
$target         = $target ?? "_self";
$defaultClass   = "block px-3 py-1 rounded bg-blue-200 hover:bg-blue-300/70 active:bg-blue-300/90";
$class          = $class ?? "";
$class          = $classOverwrite ?? htmlClass($defaultClass, $class);
$text           = $text ?? "";
?>
<?= component("anchor", [
    "href" => $href,
    "target" => $target,
    "classOverwrite" => $class,
    "text" => $text,
]) ?>