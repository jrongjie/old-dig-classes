//GET THE ATTRIBUTE: Write the code to select the element with data-widget-name attribute from the document and to read its value.
let elem = document.querySelector('[data-widget-name]');
console.log(elem.getAttribute('data-widget-name'));

//MAKE EXTERNAL LINKS ORANGE: Make all external links orange by altering their style property. A link is external if it's href has :// in it but doesn't start with http://internal.com
let links = document.querySelectorAll('a');
for (let link of links) {
  let href = link.getAttribute('href');
  if (!href) continue;
    if (!href.includes('://')) continue;
      if (href.startsWith('http://internal.com')) continue;
        link.style.color = 'orange';
}
