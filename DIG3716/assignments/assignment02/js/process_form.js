//1st part of survey -- personal info validation check
function validateData(event) {
  //field variables
  var firstN_valid = false;
  var lastN_valid = false;
  var phoneN_valid = false;
  var emailA_valid = false;
  var studentsA_valid = false;

  //first name hint
  document.survey.first.onfocus = function() {
    var firstN = document.getElementById("firstN");
    var span = firstN.getElementsByTagName("span");
    spanText = span[0].firstChild.nodeValue = "Please enter a name!";
  }
  //last name hint
  document.survey.last.onfocus = function() {
    var lastN = document.getElementById("lastN");
    var span = lastN.getElementsByTagName("span");
    span[0].firstChild.nodeValue = "Please enter a name!";
  }
  //phone number hint
  document.survey.phone.onfocus = function() {
    var phoneN = document.getElementById("phoneN");
    var span = phoneN.getElementsByTagName("span");
    span[0].firstChild.nodeValue = "ex. XXX-XXX-XXXX";
  }
  //email address hint
  document.survey.email.onfocus = function() {
    var emailA = document.getElementById("emailA");
    var span = emailA.getElementsByTagName("span");
    span[0].firstChild.nodeValue = "ex. words@word.com";
  }
  //students address hint
  document.survey.students.onfocus = function() {
    var studentsA = document.getElementById("studentsA");
    var span = studentsA.getElementsByTagName("span");
    span[0].firstChild.nodeValue = "ex. http://students.cah.ucf.edu/~nid";
  }
  //checks validatation on first name
  document.survey.first.onblur = function() {
    var first = document.getElementById("first").value;
    var firstHint = document.getElementById("firstHint");
    var nameRegex = /[a-zA-z]+/;
    if (firstHint !== null && (firstHint.hasChildNodes())) {
        firstHint.removeChild(firstHint.lastChild);
    }
    //right image variable
      var correct = document.createElement("img");
      correct.setAttribute("src", "images/check.png");
      correct.setAttribute("alt", "Correct");
      correct.setAttribute("height", "20px");
    if(first.match(nameRegex)) { //valid
      firstHint.appendChild(correct); //correct icon
      firstN_valid = true; //if field is valid then changed from false true

    } else { //not valid
      //wrong image variable
        var wrong = document.createElement("img");
        wrong.setAttribute("src", "images/ex.png");
        wrong.setAttribute("alt", "Wrong");
        wrong.setAttribute("height", "20px");
      firstHint.appendChild(wrong); //wrong icon
      firstHint.firstChild.nodeValue = "Please enter a name!"; //prompt
    }
  }
  //checks validatation on last name
  document.survey.last.onblur = function() {
    var last = document.getElementById("last").value;
    var lastHint = document.getElementById("lastHint");
    var nameRegex = /[a-zA-z]+/;
    if (lastHint !== null && (lastHint.hasChildNodes())) {
        lastHint.removeChild(lastHint.lastChild);
    }

    if(last.match(nameRegex)) { //valid
      //right image variable
        var correct = document.createElement("img");
        correct.setAttribute("src", "images/check.png");
        correct.setAttribute("alt", "Correct");
        correct.setAttribute("height", "20px");
      lastHint.appendChild(correct); //correct icon
      lastN_valid = true; //if field is valid then changed from false true
    } else { //not valid
      //wrong image variable
        var wrong = document.createElement("img");
        wrong.setAttribute("src", "images/ex.png");
        wrong.setAttribute("alt", "Wrong");
        wrong.setAttribute("height", "20px");
      lastHint.appendChild(wrong); //wrong icon
      lastHint.firstChild.nodeValue = "Please enter a name!"; //prompt
    }
  }
  //checks validatation on phone number
  document.survey.phone.onblur = function() {
    var phone = document.getElementById("phone").value;
    var phoneHint = document.getElementById("phoneHint");
    var phoneRegex = /\d{3}-\d{3}-\d{4}/;
    if (phoneHint !== null && (phoneHint.hasChildNodes())) {
        phoneHint.removeChild(phoneHint.lastChild);
    }

    if(phone.match(phoneRegex)) { //valid
      //right image variable
        var correct = document.createElement("img");
        correct.setAttribute("src", "images/check.png");
        correct.setAttribute("alt", "Correct");
        correct.setAttribute("height", "20px");
      phoneHint.appendChild(correct); //correct icon
      phoneN_valid = true; //if field is valid then changed from false true
    } else { //not valid
      //wrong image variable
        var wrong = document.createElement("img");
        wrong.setAttribute("src", "images/ex.png");
        wrong.setAttribute("alt", "Wrong");
        wrong.setAttribute("height", "20px");
      phoneHint.appendChild(wrong); //wrong icon
      phoneHint.firstChild.nodeValue = "Please enter a valid phone number!"; //prompt
    }
  }
  //checks validatation on email address
  document.survey.email.onblur = function() {
    var email = document.getElementById("email").value;
    var emailHint = document.getElementById("emailHint");
    var emailRegex = /[A-za-z0-9]+@[A-za-z0-9].+\.com/;
    if (emailHint !== null && (emailHint.hasChildNodes())) {
        emailHint.removeChild(emailHint.lastChild);
      }
    if(email.match(emailRegex)) { //valid
      //right image variable
        var correct = document.createElement("img");
        correct.setAttribute("src", "images/check.png");
        correct.setAttribute("alt", "Correct");
        correct.setAttribute("height", "20px");
      emailHint.appendChild(correct); //correct icon
      emailA_valid = true; //if field is valid then changed from false true
    } else { //not valid
      //wrong image variable
        var wrong = document.createElement("img");
        wrong.setAttribute("src", "images/ex.png");
        wrong.setAttribute("alt", "Wrong");
        wrong.setAttribute("height", "20px");
      emailHint.appendChild(wrong); //wrong icon
      emailHint.firstChild.nodeValue = "Please enter a valid email address!"; //prompt
    }
  }
  //checks validatation on students address
  document.survey.students.onblur = function() {
    var students = document.getElementById("students").value;
    var studentsHint = document.getElementById("studentsHint");
    var studentsRegex = /https:\/\/students\.cah\.ucf\.edu\/~[A-za-z0-9]+/;
    if (studentsHint !== null && (studentsHint.hasChildNodes())) {
        studentsHint.removeChild(studentsHint.lastChild);
      }
    //right image variable
      var correct = document.createElement("img");
      correct.setAttribute("src", "images/check.png");
      correct.setAttribute("alt", "Correct");
      correct.setAttribute("height", "20px");
    if(students.match(studentsRegex)) { //valid
      studentsHint.appendChild(correct); //correct icon
      studentsA_valid = true; //if field is valid then changed from false true
    } else { //not valid
      //wrong image variable
        var wrong = document.createElement("img");
        wrong.setAttribute("src", "images/ex.png");
        wrong.setAttribute("alt", "Wrong");
        wrong.setAttribute("height", "20px");
      studentsHint.appendChild(wrong); //wrong icon
      studentsHint.firstChild.nodeValue = "Please enter a valid students address!"; //prompt
    }
  }

  //pass variables on submit
  document.survey.onsubmit = function(event) {
    if(firstN_valid && lastN_valid && phoneN_valid && emailA_valid && studentsA_valid) {
      console.log("Captured inside processForm()"); //everything checks out then form passed
      return false;
    } else {
      console.log("Something is not valid, please check your input"); //if not all of the flag variables are true, then don't allow form processing to occur
      return false;
    }
    return false;
  }
} //end of validate function

