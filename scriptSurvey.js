window.onload = function () {
    VirtualSelect.init({
        ele: '#multipleSelect',
        maxValues: 10,
        minValues: 10,
        required: true,
        searchPlaceholderText: "Recherchez le nom d'un aliment, d'une boisson ou d'une catégorie de produits...",
        optionsSelectedText: 'aliments sélectionnés',
        optionSelectedText: 'aliment sélectionné',
        noSearchResultsText: "Le produit que vous recherchez n'a pas été trouvé."
    });
    insertFood();
}

function insertFood() {
    $.ajax({
        url: "phpFunctions/getFoods.php",
        datatype: "json",
        success:
            function (data) {
                const foods = JSON.parse(data);
                $.each(foods, function (i) {
                    document.querySelector('#multipleSelect').addOption({
                        value: foods[i].alim_code,
                        label: foods[i].alim_nom_fr,
                        description: foods[i].alim_ssgrp_nom_fr
                    });
                })
            }
    });
}
