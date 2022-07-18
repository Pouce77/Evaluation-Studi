//click sur le bouton du carousel ayant l'Id : boutonActu.
let button=document.getElementById('boutonActu');
button.addEventListener("click",clickbtn);
function clickbtn(){
    location.href='actualites.php';
}