
function openBuildoutTab(evt, tabName){
    var i, tabcontent, tablinks;

tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.lenght; i++)
{
    tabcontent[i].style.display = "none";
}

tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.lenght; i++)
{
    tablinks[i].className = tablinks[i].className.replace(" active", "");
}

document.getElementById(tabName).style.display = "block";
evt.currentTarget.className += " active";

}