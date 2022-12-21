<?php 
    $con = new mysqli('localhost','root','','mybank');
    define('bankName', 'BANK MANAGEMENT',true);
    $ar = $con->query("select * from userAccounts,branch where id = id AND userAccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>