home page this is<br/><br/>
<?php
echo "loggen_id: ".$session->logged_in."<br/>";
echo "is_admin: ".$session->isAdmin();
echo "<br/><br/>";
include("includes/view_active.php");
echo "<br/><br/>";
echo "<b>Member Total:</b> ".$database->getNumMembers()."<br>";
echo "There are $database->num_active_users registered members and ";
echo "$database->num_active_guests guests viewing the site.<br><br>";
?>

