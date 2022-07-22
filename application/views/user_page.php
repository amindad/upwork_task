<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Users Page</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.table{
	 border-collapse:collapse;	
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Detail  Page</h1>

	<div id="body">
    <p>All Counts</p>
	  <table width="100%" border="1" class="table">
		  <tbody>
		    <tr>
		      <td width="15%">Verified Users</td>
		      <td width="26%">Verified users with active products attached</td>
		      <td width="23%"><p>Count of all products</p></td>
		      <td width="36%">Active products which do not belong to any user</td>
	        </tr>
		    <tr>
		      <td><b><?php echo $verifiedUsers;?></b></td>
		      <td><b><?php echo $userWithActiveAttachedProducts;?></b></td>
		      <td><b><?php echo $allProductsCount;?></b></td>
		      <td><b><?php echo $activeProductsDoNotLinkedTouser;?></b></td>
	        </tr>
	    </tbody>
	  </table>
      
      <p style="color:#2E0E9B"><b>Amount of all active attached products (if user1 has 3 prod1 and 2 prod2 which are active, user2 has 7 prod2 and 4 prod3, prod3 is inactive, then the amount of active attached products will be 3 + 2 + 7 = 12).</b></p>
      <b>Amount Count : $<?php echo $AmountOfActiveAttachedProducts;?></b>
      <p>List of all users with active attached products. In this case, the price for products with inactive status will not be calculated</p>
      
      <table width="100%" border="1" class="table">
		  <tbody>
		    <tr>
		      <td width="9%">User Id</td>
		      <td width="32%">Full Name</td>
		      <td width="10%"><p>No Of Products</p></td>
		      <td width="49%">Amount  of all active attached products ( Inactive products prices are ignored) </td>
	        </tr>
            <?php if($allActiveAttachedProductsList):
			   foreach($allActiveAttachedProductsList as $row):?>
		    <tr>
		      <td><b><?php echo $row->id;?></b></td>
		      <td><b><?php echo $row->full_name;?></b></td>
		      <td><b><?php echo $row->NoOfProducts;?></b></td>
		      <td>$<b><?php echo $row->activeProductPrice;?></b></td>
	        </tr>
            <?php endforeach; 
			  else:?>
            <tr><td colspan="4">No data found</td></tr>
            <?php endif;?>
	    </tbody>
	  </table>
      
      
      <p style="color:#2E0E9B"><b>. Summarized price of all active attached products (from the previous subpoint if prod1 price is 100$, prod2 price is 120$, prod3 price is 200$, the summarized price will be 3 x 100 + 9 x 120 = 1380).</b></p>
      <b>Summerized Price : $<?php echo $summerizedPrice;?></b>
      <p>List of all users with active attached products. In this case, the price for products with inactive status will not be calculated</p>
      
      <table width="100%" border="1" class="table">
		  <tbody>
		    <tr>
		      <td width="9%">User Id</td>
		      <td width="32%">Full Name</td>
		      <td width="10%"><p>No Of Products</p></td>
              <td width="10%"><p>Total Price</p></td>
		      <td width="49%">Summerized amount active attached products ( Inactive products prices are ignored) </td>
	        </tr>
            <?php if($summerizedProductsList):
			   foreach($summerizedProductsList as $row):?>
		    <tr>
		      <td><b><?php echo $row->id;?></b></td>
		      <td><b><?php echo $row->full_name;?></b></td>
		      <td><b><?php echo $row->NoOfProducts;?></b></td>
              <td>$<b><?php echo $row->totalPrice;?></b></td>
		      <td>$<b><?php echo $row->summerizedActiveProductsPrice;?></b></td>
	        </tr>
            <?php endforeach; 
			  else:?>
            <tr><td colspan="5">No data found</td></tr>
            <?php endif;?>
	    </tbody>
	  </table>
      
      
      <p style="color:#2E0E9B"><b>. Summarized prices of all active products per user. For example - John Summer - 85$, Lennon Green - 107$.</b></p>

      <p>List of all users with active attached products. In this case, the price for products with inactive status will not be calculated</p>
      
      <table width="100%" border="1" class="table">
		  <tbody>
		    <tr>
		      <td width="9%">User Id</td>
		      <td width="32%">Full Name</td>
		      <td width="49%">Summerized amount active attached products ( Inactive products prices are ignored) </td>
	        </tr>
            <?php if($summerizedProductsList):
			   foreach($summerizedProductsList as $row):?>
		    <tr>
		      <td><b><?php echo $row->id;?></b></td>
		      <td><b><?php echo $row->full_name;?></b></td>
		      <td>$<b><?php echo $row->summerizedActiveProductsPrice;?></b></td>
	        </tr>
            <?php endforeach; 
			  else:?>
            <tr><td colspan="3">No data found</td></tr>
            <?php endif;?>
	    </tbody>
	  </table>
      <h3>Exhange Rates for USD and RON</h3>
      <?php print_r( $exchangeRatesForUSDAndRON);?>
    </div>

	
</div>

</body>
</html>
