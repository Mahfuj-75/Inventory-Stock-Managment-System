document.getElementById("search").addEventListener("keyup", function() {

    let searchValue = this.value;
    let xhr = new XMLHttpRequest();

    xhr.open("GET", "../../API/search_products.php?search=" + searchValue, true);
    xhr.onload = function() {

        if (this.status == 200) {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    xhr.send();
});