//2nd part of survey -- question logic
var q1Intrinsic = false;
var q2Intrinsic = false;
var q3Intrinsic = false;
var q4Intrinsic = false;
var q5Intrinsic = false;

//records unput
function checkQuiz() {
  for (var i = 0; i < document.survey.elements["q1"].length; i++) {
    document.survey.elements["q1"][i].onclick = function() {
      if (document.survey.elements["q1"][0].checked) {
        q1Intrinsic = true; //intrinsic answer
      } else if (document.survey.elements["q1"][1].checked) {
        q1Intrinsic = false; //extrinsic answer
      }
      updateProgress();
    }
  }
  for (var i = 0; i < document.survey.elements["q2"].length; i++) {
    document.survey.elements["q2"][i].onclick = function() {
      if (document.survey.elements["q2"][0].checked) {
        q2Intrinsic = false; //extrinsic answer
      } else if (document.survey.elements["q2"][1].checked) {
        q2Intrinsic = true; //intrinsic answer
      }
      updateProgress();
    }
  }
  for (var i = 0; i < document.survey.elements["q3"].length; i++) {
    document.survey.elements["q3"][i].onclick = function() {
      if (document.survey.elements["q3"][0].checked) {
        q3Intrinsic = false; //extrinsic answer
      } else if (document.survey.elements["q3"][1].checked) {
        q3Intrinsic = true; //intrinsic answer
      }
      updateProgress();
    }
  }
  for (var i = 0; i < document.survey.elements["q4"].length; i++) {
    document.survey.elements["q4"][i].onclick = function() {
      if (document.survey.elements["q4"][0].checked) {
        q4Intrinsic = false; //extrinsic answer
      } else if (document.survey.elements["q4"][1].checked) {
        q4Intrinsic = true; //intrinsic answer
      }
      updateProgress();
    }
  }
  for (var i = 0; i < document.survey.elements["q5"].length; i++) {
    document.survey.elements["q5"][i].onclick = function() {
      if (document.survey.elements["q5"][0].checked) {
        q5Intrinsic = true; //intrinsic answer
      } else if (document.survey.elements["q5"][1].checked) {
        q5Intrinsic = false; //extrinsic answer
      }
      updateProgress();
    }
  }
}

