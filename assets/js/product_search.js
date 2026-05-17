let searchInput = document.getElementById("search");

searchInput.addEventListener("keyup", function() {

    let search = searchInput.value;

    let xhttp = new XMLHttpRequest();

    xhttp.open(
        "GET",
        "../../API/search_products.php?search=" + search,
        true
    );

    xhttp.send();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("result").innerHTML = this.responseText;

        }

    };

});