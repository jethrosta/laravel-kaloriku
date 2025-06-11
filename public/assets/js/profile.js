const controls = document.querySelectorAll(".tab-control");
const tabs = document.querySelectorAll(".tab");

// display none for 1-length tabs
for (let i = 1; i < tabs.length; i++) {
    tabs[i].style.display = "none";
}

// set value forl all tabs
for (let i = 0; i < tabs.length; i++) {
    tabs[i].setAttribute("value", i);
}

// add event listener for all controls
for (let i = 0; i < controls.length; i++) {
    controls[i].setAttribute("value", i);
    controls[i].addEventListener("click", displayTab);
}

// display tab function
function displayTab() {
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
        controls[i].removeAttribute("id");
    }
    tabs[this.value].style.display = "block";
    controls[this.value].setAttribute("id", "control-selected");
}
