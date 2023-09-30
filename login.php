<?php
$username = 12345;
$password = 1234;

if ($username == 12345 && $password == 1234) {
    echo "Berhasil login";
} else if ($username == 2323 && $password == 12345) {
    echo "Username salah";
} else if ($username == 12345 && $password == 8888) {
    echo "Password salah";
} else {
    echo "Mohon maaf username atau password salah";
}
?>