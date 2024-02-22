
<?php
if(isset($_POST['contact_mail'])){
    

$name=$_POST['Name'];
// $email=$_POST['email'];
$phone=$_POST['Phone'];
$city=$_POST['City'];    

$to='vasu.azasoft@gmail.com';
$from='omegafertilitycentre@gmail.com';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Omegafertilitycentre<'.$from.">\r\n".'Reply-To: '.$from."\r\n" .'X-Mailer: PHP/' . phpversion();
$message='<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#8d8e90">
		<tr>
		<td><table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">
        <tr>
		<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr bgcolor="#34498a">
		<td width="61"><img src="" height="56" style="margin-left: 12px;" border="0" alt=""/></a></td>
		<td width="393"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td height="46" align="right" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td width="100%"><font style="font-family:Myriad Pro, Helvetica, Arial, sans-serif; color:#000C99; font-size:8px; text-transform:uppercase"><a href= "#" style="color:#fff; text-decoration:none; font-family:Georgia, Times New Roman, Times, serif; font-size:20px;"><strong>Omegafertilitycentre</strong></a></font></td><td width="4%">&nbsp;</td>
		</tr>
		</table></td>
		</tr>
		</table></td>
		</tr>
		</table></td>
        </tr>
        <tr>
		<td align="center">&nbsp;</td>
        </tr>
        <tr>
		<td>&nbsp;</td>
        </tr>
        <tr>
		<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td width="10%">&nbsp;</td>
       <td width="61"><a href= "" target="_blank"><img src="" height="56" style="margin-left: 12px;" border="0" alt=""/></a></td>
		<td width="10%">&nbsp;</td>
		</tr>
		<tr>
		<td colspan="3">
		<table align="center" border="0" cellspacing="10" width="78%" style="background:#f7f7f7;margin-top:10px;border:1px solid #e8e8e8;border-radius:7px">
		<tbody>
		<tr>
		<td width="62%" style="font-size:12px;font-family:Arial,Helvetica,sans-serif;color:#000;text-align:left;line-height:20px">Name:&nbsp;'.$name.'</a></td>
		</tr>

        

		<tr>
		<td width="62%" style="font-size:12px;font-family:Arial,Helvetica,sans-serif;color:#000;text-align:left;line-height:20px">Phone No:&nbsp;'.$phone.'</a></td>
		</tr>         
                
        <tr>
		<td width="62%" style="font-size:12px;font-family:Arial,Helvetica,sans-serif;color:#000;text-align:left;line-height:20px">City:&nbsp;'.$city.'</a></td>
		</tr>
        
		</tbody>
		</table>

		</td>
		</tr>

		</table></td>
        </tr>
        <tr>
		<td>&nbsp;</td>
        </tr>
        <tr>
		<td>&nbsp;</td>
        </tr>
		<tr>
		<td align="center"><font style="color:#000C99; font-size:10px; text-transform:uppercase"><strong>Thanks With Regards <br> Omegafertilitycentre</strong></font></td>

		</tr>
        <tr>
		<td>&nbsp;</td>
        </tr>
        <tr>
		<td>&nbsp;</td>
        </tr>
        <tr>
		<td align="center"><font style="color:#231f20; font-size:11.5px"><strong></strong></font></td>
        </tr>
        <tr>
		<td>&nbsp;</td>
        </tr>
		</table></td>
		</tr>
		</table>';
        $mail_send=mail($to, $email, $message, $headers);
        if(isset($mail_send))
          {
           	echo "<script> alert('Thank you for submitting the form. We will contact you soon!');
		  window.location = 'index.html';	</script>";  
        }
        
        
        else{
                echo "<script>
                    alert('sorry');
		      window.location = 'index.html';	</script>";  
            }

        echo '<script language="javascript">;
            echo alert("come here");
            echo </script>';



}
?>