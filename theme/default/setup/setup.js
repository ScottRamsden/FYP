$(function () {
    $("#step1").toggle();
    $("#step2").toggle();
    $("#setupfinish").toggle();

    $("#nextstep.start").click(function () {
        $("#start").toggle();
        $("#step1").toggle();
    });
    $("#nextstep.one").click(function () {
        $("#step1").toggle();
        $("#step2").toggle();
    });

    $("#nextstep.finish").click(function () {
        $("#step2").toggle();
        $("#setupfinish").toggle();
    });

    $("#restartsetup").click(function () {
        $("#start").show();
        $("#step1").hide();
    });
});
