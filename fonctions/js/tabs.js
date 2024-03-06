function openHouse(target, house_name) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display="none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    console.log(document.getElementsByClassName(house_name)[0]);
    document.getElementsByClassName(house_name)[0].style.display = "block";
    console.log(document.getElementsByClassName(house_name)[0]);
    target.className += " active";
};


Array.from(document.getElementsByClassName("tablink")).forEach((tablink) => {
    tablink.addEventListener("click", function(e) {
        id = tablink.id;
        openHouse(tablink, id);
    });
});
first_tab = Array.from(document.getElementsByClassName("tablink"))[0];
openHouse(first_tab,first_tab.id);