<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
	<!-- If you delete this meta tag, Earth will fall into the sun. -->
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>TTC</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800,900" rel="stylesheet">
	<style>
	img { 
		max-width: 100%; 
	}

	body {
		-webkit-font-smoothing:antialiased; 
		-webkit-text-size-adjust:none; 
		width: 100%!important; 
		height: 100%;
		color:#1a2166;
		font-family:"Montserrat", Arial, sans-serif;
	}
	h1,h2,h3,h4,h5,h6 {
	font-family: "Montserrat", Arial, sans-serif; line-height: 1.1; margin-bottom:15px; color:#1a2166;
	}
	h1 { font-weight:300; font-size: 44px;}
	h2 { font-weight:300; font-size: 37px;}
	h3 { font-weight:500; font-size: 27px;}
	h4 { font-weight:500; font-size: 23px;}
	h5 { font-weight:900; font-size: 17px;}
	h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#1a2166;}
	</style>
  </head>
  <body bgcolor="#FFFFFF" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
	<table width="600" cellpadding="0" cellspacing="0" align="center">
	  <tr>
		<td>				
			{!! $email_template !!}
		</td>
	  </tr>
	</table>
  </body>
</html>