<?php

$hash = password_hash('user', PASSWORD_DEFAULT);
print_r($hash);

if (password_verify('1232', $hash)) {
    print_r("+");
}