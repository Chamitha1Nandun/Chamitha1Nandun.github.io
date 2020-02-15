<?php include('server.php') ?>
<!DOCTYPE html>

<html>
<head>
  <title>Income add page</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <meta name="author" content="Chamitha Nandun Jayalath">
</head>
<body>
  <div class="header">
  <h2>Add Income</h2>	
  </div>
	
  <form method="post" action="income.php">
  	<?php include('errors.php'); ?>
		
	<div class="input-group">
  	  <label>Income Date</label>
  	  <input type="date" placeholder="Income date" name="incomedate" value="<?php echo $incomedate; ?>">
  	</div>
	<div class="input-group">
  	  <label>Description</label>
  	  <input type="text" placeholder="Description" name="description" value="<?php echo $description; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Credit</label>
  	  <input type="text" placeholder="Credited Amount" name="credit" value="<?php echo $credit; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Debit</label>
  	  <input type="text" placeholder="Debit Amount" name="debit" value="<?php echo $debit; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="add_income">Add</button>
  	</div>
  	<p>        
     Done adding? <a class='member' href='data_accounts.php'>Go Back</a>
    </p>
  </form>
</body>
</html>