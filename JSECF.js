var AllClientName = ["Quentin Gaillard","Alexis Fabre","Adam Pesquet","Léandre Dupuich","Charlotte Deparrois","Agathe Perrin"];
var AllClientsID = ["00000001","00000002","00000003","00000004","00000005","00000006"];
var BranchIdClientOne = ["0001","0002","0003"];
var BranchIdClientTwo = ["0004","0005","0006"];
var BranchIdClientThree = ["0007","0008","0009"];
var BranchIdClientFour = ["0010","0011","0012"];
var BranchIdClientFive = ["0013","0014","0015"];
var BranchIdClientSix = ["0016","0017","0018"];

//  _______________________________________________________
// |  First function is for autocomplete on research field |
// |_______________________________________________________|

function autocomplete (inp, arr){

    var currentFocus;

    inp.addEventListener("input", function(e){

        var a, b, i, val=this.value;
        closeAllLists();
        currentFocus = -1;

        if(!val) { return false;}
        a = document.createElement("DIV");
        
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        
        this.parentNode.appendChild(a);

        for(i=0; i<arr.length; i++) {
            if(arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                b = document.createElement("DIV");
                b.innerHTML = "<strong>"+ arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                b.innerHTML += "<input type='hidden' value='" +arr[i] + "'>"

                b.addEventListener("click", function(e){

                    inp.value = this.getElementsByTagName("input")[0].value ;

                    closeAllLists();
                })
                a.appendChild(b);
            }
        }
    });

    inp.addEventListener("keydown", function(e){

        var x = document.getElementById(this.id + "autocomplete-list");
        if(x) x = x.getElementsByTagName("div");
        if (e.keycode ==40) {
            
            currentFocus++;
            addActive(x);

        } else if (e.keycode == 38) {
            
            currentFocus--;
            addActive(x);

        } else if (e.keycode == 13) {

            e.preventDefault();
            if (currentFocus > -1) {

                if (x) x[currentFocus].click();
            }
        }
    });

    function addActive(x){

        if (!x) return false;
        removeActive(x);

        if(currentFocus >= x.length) currentFocus = 0;
        if(currentFocus < 0) currentFocus = (x.length-1);

        x[currentFocus].classList.add("autocomplete-active");
        
    }

    function removeActive(x) {

        for (var i = 0; i < x.length; i++){
            
            x[i].classList.remove("autocomplete-active");
        }
    }

    function closeAllLists(elmnt) {

        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++){
            if (elmnt != x[i] && elmnt != inp){
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }

    document.addEventListener ("click", function(e){

        closeAllLists(e.target);
    });
}

//  _______________________________________________________
// |  Second part is for toggle class on button click and  |
// |  filter by activ or inactiv                           |
// |_______________________________________________________|



function SwitchClass(string) {

    var element = document.getElementById(string);
    element.classList.toggle("inactif")
    element.classList.toggle("activ");

}



filterSelection("all");
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) AddClass(x[i],"show");
    }
}

function AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function RemoveClass (element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}



function ChangeActivebtn () {
    var btnContainer = document.getElementById("Researchbtn");
        var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
    }
}

//  ________________________________________________________________
// |  Third part is for toggle style on button click, activating    |
// |  option window on each branch, filter for branch and form open |
// |________________________________________________________________|

function OptionBranchToggle(string1,string2) {

    var togglebtn = document.getElementById(string1);
    var togglefull = document.getElementById(string2);
    if (togglebtn.style.display === "flex") {
        togglebtn.style.display = "none";
        togglefull.style.display = "flex";
    } else {
        togglebtn.style.display = "flex";
        togglefull.style.display = "none";
    }

}

function filterBranch() {
    var Filter = document.querySelector('input').value;
    var BranchOne = document.getElementById("FilterBranchOne");
    var BranchTwo = document.getElementById("FilterBranchTwo");
    var BranchThree = document.getElementById("FilterBranchThree");
    if (Filter === "0001") {
        BranchTwo.style.display = "none";
        BranchThree.style.display = "none";
    } else if (Filter === "0002") {
        BranchThree.style.display = "none";
        BranchOne.style.display = "none";
    }else if (Filter === "0003") {
        BranchTwo.style.display = "none";
        BranchOne.style.display = "none";
    }else {}
}

function openForm() {
    document.getElementById("popupForm").style.display = "flex";
}

function closeForm() {
    document.getElementById("popupForm").style.display = "none";
}