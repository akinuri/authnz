<?php
$type           = $type ?? "button";
$defaultClass   = "bg-blue-200 hover:bg-blue-300/70 active:bg-blue-300/90";
$class          = $class ?? "";
$text           = $text ?? "";
$formaction     = $formaction ?? "";
$data           = $data ?? [];
?>
<?= component(
    "button",
    [
        "type" => $type,
        "class" => htmlClass($defaultClass, $class),
        "text" => $text,
        "formaction" => $formaction,
        "data" => $data,
    ],
    $content,
) ?>