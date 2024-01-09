function displayDept(){
	
	var facultyValue = document.getElementById("faculty");
	var optionValue = facultyValue[facultyValue.selectedIndex].value;
	//alert("Everything is alright at this level");
	if (optionValue == "ahs"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Medical Laboratory Science','Nursing','Physiotherapy','Radiography'];
		deptValue = ['Medical Laboratory Science','Nursing','Physiotherapy','Radiography'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "agr"){
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
	}else if (optionValue == "fais"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Arabic','English and Library Studies','Linguistics And Foreign Languages','History','Islamic studies And Shariah',
						'Nigerian Languages'];
		deptValue = ['Arabic','English and Library Studies','Linguistics And Foreign Languages','History','Islamic studies And Shariah',
						'Nigerian Languages'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "bms"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Anatomy','Biochemistry','Human Physiology'];
		deptValue = ['Anatomy','Biochemistry','Human Physiology'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "csc"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Chemical Pathology','Clinical Pharmacology','Medicine','Paediatrics'];
		deptValue = ['Chemical Pathology','Clinical Pharmacology','Medicine','Paediatrics'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "fcsit"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Computeer Science','Department of Software Engineering','Department of Information Technology',
						'Department of Information Science'];
		deptValue = ['Department of Computeer Science','Department of Software Engineering','Department of Information Technology',
						'Department of Information Science'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "comm"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList =  ['Mass Communication','Theatre Arts and Film'];
		deptValue =  ['Mass Communication','Theatre Arts and Film'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "den"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Child Dental Health','Oral and Maxilofacial','Oral Diagonistic Science','Restorative','Preventive'];
		deptValue = ['Child Dental Health','Oral and Maxilofacial','Oral Diagonistic Science','Restorative','Preventive'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "ees"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList =  ['Geography','architecture','Environmental Management','Estate Management','Geology','Quantity Survey','Urban And Regional Planning'];
		deptValue =  ['Geography','architecture','Environmental Management','Estate Management','Geology','Quantity Survey','Urban And Regional Planning'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "edu"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Adult Education And Community Services','Education','Library And Information Science','Physical Health Education',
						'Science And Technical Education','Special Education'];
		deptValue = ['Adult Education And Community Services','Education','Library And Information Science','Physical Health Education',
						'Science And Technical Education','Special Education'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "engr"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList =  ['Department of Agricultural and Environmental Engineering','Department of Civil Engineering','Department of Electrical Engineering',
						'Department of Mechanical Engineering','Department of Mechatronics Engineering','Department of Chemical and Petroleum Engineering',];
		deptValue =  ['Department of Agricultural and Environmental Engineering','Department of Civil Engineering','Department of Electrical Engineering',
						'Department of Mechanical Engineering','Department of Mechatronics Engineering','Department of Chemical and Petroleum Engineering',];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "law"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Civil Law','Criminal Law','Public Law','Shariah Law'];
		deptValue = ['Civil Law','Criminal Law','Public Law','Shariah Law'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "lsc"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Biological Science','Department of Animal Science','Zoology','Botany','Department of Plant Biology'];
		deptValue = ['Department of Biological Science','Department of Animal Science','Zoology','Botany','Department of Plant Biology'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "sms"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Accounting','Business Administration and Entreprenuer','Department of Economics','Department of Political Science','Sociology'];
		deptValue = ['Accounting','Business Administration and Entreprenuer','Department of Economics','Department of Political Science','Sociology'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "psc"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Pharmacy','Laboratory Science'];
		deptValue = ['Pharmacy','Laboratory Science'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "phys"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Mathematical Science','Department of Pure and Industrial Chemistry','Physics Department',];
		deptValue = ['Department of Mathematical Science','Department of Pure and Industrial Chemistry','Physics Department',];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}

}