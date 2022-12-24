function MSearchInstant() {
    var input, filter, ul, li, course, nocourse, a, i, txtValue;
    input = document.getElementById("AR-myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("ar-for-filter");
    li = ul.getElementsByTagName("h5");
    course = document.getElementsByClassName("category-box");
    nocourse = document.getElementsByClassName("btm-srch-ttl2");

    for (i = 0; i < li.length; i++) {

        a = li[i].getElementsByTagName("span")[0];
        txtValue = a.textContent || a.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            course[i].style.display = "";

            // var element = document.getElementById("idforfiltersh");
            // element.classList.add("displayhideshow");
        } else {
            course[i].style.display = "none";
            // var element = document.getElementById("idforfiltersh");
            // element.classList.remove("displayhideshow");
        }

    }
}
