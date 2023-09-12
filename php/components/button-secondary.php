<?php
$type           = $type ?? "button";
$defaultClass   = "bg-slate-200 hover:bg-slate-300/70 active:bg-slate-300/90";
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