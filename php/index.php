<?php

require "helpers.php";

if (isLoggedIn() == false) {
    redirect("login.php");
}

