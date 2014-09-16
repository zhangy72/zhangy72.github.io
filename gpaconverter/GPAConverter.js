// JavaScript Document

// add one row onto tableID
function addOneRow(tableID) {	
	var obj = document.getElementById(tableID);
	var addRowButton = document.getElementById("add-row-button");	
	var nodeNum = obj.childNodes.length;	
	var lastRow = obj.childNodes[nodeNum - 1];
	var tr = document.createElement("tr");	
	for (var i = 0; i < 3; ++i) {
		td = document.createElement("td");
		var input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("className", "form");
		td.appendChild(input);
		tr.appendChild(td);
	}	
	tr.appendChild(addRowButton);	
	obj.appendChild(tr);
}

// insert courseNum rows into tagID
function generateInputTable(inputTagID, courseNum) {
	var tb = document.createElement("table");
	tb.id = "input-table";
	
	// generate table caption.
	var caption = document.createElement("caption");
	var captionText = document.createTextNode("Score Table");
	caption.appendChild(captionText);
	caption.setAttribute("id", "input-table-caption");	
	tb.appendChild(caption);
	
	// generate table head.
	var tr = document.createElement("tr");	
	var thead = document.createElement("thead");
	var th;
	var headText; 
	
	th = document.createElement("th");
	headText = document.createTextNode("Name"); 
	th.appendChild(headText);
	tr.appendChild(th);
	th = document.createElement("th");
	headText = document.createTextNode("Credit");
	th.appendChild(headText);
	tr.appendChild(th);
	th = document.createElement("th");	
	headText = document.createTextNode("Score");
	th.appendChild(headText);
	tr.appendChild(th);
	thead.appendChild(tr);
	tb.appendChild(thead);	
	
	// generate table cells
	for (var i = 0; i < courseNum; ++i) {
		var tr = document.createElement("tr");
		for (var j = 0; j < 3; ++j) {
			var td = document.createElement("td");
			var input = document.createElement("input");
			input.setAttribute("type", "text");
			input.setAttribute("class", "form");
			td.appendChild(input);
			tr.appendChild(td);
		}
		if (i == courseNum - 1) {
			td = document.createElement("td");
			td.setAttribute("class", "button-cell");
			var button = document.createElement("img");
			button.setAttribute("id", "add-row-button");
			button.setAttribute("src", "images/add_row.png");
			button.setAttribute("onclick","addOneRow('input-table');");
			td.appendChild(button);
			tr.appendChild(td);
		}
		tb.appendChild(tr);
	}
	// add the table to the designated tag.
	var obj = document.getElementById(inputTagID);
	obj.appendChild(tb);
}

function generateOutputTable(outputTagID) {
	var labels = new Array();
	var versionNum = 8;
	labels.push("Original");
	labels.push("Standard 4.0");
	labels.push("Revised 4.0 (1)");
	labels.push("Rivsed 4.0 (2)");
	labels.push("PKU 4.0");
	labels.push("USTC 4.3");
	labels.push("SJU 4.3");
	labels.push("Canada 4.3");
	
	var tb = document.createElement("table");
	tb.id = 'output-table';
	var thead = document.createElement("thead");
	var tr;
	var th;
	var headText;
	var caption = document.createElement("caption");
	
	// generate caption.
	headText = document.createTextNode("GPA Versions");
	caption.appendChild(headText);
	tb.appendChild(caption);
	// generate header labels.
	tr = document.createElement("tr");
	headText = document.createTextNode("Version");
	th = document.createElement("th");
	th.appendChild(headText);
	tr.appendChild(th);
	headText = document.createTextNode("GPA");
	th = document.createElement("th");	
	th.appendChild(headText);
	tr.appendChild(th);	
	thead.appendChild(tr);
	tb.appendChild(thead);
	
	for (var i = 0; i < versionNum; ++i) {
		var tr = document.createElement("tr");
		var td = document.createElement("td");
		td.setAttribute("class", "head");
		var textNode = document.createTextNode(labels[i]);
		td.appendChild(textNode);
		tr.appendChild(td);
		td = document.createElement("td");
		textNode = document.createTextNode("");
		td.appendChild(textNode);
		tr.appendChild(td);
		tb.appendChild(tr);
	}
	var obj = document.getElementById(outputTagID);
	obj.appendChild(tb);
}


function submitForm(inputTableID, outputTableID) {
	var success = validateInputTable(inputTableID);
	if (success) {
		var quants = extractQuants(inputTableID);
		var gpa = calculateGPA(quants);
		displayGPA(outputTableID,gpa);
	}
}

