const foods = function () {
    let tmp = null;
    $.ajax({
        async: false,
        type: "POST",
        url: "phpFunctions/getFoods.php",
        datatype: "json",
        success:
            function (data) {
                tmp = JSON.parse(data);
            }
    });
    return tmp;
}();

$(document).ready(() => {
    console.log(foods);

});