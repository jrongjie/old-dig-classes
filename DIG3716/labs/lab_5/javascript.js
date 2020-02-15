/* alert("This is an alert test.");
confirm("Is this OK?");
var favColor = prompt("What is your favorite color?", "");
alert("You said your favorite color is: " + favColor); */

//switch statement example
/* var theDay= prompt ("What day is it?");
  switch (theDay){
    case "Friday":
      alert ("Finally Friday");
      break;
    case "Saturday":
      alert ("Super Saturday");
      break;
    case "Sunday":
      alert ("Sleepy Sunday");
      break;
    default:
      alert ("I'm looking forward to this weekend!");
  }

//Individual
var strInput = prompt("Please enter 1, 2, or 3");
var intInput = parseInt (strInput);

if (intInput == 1) {
  alert ("You entered 1!");
} else if (floatInput == 2) {
  alert ("You entered a 2!");
} else if (floatInput ==3) {
  alert ("You entered a 3!");
} else {
  alert("I said a number between 1 and 3!!");
} */

//Individual practice
/* var question1 = prompt ("Who is the professor of DIG3716?");
  switch (question1) {
    case "Novatnak":
      alert ("That's correct! Professor Dan Novatnak.");
      break;
    case "Dan":
      alert ("Bad form, but correct! Professor Dan Novatnak.")
      break;
    case "Eissa":
      alert ("Eissa is the GTA not the professor!")
      break;
    default:
      alert ("Professor Dan Novatnak teaches DIG3716.")
  }
  var question2 = prompt ("What day is the DIG3716 class on?");
    switch (question1) {
      case "Thursday":
        alert ("That's correct!");
        break;
      case "thursday":
        alert ("That's correct!");
        break;
      case "thurs":
        alert ("That's correct!");
        break;
      default:
        alert ("Nope, DIG3716 is on Thursday!")
    }*/

//for loop practice
for (x = 0; x < 6; x++) {
  console.log("The for loop number is "+x);
}

//While loop practice 1-5
var a = 0;
while (a < 6) {
  console.log("The while loop number is " +a);
  a++;
}

//do...while loop practice
var b = 0;
do {
  console.log("The do...while loop number is "+b);
  b++;
} while (b < 6);

//group practice - guessing game

//string manipulation
var myString = prompt("What's a cool animal?");
console.log(myString.length);
console.log(myString.toLowerCase);
alert(myString.carAt(myString.lastIndexOf()));