function validateInputTable(tableID) {
	var tb = document.getElementById(tableID);
	var nodeNum = tb.childNodes.length;  // number of nodes of table.
	var courseNum = 0;
	for (var i = 2; i < nodeNum; ++i) {
		var tr = tb.childNodes[i];
		var course = tr.childNodes[0].childNodes[0];
		var credit = tr.childNodes[1].childNodes[0];
		var score = tr.childNodes[2].childNodes[0];	
		if (course.value == "" && credit.value == "" && score.value == "") {
			continue
		} else if (credit.value == "" || score.value == "") {
			alert("You have unfilled score or credit!");
			return false;
		} else {
			++courseNum;
		}
		var regExp = /[^0-9.]/;
		if (regExp.test(credit.value) || regExp.test(score.value)) {
			alert("Only number is allowed in credit or score!");
			return false;
		}
	}
	if (courseNum == 0) {
		alert("Please input at least one course!");
		return false;
	}
	return true;
}

function help() {
	url = "help.html";
	window.location = url;
}

function displayGPA(tableID, gpa) {
	var tb = document.getElementById(tableID);
	var nodeNum = tb.childNodes.length;
	//document.write(nodeNum);
	for (var i = 2; i < nodeNum; ++i) {
		var tr = tb.childNodes[i];
		var td = tr.childNodes[1];
		var score = gpa[i - 2];
		var scoreNode = td.childNodes[0];
		scoreNode.nodeValue = score.toFixed(2);
	}
}

function extractQuants(tableID) {
	var quants = new Array();  // credits and scores.
	var tb = document.getElementById(tableID);
	var nodeNum = tb.childNodes.length;	
	for (var i = 2; i < nodeNum; ++i) {
		var tr = tb.childNodes[i];
		var credit = tr.childNodes[1].childNodes[0].value;
		var score = tr.childNodes[2].childNodes[0].value;
		if (credit != "" && score != "") {
			quants.push(Array(parseInt(credit), parseInt(score)));
		}
	}
	return quants;
}

function calculateGPA(quants) {
	var gpa = new Array();
    gpa[0] = originalMethod(quants);	
    gpa[1] = standardFourPointMethod(quants);
    gpa[2] = revisedFourPointMethod(quants);
    gpa[3] = revisedFourPointMethodNew(quants);
    gpa[4] = PKUMethod(quants);
    gpa[5] = USTCMethod(quants);
    gpa[6] = SJUMethod(quants);
    gpa[7] = CanadianMethod(quants);
	return gpa;
}

function originalMethod(quants) {
    var total = 0;  // total grade point
    var num = 0;  // number of items which are not empty
	var rowCount = quants.length;
    for (var i = 0; i < rowCount; ++i) {
        var credit = quants[i][0];
        var score = quants[i][1];
        total += credit * score;
        num += credit;
    }
    return (num == 0) ? -1 : total / num;
}

function standardFourPointMethod(quants) {
    var total = 0;  // total grade point
    var num = 0;  // number of items which are not empty
	var rowCount = quants.length;
    for (var i = 0; i < rowCount; ++i) {
        var credit = quants[i][0];
        var score = quants[i][1];
        if (score < 60) {
            score = 0.0;
        } else if (score < 70) {
            score = 1.0;
        } else if (score < 80) {
            score = 2.0;
        } else if (score < 90) {
            score = 3.0;
        } else {
            score = 4.0;
        }
        total += credit * score;
        num += credit;
    }
    return (num == 0) ? -1 : total / num;
}

function revisedFourPointMethod(quants) {
    var total = 0;  // total grade point
    var num = 0;  // number of items which are not empty
	var rowCount = quants.length;
    for (var i = 0; i < rowCount; ++i) {
        var credit = quants[i][0];
        var score = quants[i][1];
        if (score < 60) {         // 0-59
            score = 0.0;
        } else if (score < 70) {  // 60-69
            score = 2.0;
        } else if (score < 85) {  // 70-84
            score = 3.0;
        } else {                  // 85-100
            score = 4.0;
        }
        total += credit * score;
        num += credit;
    }
    return (num == 0) ? -1 : total / num;
}

function revisedFourPointMethodNew(quants) {
    var total = 0;  // total grade point
    var num = 0;  // number of items which are not empty
	var rowCount = quants.length;
    for (var i = 0; i < rowCount; ++i) {
        var credit = quants[i][0];
        var score = quants[i][1];
        if (score < 60) {         // 0-59
            score = 0.0;
        } else if (score < 75) {  // 60-74
            score = 2.0;
        } else if (score < 85) {  // 75-84
            score = 3.0;
        } else {                  // 85-100
            score = 4.0;
        }
        total += credit * score;
        num += credit;
    }
    return (num == 0) ? -1 : total / num;
}

