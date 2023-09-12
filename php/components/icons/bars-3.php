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
        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
        />
</svg>