function updateProgress() {
  var badgeArea = document.getElementById("badgeArea"); //grabs div
  var sum = 0; //starts the count
  if (q1Intrinsic) {
    sum++;
  }
  if (q2Intrinsic) {
    sum++;
  }
  if (q3Intrinsic) {
    sum++;
  }
  if (q4Intrinsic) {
    sum++;
  }
  if (q5Intrinsic) {
    sum++;
  }
  console.log(sum); //testing purposes, check counter

  //pass variables on submit
  document.survey.onsubmit = function() {
    if (sum == 3 || sum == 4 || sum == 5) {//intrinsic answers
      var badgeArea = document.getElementById("badgeArea");
      //image
      var badge = document.createElement("img");
      badge.setAttribute("src", "images/intrinsic.gif");
      //description
      var declaration = document.createElement("p");
      var declarationText = document.createTextNode("You have a slight disposition towards intrinsic motivators.You are more likely to be motivated by personal enjoyment/fulfillment. This means that exterior motivators don't fuel your desire to do or complete tasks. Instead, you find it rewarding to learn or do things for the sake of doing them.");
      //link
      var badgeRef = document.createElement("a");
      var badgeRefText = document.createTextNode("click here to share your badge");
      badgeRef.setAttribute("href", "https://gph.is/2SyrdNJ");
      badgeRef.setAttribute("target", "_blank"); //new tab
      //connect
      badgeArea.appendChild(badge); //img to area
      badgeArea.appendChild(declaration); //declaration to area
      badgeArea.appendChild(badgeRef); //badgeRef to area
      declaration.appendChild(declarationText); //text to p
      badgeRef.appendChild(badgeRefText); //text to a

    } else if (sum == 0 || sum == 1 || sum == 2) { //extrinsic motivation
      var badgeArea = document.getElementById("badgeArea");
      //image
      var badge = document.createElement("img");
      badge.setAttribute("src", "images/extrinsic.gif");
      //description
      var declaration = document.createElement("p");
      var declarationText = document.createTextNode("You have a slight disposition towards extrinsic motivators. You are more likely to be motivated by incentives. This means that exterior motivators fuel your desire to do or complete tasks. Things like rewards or the ability to avoid punishemnts are the best way to entice you into completing work.");
      //link
      var badgeRef = document.createElement("a");
      var badgeRefText = document.createTextNode("click here to share your badge");
      badgeRef.setAttribute("href", "https://gph.is/2rltFsy");
      badgeRef.setAttribute("target", "_blank"); //new tab
      //connect
      badgeArea.appendChild(badge); //img to area
      badgeArea.appendChild(declaration); //declaration to area
      badgeArea.appendChild(badgeRef); //badgeRef to area
      declaration.appendChild(declarationText); //text to p
      badgeRef.appendChild(badgeRefText); //text to a
    }
    else {
      alert("Please make sure to pick an answer");
    }
    return false;
  }
}

window.onload = function() {
  validateData();
  checkQuiz();
}
