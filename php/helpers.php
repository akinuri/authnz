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
    return implode(" ", func_get_args());
}

