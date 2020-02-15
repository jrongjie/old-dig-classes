// CREATETEXTNODE VS INNERHTML VS TEXTCONTENT
both elem.append(document.createTextNode(text)) and elem.textContent = text do the same thing.

//CLEAR THE ELEMENT
function clear(elem) {
  elem.innerHTML = '';
}

//WHY DOES "AAA" REMAIN
because aaa isn't wrapped in a tag and the table.remove(); only affects tag elements

//CREATE A LIST
let ul = document.createElement('ul');
document.body.append(ul);

while (true) {
  let data = prompt("Enter the text for the list item", "");
    if (!data) {
      break;
  }

  let li = document.createElement('li');
  li.textContent = data;
  ul.append(li);
}

//CREATE A TREE FROM THE OBJECT
let data = {
  "Fish": {
    "trout": {},
    "salmon": {},
  },

  "Tree": {
    "Huge": {
      "sequoia": {},
      "oak": {},
    },
    "Flowering": {
        "redbud": {},
        "magnolia": {},
    }
  }
};

function createTree(container, obj) {
  container.innerHTML = createTreeText(obj);
}

function createTreeText(obj) {
  let li = '';
  let ul;
  for (let key in obj) {
    li += '<li>' + key + createTreeText(obj[key]) + '</li>';
  }

  if (li) {
    ul = '<ul>' + li + '</ul>'
  }

  return ul || '';
}

createTree(container, data);

//SHOW DESCENDANTS IN A TREE
let lis = document.getElementsByTagName('li');

for (let li of lis) {
  let descendantsCount = li.getElementsByTagName('li').length;
  if (!descendantsCount) continue;
  li.firstChild.data += ' [' + descendantsCount + ']';
}

//CREATE A CALENDAR
function createCalendar(elem, year, month) {
  let mon = month - 1; // months in JS are 0..11, not 1..12
  let d = new Date(year, mon);
  let table = '<table><tr><th>MO</th><th>TU</th><th>WE</th><th>TH</th><th>FR</th><th>SA</th><th>SU</th></tr><tr>';
    for (let i = 0; i < getDay(d); i++) {
      table += '<td></td>';
    }
    while (d.getMonth() == mon) {
      table += '<td>' + d.getDate() + '</td>';
      if (getDay(d) % 7 == 6) {
        table += '</tr><tr>';
      }

      d.setDate(d.getDate() + 1);
    }

    if (getDay(d) != 0) {
      for (let i = getDay(d); i < 7; i++) {
      table += '<td></td>';
      }
    }

    table += '</tr></table>';

    elem.innerHTML = table;
  }

  function getDay(date) {
    let day = date.getDay();
    if (day == 0) day = 7;
    return day - 1;
  }

  createCalendar(calendar, 2012, 9);

//colors
function update() {
  let clock = document.getElementById('clock');
  let date = new Date(); // (*)
  let hours = date.getHours();
  if (hours < 10) hours = '0' + hours;
  clock.children[0].innerHTML = hours;

  let minutes = date.getMinutes();
  if (minutes < 10) minutes = '0' + minutes;
  clock.children[1].innerHTML = minutes;

  let seconds = date.getSeconds();
  if (seconds < 10) seconds = '0' + seconds;
  clock.children[2].innerHTML = seconds;
}

//INSERT THE HTML IN THE LIST
one.insertAdjacentHTML('afterend', '<li>2</li><li>3</li>');

//SORT THE TABLE
let sortedRows = Array.from(table.rows)
    .slice(1)
    .sort((rowA, rowB) => rowA.cells[0].innerHTML > rowB.cells[0].innerHTML ? 1 : -1);

    table.tBodies[0].append(...sortedRows);
/*

*/
