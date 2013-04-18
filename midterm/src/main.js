var stories=[
	{
	"type": "primary",
	"date":"1870",
	"text": "sajkfa",
	"name":"restell1",
	"popup":"popup1",
	"node":"circle1",
	"img":"img/circle.png"
	},
	{
	"type": "secondary",
	"date":"1879",
	"text": "hello",
	"name":"restell2",
	"popup":"popup2",
	"node":"circle2",
	"img":"img/circle.png"
	}


];

$(document).ready(function(){

	for(var i=0; i< stories.length; i++){
		console.log(i + " " + stories[i].name);
		
		var sections = '<a href="#' + stories[i].popup + '" data-rel="popup" data-position-to="#' + stories[i].node + '"><img id="' + stories[i].node + '" class="circle" src="' + stories[i].img + '" alt="' + stories[i].name + '"/></a><div data-role="popup" id="' + stories[i].popup + '"><h3>' + stories[i].date + '</h3><h4>' + stories[i].text + '</h4></div>';
	
		$('#scroller').prepend(sections);
		
		}

});