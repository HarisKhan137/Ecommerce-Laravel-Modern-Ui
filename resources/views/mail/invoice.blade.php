<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

Dear {{$customername}}


Your order has been placed successfully.

Following are the order details.

<h4>Order Detail</h4>

<ul >
<li>Order ID: {{$shipping['order_id'] }}</li>
<li>Placed on: {{$data['date']}}</li>
<li>Order Status: Pending</li>
<li>Delivery Method: Shipment (Cash on Delivery)</li>

</ul>







<table width="100%" cellspacing="0" cellpadding="8" border="1">
<tbody>
<tr style="background-color:silver">
<td>Product Name</td>
<td>Product</td>
<td>Qty</td>
<td>Unit Price</td>
<td>Total</td>
</tr>
<tr>
<td></td>
<td>2nd HDD/SSD SATA-III Caddy for Universal CD/DVD-ROM (Slim Version)</td>
<td>1</td>
<td>600</td>
<td>600</td>
</tr>

</tbody></table>

Best Regards,
Team Imprint


</body>
</html>