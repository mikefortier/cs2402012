function AddIngrField(){
	this.$intIngrCounter = 2;
	var $txtAddIngrRow = "<div>"
						+ "<input type='text' id='txtIngrName" + this.$intIngrCounter + "' class='txtIngrName dropShadow' placeholder='Name of ingredient' size='38' maxlength='100' />"
						+ "<input type='text' id='txtIngrQty" + this.$intIngrCounter + "' class='txtIngrQty dropShadow' placeholder='Qty' size='3' maxlength='3' />"
						+ "<select id='selIngrMeasure" + this.$intIngrCounter + "' class='selIngrMeasure' >"
							+ "<option value='' >pinch</option>"
							+ "<option value='' >teaspoon</option>"
							+ "<option value='' >tablespoon</option>"
							+ "<option value='' >cup</option>"
							+ "<option value='' >pound</option>"
							+ "<option value='' >other</option>"
						+ "</select>"
					+ "</div>";
	document.getElementById('ingrLeftPanel').innerHTML += $txtAddIngrRow;
	this.$intIngrCounter++;
	}