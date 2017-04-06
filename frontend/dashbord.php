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
<div>
    <table>
        <tr>
            <th width="100">Date</th>
            <th width="100">Region</th>
            <th width="200">Subject</th>
            <th width="150">Author</th>
            <th width="200">Previous approval</th>
            <th width="700">Application</th>
            <th width="200">Status</th>
            <th width="200">Actions</th>
        </tr>
        <tr>
            <td width="100">22.03.2017</td>
            <td width="100">East</td>
            <td width="200">Moving</td>
            <td width="150">Slavko O. V.</td>
            <td width="200">Ivanov I. I.</td>
            <td width="700">&&@@&&&&&&&&&&&&&&&&&``&&&&</td>
            <td width="200">Work</td>
            <td width="200">Edit | Delete | View</td>
        </tr>
    </table>
</div>
