//custom orbit button
$(".next-slide").click(function() {
    $("#portfolio-boxes-orbit").siblings(".orbit-next").click();
    $("#portfolio-boxes-orbit").siblings(".orbit-timer").click(); // Remove this line to pause the orbit. (it pauses whenever you change slides by default)
});

/*$(".prev-slide").click(function() {
    $("#portfolio-boxes-orbit").siblings(".orbit-prev").click();
    $("#portfolio-boxes-orbit").siblings(".orbit-timer").click(); // Remove this line to pause the orbit. (it pauses whenever you change slides by default)
});*/