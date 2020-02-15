function init(){

  var form = document.createElement("form");
  form.id = "form";
  //form.setAttribute("method", "post");

//profile image
  var profileImg = document.createElement("img");
  profileImg.setAttribute("src", "img/profile.png");
  profileImg.setAttribute("alt", "Profile image of Jon Friskics");
  profileImg.setAttribute("height", "45");
  profileImg.setAttribute("width", "45");
  form.appendChild(profileImg);
  profileImg.id = "profileImg";

//textarea
  var comment = document.createElement("textarea");
  comment.setAttribute("type", "text");
  comment.setAttribute("name", "comment");
  comment.setAttribute("rows", "4");
  comment.setAttribute("cols", "78");
  form.appendChild(comment);
  comment.id = "comment";

//google icon
  var gLogoUser = document.createElement("img");
  gLogoUser.setAttribute("src", "img/03-google.png");
  gLogoUser.setAttribute("alt", "Google Button");
  form.appendChild(gLogoUser);
  gLogoUser.id = "gLogoUser";

//google username
  var gUser = document.createTextNode(" google reader using jonfriskics@gmail.com");
  form.appendChild(gUser);

//post button
  var post = document.createElement("input");
  post.setAttribute("type", "submit");
  post.setAttribute("value", "Post");
  form.appendChild(post);
  post.id = "post";

//or
  var or = document.createTextNode(" or ");
  form.appendChild(or);

//makes cancel a link
  var link = document.createElement("a");
  link.href = "#";
  link.id = "cancelLink";
  //cancel button
    var cancel = document.createTextNode("Cancel");
    link.appendChild(cancel);
    form.appendChild(link);

//connection to google div
  var element = document.getElementById("google");
  element.firstElementChild.insertBefore(form, element.firstElementChild.firstChild);

}

window.addEventListener("load", init, false);
