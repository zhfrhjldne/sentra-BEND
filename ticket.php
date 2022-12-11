<div class="page">
    <div class="fileticket">

    <br>
    <br>
<form method="POST" name="frmpost" action="">

<table style=" border-color:black;" width="500" border="1" cellpadding="0" cellspacing="0">

<tr>
<th><h2 style="font-family: sans-serif; font-size: 14px; text-align: left;">  &nbsp Buyer Information
    <br> &nbsp Make sure all the informations is correct!</h2></th>
</tr>

<tr>
<td>
<table style="" width="500" border="0" cellpadding="6" cellspacing="0" align="center">
<tr height="70">
<td><p>Email :<br><input name="email" type="text" placeholder="Email Address">
<br>*Tickets will be sent to your email. </td>
</tr>

<tr height="40">
<td><p>First Name :<input name="firstname" type="text" size="20" placeholder="First Name" ></td>
<td>Last Name :<input name="lastname" type="text" size="20" placeholder="Last Name" ></td>
</tr>

<tr height="80">
<td> Telephone Number : <br><input type="text" name="notelp" placeholder="Telephone Number"></td>
</tr>

<tr height="40">
<td><p>Day :<br><input name="day" type="date" placeholder="day">
<br>*Beetwen 12-15 December. </td>
</tr>

<tr height="40">
<td> Ticket : <select name="ticket">
               <option value="Early Bird">Early Bird
               <option value="Presale 1">Presale 1
               <option value="Presale 2">Presale 2
               <option value="Normal">Normal
               </select></tr>

<tr height="80">
<td> Jumlah : <br><input type="text" name="jumlah" placeholder="Jumlah Tiket"></td>
</tr>

<tr>
<td align="right" colspan="2"><input style="background-color:rgb(239, 206, 192); border-radius: none; width: 50px;" type="submit" name="btnOk" value="Buy" /></td>
<td><input style="background-color:  rgb(239, 206, 192); border-radius: none;" type="reset" name="btnCancel" value="Cancel" />
</td>
</tr>

</table>
</table>


<div class="t">
<center><p style= "font-family: cq mono; font-size: 20px"> This is Your ticket!</p></center>

<?php

    $email=$_POST['email'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $notelp=$_POST['notelp'];
    $day=$_POST['day'];
    $ticket=$_POST['ticket'];
    $jumlah=$_POST['jumlah'];

if ($ticket=="Early Bird"){
   $harga=100000;
   }
else if ($ticket=="Presale 1"){
   $harga=175000;
   }
   else if ($ticket=="Presale 2"){
    $harga=200000;
   }
else {
   $harga=275000;
   }
$totalharga=$jumlah*$harga;
?>

<table border="0" width="500" cellpadding="1" cellspacing="1">

<tr>
<td>Email</td>
<td>:</td>
<td><?php echo '&nbsp'.$email;?></td>

</tr>

<tr>
<td>Full Name</td>
<td>:</td>
<td><?php echo '&nbsp'.$firstname;?>
<?php echo '&nbsp'.$lastname;?>
</td>
</tr>

<tr>
<td>Telephone Number</td>
<td>:</td>
<td><?php echo '&nbsp'.$notelp;?></td>
</tr>

<tr>
<td>Day </td>
<td>:</td>
<td><?php echo '&nbsp'.$day;?></td>
</tr>

<tr>
<td>Ticket</td>
<td>:</td>
<td><?php echo '&nbsp'.$ticket;?></td>
</tr>

<tr>
<td>Jumlah Ticket</td>
<td>:</td>
<td><?php echo '&nbsp'.$jumlah;?></td>
</tr>

<tr>
<td>Total Pembayaran</td>
<td>:</td>
<td><?php echo "Rp ".$totalharga;?></td>
</tr>
</table>

