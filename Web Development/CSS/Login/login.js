function login(){

			var username = document.getElementById("username").value;
			var password = document.getElementById('password').value;
			
			if(username == "Admin" && password=="12345"){
				var key = prompt("Enter Secret Key: ");

				//alert(key +" \n "+ typeof(key));
				
				if(key == "Kala Pathar"){	
					alert("Welcome Admin");
				}
				else{
					alert("Invalid Key!!! Try Again");
				}
			}
			else{
				alert("Welcome User!!!");
			}
		}