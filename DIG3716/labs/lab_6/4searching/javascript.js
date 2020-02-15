//1. how to find the table with id="age-table"
let table = document.getElementById('age-table');
//2. how to find all label elements inside that table (should be 3)
table.getElementsByTagName('label');
//3. how to find the first td in that table (with the word "age")
table.querySelector('td')[0];
//4. how to find the form with the name search
let form = document.getElementsByName('search');
//5. how to find the first input in that form
form.getElementsByTagName('input');
//6. how to find the last input in that form
let input = form.querySelectorAll('input');
input[input.length-1];
