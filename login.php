<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<style type="text/css">
		div#container{
		    width: 100%;
		    display: block;
		}
		#container > h2{
			background: #271f1f;
			padding: 15px;
		    color: white;
		    text-align: center;
		    font-size: 40px;
		    font-weight: 500;
		}
		div#form-div{
			margin-top: 50px;

		}
		#form form{
			padding: 20px;
			border: 1px solid black;
			border-radius: 8px;
			width: 40%;
			margin: auto;
			box-shadow: 2px 2px 10px #492689;
		}
		#form{
			
		}
		#form label{
			display: block;
			color: #000000;
			margin-bottom: 5px;
		}
		#form input{
			width: 100%;
		    height: 40px;
		    padding-left: 3px;
		    margin-bottom: 15px;
		    outline: none;
		    border-radius: 10px;
		}
		#form input:focus{
			border:2px solid #492689;
			border-radius: 10px;
		}
		#form #button{
			width: 100%;
			background: #492689;
			border-radius: 10px;
			color: whitesmoke;
			font-size: 15px;
			font-weight: 500;
			border:1px solid black;
			padding:10px;
		}
		#form #button:hover{
			cursor: pointer;
			background: white;
			border: 2px solid #492689;
			color: #492689;
			font-size: 15px;
			font-weight: 700;
		}
		#form input::placeholder{
			color: #492689;
		}
		#form h2{
			text-align: center;
			color: #492689;
		}
		#auth-btn button{
			border: 2px solid #492689;
			padding:10px;
			border-radius: 8px;
			color: #fff;
			font-size: 15px;
			font-weight: 700;
			border: 0px;
			margin-bottom: 15px;
		}
		#auth-btn button#loginbtn{
			background: #198754;
		}
		#auth-btn button#loginbtn:focus{
			box-shadow: 0 0 0 0.25rem rgba(60,153,110,.5);
		}
		#auth-btn button#signupbtn{
			margin-left: 0.5rem;
			background: #0d6efd;
		}
		#auth-btn button#signupbtn:focus{
			box-shadow: 0 0 0 0.25rem rgba(49,132,253,.5)
		}
		#auth-btn button:hover{
			cursor: pointer;
			font-size: 15px;
			font-weight: 700;
			border: 0px;
		}

	</style>
</head>
<body>
	<div id="container">
		<h2>My Chats</h2>
		<div id="form-div">
			<div id="form">
				<form>
					<div id="auth-btn">
						<button type="button" id="loginbtn">Login</button>
						<button type="button" id="signupbtn">Sign up</button>
					</div>
					<div id="login">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="Enter your email here!"/>
						<label for="password">Password</label>
						<input type="password" name="password" id="password" placeholder="Enter your password here!"/>
					</div>
					<div id="signup" style="display: none;">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter your name here!"/>
						<label for="semail">Email</label>
						<input type="email" name="email" id="semail" placeholder="Enter your email here!"/>
						<label for="spassword">Password</label>
						<input type="password" name="password" id="spassword" placeholder="Enter your password here!"/>
						<label for="cpassword">Confirm Password</label>
						<input type="text" name="cpassword" id="cpassword" placeholder="Enter your confirm password here!"/>
					</div>
					<button type="button" id="button">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function getById(element){
		return document.querySelector("#"+element);
	}
	let loginbtn = getById("loginbtn");
	let signupbtn = getById("signupbtn");
	let login = getById("login");
	let signup = getById("signup");
	loginbtn.addEventListener('click', function(){
		login.style.display = 'block';
		signup.style.display = 'none';
	});
	signupbtn.addEventListener('click', function(){
		signup.style.display = 'block';
		login.style.display = 'none';
	});
	function loginData(){
		let name = getById('name').value;
		let email = getById('email').value;
		let password = getById('password').value;
		let cpassword = getById('cpassword').value;
		const data = {
				name:name,
				email:email,
				password:password,
				cpassword:cpassword,
			}
		// console.log(data);
		let xml = new XMLHttpRequest();
		if(xml.status == 200 || xml.readyState == 4){
			xml.onload();
		}
		xml.open('POST','api.php', true);
		xml.send(data)
		console.log(xml.responseText);
	}
	button.addEventListener('click', loginData);
	// loginData();
</script>
</html>