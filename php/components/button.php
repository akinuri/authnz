<?php
$type           = $type ?? "button";
$defaultClass   = "px-3 py-1 rounded";
$class          = $class ?? "";
$text           = $text ?? "";
$formaction     = $formaction ?? "";
$data           = $data ?? [];
$content        = $content ?? "<span>$text</span>";
?>
<button
    type="<?= $type ?>"
    class="<?= htmlClass($defaultClass, $class) ?>"
    <?php if ($formaction) echo "formaction=\"$formaction\""; ?>
    <?php printDataAttrs($data) ?>
    >
    <?= $content ?>
</button>