window.onload = function () {
    getRanking();
}

function getRanking() {
    $.ajax({
        url: "phpFunctions/getTop20.php",
        datatype: "json",
        success:
            function (data) {
                const foods = JSON.parse(data);
                $.each(foods, function (i) {
                    let tr = document.createElement("tr");
                    let tdProduit = document.createElement("td");
                    let tdCategorie = document.createElement("td");
                    let tdNbSelection = document.createElement("td");
                    tdProduit.innerHTML = foods[i].alim_nom_fr;
                    tdCategorie.innerHTML = foods[i].alim_ssgrp_nom_fr;
                    tdNbSelection.innerHTML = foods[i].nb_selection;
                    document.getElementById("tbody").appendChild(tr);
                    document.getElementById("tbody").appendChild(tdProduit);
                    document.getElementById("tbody").appendChild(tdCategorie);
                    document.getElementById("tbody").appendChild(tdNbSelection);
                })
            }
    });
}