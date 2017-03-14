<?php
session_start();
echo "work";

echo "<pre>";
print_r($_POST);
print_r($_SESSION);
echo "</pre>";

?>

<div style="background-color: grey; margin-top: auto; height: 5%">
    <p>
        <button style="margin: 0.5%">Sign out</button>
        <button>Update</button>
        <button>Delete</button>
        <button>Confirm</button>
    </p>
</div>
