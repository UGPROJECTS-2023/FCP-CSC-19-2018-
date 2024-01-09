
 function displayDept(){
	
	var facultyValue = document.getElementById("faculty");
	var optionValue = facultyValue[facultyValue.selectedIndex].value;
	//alert("Everything is alright at this level");
	if (optionValue == "Faculty of Allied Health Sciences"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0); 
		}
		deptList = ['Department of Medical Laboratory Science','Department of Nursing','Department of Physiotherapy','Department of Radiography'];
		deptValue = ['Department of Medical Laboratory Science','Department of Nursing','Department of Physiotherapy','Department of Radiography'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Agriculture"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Agricultural Economics and Extention','Department of Animal Science','Department of Agronomy',
						'Department of Crop Protection','Department of Soil Science'];
		deptValue = ['Department of Agricultural Economics and Extention','Department of Animal Science','Department of Agronomy',
						'Department of Crop Protection','Department of Soil Science'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Arts And Islamic Studies"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Arabic','Department of English and Library Studies','Department of Linguistics And Foreign Languages','Department of History','Department of Islamic studies And Shariah',
						'Department of Nigerian Languages'];
		deptValue = ['Department of Arabic','Department of English and Library Studies','Department of Linguistics And Foreign Languages','Department of History','Department of Islamic studies And Shariah',
						'Department of Nigerian Languages'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Basic Medical Sciences"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Anatomy','Department of Biochemistry','Department of Human Physiology'];
		deptValue = ['Department of Anatomy','Department of Biochemistry','Department of Human Physiology'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Clinical Sciences"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Chemical Pathology','Department of Clinical Pharmacology','Department of Medicine','Department of Paediatrics'];
		deptValue = ['Department of Chemical Pathology','Department of Clinical Pharmacology','Department of Medicine','Department of Paediatrics'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Computer Science And Information Technology"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Computer Science','Department of Software Engineering','Department of Information Technology',
						'Department of Information Science'];
		deptValue = ['Department of Computer Science','Department of Software Engineering','Department of Information Technology',
						'Department of Information Science'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Communications"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList =  ['Department of Mass Communication','Department of Theatre Arts and Film'];
		deptValue =  ['Department of Mass Communication','Department of Theatre Arts and Film'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Dentistry and Dental Surgery"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Child Dental Health','Department of Oral and Maxilofacial','Department of Oral Diagonistic Science','Department of Restorative','Department of Preventive'];
		deptValue = ['Department of Child Dental Health','Department of Oral and Maxilofacial','Department of Oral Diagonistic Science','Department of Restorative','Department of Preventive'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Earth And Environmental Science"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList =  ['Department of Geography','Department of Architecture','Department of Environmental Management','Department of Estate Management','Department of Geology','Department of Quantity Survey','Department of Urban And Regional Planning'];
		deptValue =  ['Department of Geography','Department of Architecture','Department of Environmental Management','Department of Estate Management','Department of Geology','Department of Quantity Survey','Department of Urban And Regional Planning'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Education"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Adult Education And Community Services','Department of Education','Department of Library And Information Science','Department of Physical Health Education',
						'Department of Science And Technical Education','Department of Special Education'];
		deptValue = ['Department of Adult Education And Community Services','Department of Education','Department of Library And Information Science','Department of Physical Health Education',
						'Department of Science And Technical Education','Department of Special Education'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Engineering"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList =  ['Department of Agricultural and Environmental Engineering','Department of Civil Engineering','Department of Electrical Engineering',
						'Department of Mechanical Engineering','Department of Mechatronics Engineering','Department of Chemical and Petroleum Engineering'];
		deptValue =  ['Department of Agricultural and Environmental Engineering','Department of Civil Engineering','Department of Electrical Engineering',
						'Department of Mechanical Engineering','Department of Mechatronics Engineering','Department of Chemical and Petroleum Engineering'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Law"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Civil Law','Department of Criminal Law','Department of Public Law','Department of Shariah Law'];
		deptValue = ['Department of Civil Law','Department of Criminal Law','Department of Public Law','Department of Shariah Law'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Life Sciences"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Biological Science','Department of Animal Science','Department of Zoology','Department of Botany','Department of Plant Biology'];
		deptValue = ['Department of Biological Science','Department of Animal Science','Department of Zoology','Department of Botany','Department of Plant Biology'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Social And Management Sciences"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Accounting','Department of Business Administration and Entreprenuer','Department of Economics','Department of Political Science','Department of Sociology'];
		deptValue = ['Department of Accounting','Department of Business Administration and Entreprenuer','Department of Economics','Department of Political Science','Department of Sociology'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Pharmaceutical Sciences"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Pharmacy','Department of Laboratory Science'];
		deptValue = ['Department of Pharmacy','Department of Laboratory Science'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Faculty of Physical Sciences"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Mathematical Science','Department of Pure and Industrial Chemistry','Department of Physics'];
		deptValue = ['Department of Mathematical Science','Department of Pure and Industrial Chemistry','Department of Physics'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}

}