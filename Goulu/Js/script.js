//Teht 1

function Teht1Clicked(i){
if(i == "Button1"){
document.getElementById("Text1").innerHTML = "vaaaaaaaaaaaaaaaaaau";
};
if(i == "Button2"){
document.getElementById("Text2").innerHTML = "Olipas";
};
};

function ShowHide1(i){
    if(i == "Teht1HideBtn"){
    document.getElementById("Buttons").style.display = "none";
    document.getElementById(i).style.display = "none";
    document.getElementById("Teht1ShowBtn").style.display = "";
    };
    if(i == "Teht1ShowBtn"){
    document.getElementById("Buttons").style.display = "flex";
    document.getElementById(i).style.display = "none";
    document.getElementById("Teht1HideBtn").style.display = "block";
    };
    
    };

//////////////////////////////////////////////////
//Teht 2

function Teht2Clicked(i){
    if(i == "Button3"){
    document.getElementById("Teht2Text1").innerHTML = "Text Here And There";
    };
    if(i == "Button4"){
    document.getElementById("Teht2Text2").innerHTML = "Text Here And There";
    };
    if(i == "Teht2Kuva1"){
        document.getElementById("Teht2Text1").innerHTML = "Text Here";
    };
    if(i == "Teht2Kuva2"){
        document.getElementById("Teht2Text2").innerHTML = "Text Here";
    };
};

function ShowHide2(i){
if(i == "Teht2HideBtn"){
document.getElementById("Buttons2").style.display = "none";
document.getElementById(i).style.display = "none";
document.getElementById("Teht2ShowBtn").style.display = "";
};
if(i == "Teht2ShowBtn"){
document.getElementById("Buttons2").style.display = "flex";
document.getElementById(i).style.display = "none";
document.getElementById("Teht2HideBtn").style.display = "block";
};

};

////////////////////////////////////////////////////
//Teht 3