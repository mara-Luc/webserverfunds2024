function changeText() 
    {
        document.getElementById("myParagraph").innerHTML = "The text has been changed!";
    }

function hidebtn() 
{
    var x = document.getElementById("myDIV");
    
    if (x.style.display === "none") 
        {
            x.style.display = "block";
        } 
        
    else 
        {
            x.style.display = "none";
        }
    
}

function imagemod() 
    {
        document.getElementById("myImg1").src = "picks/Digimon.jpg";
        document.getElementById("myImg2").src = "picks/Digimon title.jpg";
        document.getElementById("myImg3").src = "picks/digimon-adventure-tr.jpg";
    }

function changebtn(elem) 
    {
        elem.innerHTML = "Hello World!";
    }

