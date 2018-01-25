	function putValues(value1){			
			var result = document.getElementById('result')
			result.value+=value1;	
		}

		function giveResult(){
			var result = document.getElementById('result')
			result.value = eval(result.value);
		}