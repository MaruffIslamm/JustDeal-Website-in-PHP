
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
session_unset();
session_destroy();
?>
?>
<script>
alert('logout success...');
window.location='Index.php'
</script>
?php>
</body>
</html>