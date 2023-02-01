window.onload = function () {
    VirtualSelect.init({
        ele: '#multipleSelect',
        maxValues: 10
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
                        label: foods[i].alim_nom_fr
                    });
                })
            }
    });
}
