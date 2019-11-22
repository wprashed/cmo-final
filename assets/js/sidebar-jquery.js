/**
 * Created by USER on 5/26/19.
 */
function openNav() {
    var size = document.getElementById("mySidebar");
    if(size.clientWidth === 250){
        size.style.width = "0px";
    } else {
        size.style.width = "250px";
    }
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0px"
}
