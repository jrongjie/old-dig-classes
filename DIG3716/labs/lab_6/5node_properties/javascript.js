// COUNT DESCENDANTS
//1. write the code that for each <li> shows the number of nested <li> (all descendants, including the deeply nested ones)
for (let li of document.querySelectorAll('li')) {
  let title = li.firstChild.data;
  console.log(li.getElementsByTagName('li'));
}

//2. WHAT'S IN THE NODETYPE
//what does the script show?
1, nodeType is a number and the script tag was the last on the opened tag

//3. TAG IN COMMENT
//what does this code show?
The Body

//4. WHERES THE DOCUMENT IN THE HIERARCHY
//which class does the document belong to?
HTMLDocument
//what's its place in the DOM HIERARCHY?
Document
//does it inherit from node or element or maybe htmlelement?
Node