function PKUMethod(quants) {
    var total = 0;  // total grade point
    var num = 0;  // number of items which are not empty
	var rowCount = quants.length;
    for (var i = 0; i < rowCount; ++i) {
        var credit = quants[i][0];
        var score = quants[i][1];
        if (score < 60) {         // 0-59
            score = 0.0;
        } else if (score < 63) {  // 60-62
            score = 1.0;
        } else if (score < 66) {  // 63-65
            score = 1.3;
        } else if (score < 69) {  // 66-68
            score = 1.7;
        } else if (score < 72) {  // 69-71
            score = 2.0;
        } else if (score < 75) {  // 72-74
            score = 2.3;
        } else if (score < 78) {  // 75-77
            score = 2.7;
        } else if (score < 82) {  // 78-81
            score = 3.0;
        } else if (score < 85) {  // 82-84
            score = 3.3;
        } else if (score < 90) {  // 85-89
            score = 3.7;
        } else {                  // 90-100
            score = 4.0;
        }
        total += credit * score;
        num += credit;
    }
    return (num == 0) ? -1 : total / num;
}

function USTCMethod(quants) {
    var total = 0;  // total grade point
    var num = 0;  // number of items which are not empty
	var rowCount = quants.length;
    for (var i = 0; i < rowCount; ++i) {
        var credit = quants[i][0];
        var score = quants[i][1];
        if (score < 60) {         // 0-59
            score = 0.0;
        } else if (score < 61) {  // 60
            score = 1.0;
        } else if (score < 64) {  // 61-63
            score = 1.3;
        } else if (score < 65) {  // 64
            score = 1.5;
        } else if (score < 68) {  // 65-67
            score = 1.7;
        } else if (score < 72) {  // 68-71
            score = 2.0;
        } else if (score < 75) {  // 72-74
            score = 2.3;
        } else if (score < 78) {  // 75-77
            score = 2.7;
        } else if (score < 82) {  // 78-81
            score = 3.0;
        } else if (score < 85) {  // 82-84
            score = 3.3;
        } else if (score < 90) {  // 85-89
            score = 3.7;
        } else if (score < 95) {  // 90-94
            score = 4.0;
        } else {                  // 95-100
            score = 4.3;
        }
        total += credit * score;
        num += credit;
    }
    return (num == 0) ? -1 : total / num;
}

function SJUMethod(quants) {
    var total = 0;  // total grade point
    var num = 0;  // number of items which are not empty
	var rowCount = quants.length;
    for (var i = 0; i < rowCount; ++i) {
        var credit = quants[i][0];
        var score = quants[i][1];
        if (score < 60) {         // 0-59
            score = 0.0;
        } else if (score < 62) {  // 60-61
            score = 1.0;
        } else if (score < 65) {  // 62-64
            score = 1.7;
        } else if (score < 67) {  // 65-66
            score = 2.0;
        } else if (score < 70) {  // 67-69
            score = 2.3;
        } else if (score < 75) {  // 70-74
            score = 2.7;
        } else if (score < 80) {  // 75-79
            score = 3.0;
        } else if (score < 85) {  // 80-84
            score = 3.3;
        } else if (score < 90) {  // 85-89
            score = 3.7;
        } else if (score < 95) {  // 90-94
            score = 4.0;
        } else {                  // 95-100
            score = 4.3;
        }
        total += credit * score;
        num += credit;
    }
    return (num == 0) ? -1 : total / num;
}

function CanadianMethod(quants) {
    var total = 0;  // total grade point
    var num = 0;  // number of items which are not empty
	var rowCount = quants.length;
    for (var i = 0; i < rowCount; ++i) {
        var credit = quants[i][0];
        var score = quants[i][1];
        if (score < 60) {         // 0-59
            score = 0.0;
        } else if (score < 65) {  // 60-64
            score = 2.3;
        } else if (score < 70) {  // 65-69
            score = 2.7;
        } else if (score < 75) {  // 70-74
            score = 3.0;
        } else if (score < 80) {  // 75-79
            score = 3.3;
        } else if (score < 85) {  // 80-84
            score = 3.7;
        } else if (score < 90) {  // 85-89
            score = 4.0;
        } else {                  // 90-100
            score = 4.3;
        }
        total += credit * score;
        num += credit;
    }
    return (num == 0) ? -1 : total / num;
}

function clearInputTable(tableID) {
  var tb = document.getElementById(tableID);
  var nodeNum = tb.childNodes.length;
  for (var i = 0; i < nodeNum; ++i) {
     var child1 = tb.childNodes[i];
	 if (child1.tagName == "TR") {
		for (var j = 0; j < child1.childNodes.length; ++j) {
		  var child2 = child1.childNodes[j];
		  var child3 = child2.firstChild;
		  child3.value = "";
		}
	 }
  }
}

function clearOutputTable(tableID) {
	tb = document.getElementById(tableID);
	var nodeNum = tb.childNodes.length;
	for (var i = 0; i < nodeNum; ++i) {
		var child1 = tb.childNodes[i];
		if (child1.tagNum == "TR") {
		  for (var j = 0; j < child1.childNodes.length; ++j) {
		  	 var child2 = child1.childNodes[j];
			 if (child2.className != "head") {
			   child2.textContent = "";
			 }
		  }
		}
	}	
}

function loadTable(tableID) {
  
}