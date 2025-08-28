<?php

if (!isset($_SESSION['idUserSesion'])) {
      header("Location:../login.html");
      exit();
    }
