
function changeImg(obj) {
  obj.src="images/bulb4_edited.png";
}

function changeImg2(obj) {
  obj.src="images/bulb4.png";
}

//        Animation effects for the links

var Link = document.querySelectorAll(".links");
for(var i=0;i<Link.length;i++){
  Link[i].addEventListener("mouseover",function(event){
    // event.target.style.fontsize="30px";
    // event.target.style.color="white";
    changeColor(event.target);
  });
    
  Link[i].addEventListener("mouseout",function(event){
    orginalColor(event.target);
  });
}

function changeColor(link){
  link.classList.add("mouseOver");
}

function orginalColor(link) {
  link.classList.remove("mouseOver");
}

function changeBack(this){
  this.style.backgroundcolor = "#0e3eda";
  this.style.color = "#fff";
}