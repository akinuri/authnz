<?php
$href           = $href ?? "";
$target         = $target ?? "_self";
$defaultClass   = "text-blue-700 hover:underline active:text-blue-800";
$class          = $class ?? "";
$class          = $classOverwrite ?? htmlClass($defaultClass, $class);
$text           = $text ?? "";
?>
<a
    href="<?= $href ?>"
    target="<?= $target ?>"
    class="<?= $class ?>"
    >
    <span><?= $text ?></span>
</a>