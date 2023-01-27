

$("#toggleMap").click(function(){$("map-responsive").toggle();})

$("#info").html("<p>The info will go here.</p>");
let line1, line1Text; // don’t need the intermediate step of line1TextArray
line1 = [{text:  "What"}, {text: "hurrying"}, {text: "human"}, {text: "tides"}, 
    {text: "or"}, {text: "day"}, {text: "or"}, {text: "night!"}];
line1Text = line1.map(function(word){
    return word.text;
    }).join(" ");
$("#poem").html("<p>" + line1Text + "<br /></p>");