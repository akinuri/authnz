<?php

function isLoggedIn(): bool {
    return false;
}

function redirect(string $uri): bool {
    header("Location: $uri");
    exit;
}

