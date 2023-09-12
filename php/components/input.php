<?php
$type           = $type ?? "text";
$defaultClass   = "px-2 py-1 border rounded border-slate-300";
$class          = $class ?? "";
$name           = $name ?? "";
$placeholder    = $placeholder ?? "";
$value          = $value ?? "";
$autofocus      = isset($autofocus);
?>
<input
    type="<?= $type ?>"
    class="<?= htmlClass($defaultClass, $class) ?>"
    name="<?= $name ?>"
    placeholder="<?= $placeholder ?>"
    value="<?= $value ?>"
    <?php if ($autofocus) echo "autofocus"; ?>
    />