<?php

function isLoggedIn(): bool {
    return false;
}

function redirect(string $uri): bool {
    header("Location: $uri");
    exit;
}

function getCurrentURL(): string {
    return $_SERVER["REQUEST_URI"];
}

function isCurrentURL(string $url): string {
    return getCurrentURL() == $url;
}

function htmlClass(): string {
    $classes = func_get_args();
    $classes = normalizeHtmlClasses(...$classes);
    // TODO: $classes = handleTailwindDuplicates($classes);
    $classes = array_unique($classes);
    $classes = implode(" ", $classes);
    return $classes;
}

function normalizeHtmlClasses(): array {
    $classes = func_get_args();
    $classes = array_filter($classes, fn ($item) => !empty(trim($item)));
    $classes = expandHtmlClasses(...$classes);
    return $classes;
}

function expandHtmlClasses(): array {
    $classes = [];
    foreach (func_get_args() as $arg) {
        if (str_contains($arg, " ")) {
            $classes = array_merge($classes, preg_split("/\s+/", $arg));
        } else {
            $classes[] = $arg;
        }
    }
    return $classes;
}

function joinPaths(array $paths, string $seperator = DIRECTORY_SEPARATOR) {
    $paths = array_filter($paths, function ($path) {
        return is_string($path) && strlen($path);
    });
    $paths = join($seperator, $paths);
    $pattern = "/(\\\\\/)+|\\\+|\/+/";
    $paths = preg_replace($pattern, $seperator, $paths);
    return $paths;
}

define("COMPONENTS_PATH", __DIR__ . "/components");

function component(string $componentName, array $data = []) {
    $componentPath = realpath(joinPaths([COMPONENTS_PATH, "$componentName.php"]));
    if (!file_exists($componentPath)) {
        throw new Exception("Component ($componentName) not found.");
    }
    extract($data);
    ob_start();
    $isIncluded = include $componentPath;
    $output = ob_get_clean();
    if ($isIncluded === 1) {
        return $output;
    }
    return $isIncluded;
}

define("LAYOUTS_PATH", __DIR__ . "/layouts");

function layout(string $layoutName, array $data = [], $content = "") {
    $layoutPath = realpath(joinPaths([LAYOUTS_PATH, "$layoutName.php"]));
    if (!file_exists($layoutPath)) {
        throw new Exception("Layout ($layoutName) not found.");
    }
    extract($data);
    ob_start();
    $isIncluded = include $layoutPath;
    $output = ob_get_clean();
    if ($isIncluded === 1) {
        return $output;
    }
    return $isIncluded;
}

function ob_start_onshutdown($callback) {
    register_shutdown_function($callback);
    ob_start();
}
