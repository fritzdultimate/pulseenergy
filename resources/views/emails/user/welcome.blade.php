<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div bgcolor="#323232">
        <table cellpadding="0" cellspacing="0" width="100%" align="center" border="0" bgcolor="#000000">
         <tbody><tr>
         <td width="100%" align="center" bgcolor="#323232" style="padding:30px">
         
        <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
         <tbody><tr>
         <td width="650" bgcolor="#000000">
         <table width="650" border="0" cellspacing="0" cellpadding="0">
         <tbody><tr>
         <td><table style="width:100%">
         <tbody><tr>
         <td width="30%" height="80" bgcolor="#000000" style="padding-left:20px;text-align:left">
         <a href="https://www.{{ env('APP_NAME') }}.com" target="_blank">
         <img src="{{ env("EMAIL_LOGO") }}" alt="{{ env('APP_NAME') }}.com" border="0" style="display:block" class="CToWUd">
         </a>
         </a>
         </td>
         <td width="40%"><div style="min-width:50px"></div></td>
         <td width="30%" height="80" align="right" bgcolor="#000000" style="padding-right:20px"></td>
         </tr>
        </tbody></table>
        </td>
         </tr>
         </tbody></table>
         </td>
         </tr>
        </tbody></table><table width="650" border="0" cellspacing="0" cellpadding="0">
         
         <tbody><tr>
         <td width="650" bgcolor="#ffffff" style="padding:40px 0 30px">
         <table width="650" border="0" cellspacing="0" cellpadding="0">
         <tbody><tr>
         <td width="30"></td>
         <td width="590" align="left" dir="ltr" style="font-family:Arial,Helvetica,sans-serif;color:#000000;font-size:14px">
         <div style="padding:0 0 20px;font-size:22px;font-weight:bold;color:#e41824">
         Your Account Details </div>
         <p>Thank you for choosing an <strong>{{ env("SITE_NAME") }}</strong> to start your investment journey.</p>
        <p>
         Your {{ env("SITE_SHORT_NAME") }} ID is: <span style="color:red;font-weight:bold">{{ $details["uid"] }}</span>.
        </p>
        <p>
            Your {{ env("SITE_SHORT_NAME") }} Username is: <span style="color:red;font-weight:bold">{{ $details['username'] }}</span>.
           </p>
        <p>
            You can now start making investment with us.

        </p>
        <br><br>
        <div style="padding:0px 0px 25px 0px">
         <table border="0" cellpadding="0" cellspacing="0">
         <tbody><tr>
         <td style="width:60px;text-align:center">
         <img src="https://ci3.googleusercontent.com/proxy/tyVV4Smn247fWjX8MGw3tVp8rgJC4IKfGq50DQtbtBsbJQZnvNeO-zcTKpLWgaGcwseaVbKq-ONnhn9VS-bINjn9kL1DAs9morOH=s0-d-e1-ft#https://cloud.xm-cdn.com/assets/img/emails/welcome/1.png" width="23" height="80" align="absmiddle" class="CToWUd">
         </td>
         <td style="font-family:Arial,Helvetica,sans-serif">
         <font style="font-size:15px;font-weight:bold;text-transform:uppercase">LOGIN TO YOUR FREE ACCOUNT</font>
         <br><br>
         To start investing with {{ env("SITE_SHORT_NAME") }}, you must create session with us, and to do that, you must login. <br>
         </td>
         </tr>
         </tbody></table>
        </div>
        
        <a href="https://www.{{ env('APP_NAME') }}.com/login" style="color:#ffffff;text-decoration:none" target="_blank">
         <div align="center" style="width:400px;background-color:#d50002;border-radius:5px;text-align:center;padding:10px 20px;color:#ffffff;font-size:16px;font-weight:bold;margin:auto">
         LOGIN TO YOUR ACCOUNT </div>
        </a>
        <br><br>
        
        <div style="padding:25px 0px 25px 0px">
         <table border="0" cellpadding="0" cellspacing="0">
         <tbody><tr>
         <td style="width:60px;text-align:center">
         <img src="https://ci6.googleusercontent.com/proxy/0W6V3Argf1NsQ5t6RpiTHlzg3bsylPoaWIZUTuqG1NU7yRk2S8mSOljbXWebZYDfsI0roBqnWMhbva4AYemQRkYaeyIm9I3VARcO=s0-d-e1-ft#https://cloud.xm-cdn.com/assets/img/emails/welcome/2.png" width="43" height="80" align="absmiddle" class="CToWUd">
         </td>
         <td style="font-family:Arial,Helvetica,sans-serif">
         <font style="font-size:15px;font-weight:bold;text-transform:uppercase">CREATE A DEPOSIT</font>
         <br><br>
            Create a deposit with an investment plan of your choice 
            
         </td>
         </tr>
         </tbody></table>
        </div>

        <a href="https://www.{{ env('APP_NAME') }}.com/deposit" style="color:#ffffff;text-decoration:none" target="_blank">
            <div align="center" style="width:400px;background-color:#d50002;border-radius:5px;text-align:center;padding:10px 20px;color:#ffffff;font-size:16px;font-weight:bold;margin:auto">
            CREATE DEPOSIT REQUEST </div>
           </a>
           <br><br>
        
        <div style="padding:25px 0px 25px 0px">
         <table border="0" cellpadding="0" cellspacing="0">
         <tbody><tr>
         <td style="width:60px;text-align:center">
         <img src="https://ci6.googleusercontent.com/proxy/flaXhCzyPNU4n-L0W7yyCVwbL6HDGNWdIYQKf39W4kIrbS_3linbe60_ouD0zmKgphefCg8X6FkLitOJ_I3wgRMlvdpMNDRUmskW=s0-d-e1-ft#https://cloud.xm-cdn.com/assets/img/emails/welcome/3.png" width="43" height="83" align="absmiddle" class="CToWUd">
         </td>
         <td style="font-family:Arial,Helvetica,sans-serif">
         <font style="font-size:15px;font-weight:bold;text-transform:uppercase">WITHDRAW YOUR MONEY</font>
         <br><br>
         You can withdraw your money immediately your investment has stopped running. </td>
         </tr>
         </tbody></table>
        </div>

        <a href="https://www.{{ env('APP_NAME') }}.com/withdraw" style="color:#ffffff;text-decoration:none" target="_blank">
            <div align="center" style="width:400px;background-color:#d50002;border-radius:5px;text-align:center;padding:10px 20px;color:#ffffff;font-size:16px;font-weight:bold;margin:auto">
            CREATE WITHDRAWAL REQUEST </div>
           </a>
           <br><br>
        <br>
         </td>
         <td width="30"></td>
         </tr>
         </tbody></table>
         <table width="650" border="0" cellspacing="0" cellpadding="0" style="padding:30px 0 0">
        <tbody><tr>
         <td width="30"></td>
         <td width="590" align="left" dir="ltr" style="font-family:Arial,Helvetica,sans-serif;color:#000000;font-size:14px">
         </td>
         <td width="30"></td>
        </tr>
        </tbody></table>
        
         
         
         <table width="650" border="0" cellspacing="0" cellpadding="0" style="padding:30px 0 0">
         <tbody><tr>
         <td width="30"></td>
         <td width="590" align="left" dir="ltr" style="font-family:Arial,Helvetica,sans-serif;color:#000000;font-size:14px">
         <strong>
         Kind Regards, <br><br>
         The EG Team </strong>
         <br><br>
         <!--<a href="https://www.facebook.com/xmglobal" style="display:inline-block" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/xmglobal&amp;source=gmail&amp;ust=1629257826760000&amp;usg=AFQjCNHx2UtrhTvze1V_FLT8jx8Hd0apgg"><img src="https://ci5.googleusercontent.com/proxy/iiV0njhcGN4L7ags2dALK5-ZZKCSuO2Wq00HHk66FVpuAeNf8CKhx7ppuxQNZXTNYkWkIXriMpfWIVlC0fmPXr6vhDjSGORnceQRO26G37LuCUEU=s0-d-e1-ft#http://www.xmglobal.com/assets/newsletters/signature/facebook.png" width="23" height="22" style="margin:0 2px" class="CToWUd"></a>-->
         <!--<a href="https://twitter.com/XM_COM" style="display:inline-block" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/XM_COM&amp;source=gmail&amp;ust=1629257826760000&amp;usg=AFQjCNF8oKY6hA6_6ZDLdq9CX8tKrbHiyA"><img src="https://ci5.googleusercontent.com/proxy/il7f4CPFawHLp3i3YRJQkybq4OLjliYbN-BCf77UeTN22PgHvjMXmvv07Nmni_hcNiAR1lnWSKfwWdl2m1EmEjKePhUyorLD9pWn5NQ5Wkm0fcE=s0-d-e1-ft#http://www.xmglobal.com/assets/newsletters/signature/twitter.png" width="23" height="22" style="margin:0 2px" class="CToWUd"></a>-->
         <!--<a href="https://www.youtube.com/user/xmglobal?sub_confirmation=1" style="display:inline-block" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.youtube.com/user/xmglobal?sub_confirmation%3D1&amp;source=gmail&amp;ust=1629257826760000&amp;usg=AFQjCNHfUOsTesTEjUgXSjJo9qovV71Ltw"><img src="https://ci5.googleusercontent.com/proxy/3zX7BWFiwmZJ7UBBadTfwG38FA2UBAotUf54NlkyVCtbothstPOUliGTc_Qd93NXJ-4FDwO8wrlGOFAs-NivWNvh1fvJN2cextp8H9wjbGdis10=s0-d-e1-ft#http://www.xmglobal.com/assets/newsletters/signature/youtube.png" width="23" height="22" style="margin:0 2px" class="CToWUd"></a>-->
         </td>
         <td width="30"></td>
         </tr>
        </tbody></table>
         </td>
         </tr>
        </tbody></table>
        <table width="650" border="0" cellspacing="0" cellpadding="0">
         <tbody><tr>
         <td width="30" bgcolor="#f5f5f5"></td>
         <td width="590" bgcolor="#f5f5f5" align="left" style="font-family:Arial,Helvetica,sans-serif;color:#000000;font-size:14px;padding:25px 0" dir="ltr">
        <strong>© {{ date('Y') }} {{ env("SITE_SHORT_NAME") }}. All rights reserved.</strong>
        <br><br>
        <strong>Legal:</strong> {{ env("SITE_NAME") }} Limited is authorised and regulated by the International Financial Services Commission (IFSC) (license number 000261/158).<br><br>
         </td>
         <td width="30" bgcolor="#f5f5f5"></td>
         </tr>
        </tbody></table><table width="650" border="0" cellspacing="0" cellpadding="0">
         <tbody><tr>
         <td width="650" height="30" align="center" bgcolor="#000000" style="font-family:Arial,Helvetica,sans-serif;color:#656565;font-size:10px">
         <a href="#m_-1601601668907056151_" style="text-decoration:none;color:#656565">{{ env("SITE_ADDRESS") }}</a>
         </td>
         </tr>
        </tbody></table> </td>
         </tr>
        </tbody></table>
        <img src="https://ci3.googleusercontent.com/proxy/NS_eWBZ38sib0l_KTTAE9qVYDWGZpXPm1nCg7IMmWKe3qxs_w87P0YEezrFM9gCs17ThY1gjnJ8dlm6UQEvqLP6W5w4PCdo2beyHoi3fOov9_AyBiRQB_heBf63MHLqD8u7OHP_4q4SaWm3tQVX3oWnJ2h9G80Jdo8Z94Lvs3zSjm_p-zh1y4KbXsv47SeFANQHLzE4GmZZNIMD6HH5joxerCnQ_Fkhj6htdFKhq78a0S15e7Gw92EcsIVmiyQsliFeIhSwQP8UnQsWFnrGAW7AoCTNz5Pa0_Z39c5i3-KoWGTgPKM8OJf3F0IUVEZGGpQyZ2jIJztWxzFhhv_yG8VpCQx-kznrJmSXXz75NJN7vVMfpFZ5VxnS31xczIgkZYmdin95MFYXYNFrtqimvS5it=s0-d-e1-ft#http://email.{{ env('APP_NAME') }}.com/wf/open?upn=b5NRcAX-2BuEuTGJRk-2F9OpuKfrKYmj5hV-2Fn6N9joNM2c6Puv4hTm6b12dacE1iNBxY8nMVvxiEspeBYvqpAfz-2F2VK2mqxZkC8yXyp8IcNfpGOsVhlBTPFh8GG-2B6LM2Gn5EP8ZtWuDDZp89Ex-2FUufFBSS5XMLrJwn8U603mIsSjzDBe3wKbZfIbGH-2F85v3cbatkk-2Bu7N1VapN9ptW199LmQHBsQysn7Zlwc8cneGfGa9dQ-3D" alt="" width="1" height="1" border="0" style="height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important" class="CToWUd"></div>
</body>
</html>