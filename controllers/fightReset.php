<?php

session_start();
session_destroy();

header('Location: /validation-poo-master');
exit();