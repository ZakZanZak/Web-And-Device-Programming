

function playPause() { 
    var myVideo = document.getElementById("video1");  
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    var myVideo = document.getElementById("video1"); 
    myVideo.width = 560; 
} 

function makeSmall() { 
    var myVideo = document.getElementById("video1"); 
    myVideo.width = 320; 
} 

function makeNormal() { 
    var myVideo = document.getElementById("video1"); 
    myVideo.width = 420; 
} 
