function AddIngrField(){
	/**************************************************
	* creates static variable to track number of rows
	* saves current values of input fields
	* adds a new row of input fields
	* returns saved values to input fields
	* increments static variable
	**************************************************/

	if ( typeof this.$intIngrCounter == 'undefined' ) {
        // Create attribute of function to use as static variable
        this.$intIngrCounter = 2;
    }
	
	var $saveInputs = new Array(3);
		$saveInputs[0] = new Array(this.$intIngrCounter - 1);
		$saveInputs[1] = new Array(this.$intIngrCounter - 1);
		$saveInputs[2] = new Array(this.$intIngrCounter - 1);
		
	//save current values of input fields
	for (i=0; i < (this.$intIngrCounter - 1); i++){
		$txt1 = document.getElementById("txtIngrName" + i);
		$txt2 = document.getElementById("txtIngrQty" + i);
		$sel3 = document.getElementById("selIngrMeasure" + i);
		
		$saveInputs[0][i] = $txt1.value;
		$saveInputs[1][i] = $txt2.value;
		$saveInputs[2][i] = $sel3.selectedIndex;
		}
	
	//add a new row of input fields
	var $txtAddIngrRow = "<div>"
						+ "<input type='text' id='txtIngrName" + (this.$intIngrCounter - 1) + "' class='txtIngrName dropShadow' placeholder='Name of ingredient' size='38' maxlength='100' />"
						+ "<input type='text' id='txtIngrQty" + (this.$intIngrCounter - 1) + "' class='txtIngrQty dropShadow' placeholder='Qty' size='3' maxlength='3' />"
						+ "<select id='selIngrMeasure" + (this.$intIngrCounter - 1) + "' class='selIngrMeasure' >"
							+ "<option value='' >pinch</option>"
							+ "<option value='' >teaspoon</option>"
							+ "<option value='' >tablespoon</option>"
							+ "<option value='' >cup</option>"
							+ "<option value='' >pound</option>"
							+ "<option value='' >other</option>"
						+ "</select>"
					+ "</div>";
	document.getElementById('ingrLeftPanel').innerHTML += $txtAddIngrRow;
	
	//return saved values to input fields
	for (i=0; i < (this.$intIngrCounter - 1); i++){
		$txt1 = document.getElementById("txtIngrName" + i);
		$txt2 = document.getElementById("txtIngrQty" + i);
		$sel3 = document.getElementById("selIngrMeasure" + i);
		
		$txt1.value = $saveInputs[0][i];
		$txt2.value = $saveInputs[1][i];
		$sel3.selectedIndex = $saveInputs[2][i];
		}
	
	//increment static variable
	this.$intIngrCounter++;
	}
	
