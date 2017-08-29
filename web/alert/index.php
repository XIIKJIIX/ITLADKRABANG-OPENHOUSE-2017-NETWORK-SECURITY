<!DOCTYPE html>
<html>
<head>
	<title>Open House IT 2017</title>
	<script>
		function auth(){
			var password = prompt("What is my password");
			pass = "1T_kmItl_0p3n_<3";
			if(password == pass){
				alert(binaryAgent('01111011 01100110 01101100 01100001 01100111 00111010 00111100 00110011 01011111 01010111 00110011 01011111 01101100 00110000 01110110 00110011 01011111 00110001 01010100 01011111 01001011 01001101 00110001 01010100 01001100 01011111 00111100 00110011 01111101'));
			}else{
				alert("Wrong password!!!");
				auth();
			}
		}

		function binaryAgent(str) {
			var binString = '';
			str.split(' ').map(function(bin) {
			    binString += String.fromCharCode(parseInt(bin, 2));
			});
			return binString;
		}
	</script>
</head>
<body onload="auth()">
<body>
	<p><H1>Congratulations!</H1></p>
	You win my game :D
</body>
</html>
