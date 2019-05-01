<html>
<body>
<script language="php">
$mailto = "lietsangram2013@gmail.com";
$mailsubj = "Sangram_Registration";
$name = $_POST['name'];
$mailhead = "From: $name\n";
$event = $_POST['event'];
$mobile = $_POST['mob'];
$college = $_POST['college'];
$mailbody = "Name: $name \n Mob.: $mobile \n Event: $event \n College: $college";
mail($mailto, $mailsubj, $mailbody, $mailhead); 
</script>
</body>
</html>