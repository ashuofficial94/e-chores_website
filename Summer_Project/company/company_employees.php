<?php
	$_SESSION['content'] = 'List of all employees of the company';
	$value = $_SESSION['company_info'][0];
?>
<form id="myForm" method="POST" action="../main/search.php">
	<input type="hidden" value= <?php echo $value ?> name="keyword">
</form>

<script>
	document.getElementById("myForm").submit();
</script>