<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['userid']);
unset($_SESSION['userpasswd']);

echo "
<script>
loaction.href='../index.php'
<?script> ";