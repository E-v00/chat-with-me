

function scroll_to(id){
	var element = document.getElementById(id);
	element.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
}


function goto(path){
	window.location.href = path;
}

function openPanel(){
	document.getElementById("control-panel").style.width = "300px";
  	document.body.style.marginLeft = "300px";
}

function closePanel() {
  document.getElementById("control-panel").style.width = "0";
  document.body.style.marginLeft= "0";
}

function changeSize(tag) {
  var listValue = tag.options[tag.selectedIndex].text;
  document.getElementById("chatbox").style.fontSize = listValue;
}

function changeColor(tag) {
  var listValue = tag.options[tag.selectedIndex].text;
  document.getElementById("chatbox").style.color = listValue;
}