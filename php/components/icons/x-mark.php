<?php
$class = $class ?? "";
$defaultSize = "w-6 h-6";
if (str_contains($class, "w-")) {
    $defaultSize = str_replace("w-6", "", $defaultSize);
}
if (str_contains($class, "h-")) {
    $defaultSize = str_replace("h-6", "", $defaultSize);
}
?>
<svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="<?= htmlClass($class, $defaultSize) ?>"
    >
    <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M6 18L18 6M6 6l12 12"
        />
</svg>