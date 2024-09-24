<?php

$password = 'ma1234';

echo $hash = password_hash($password, PASSWORD_DEFAULT);
echo "<br>";


if (password_verify($password, $hash)) {
	echo "Successfully Login";
}

else{
	echo "Can not Login";
}

?>