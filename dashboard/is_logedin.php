<?php
if (isset($_COOKIE["user_name"]) != "admin" && isset($_COOKIE["is_logged_in"]) != "1") {
      header("Location: /");
      exit;
}
