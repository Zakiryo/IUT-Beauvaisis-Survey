
$.ajax({
    type: "POST",
    url: "phpFunctions/getFoods.php",
    datatype: "json",
    success:
        function (data) {
            let index = 0;
            const foods = JSON.parse(data);
            const select = document.getElementById('selectFoods');
            $.each(foods, function (i) {
                index++;
                let opt = document.createElement('option');
                opt.value = index;
                opt.innerHTML = foods[i].alim_nom_fr;
                select.appendChild(opt);
            })
        }
});

