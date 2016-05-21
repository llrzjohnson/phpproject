$(document).ready(function () {

    var cols = new Array("a", "b", "c", "d", "e", "f", "g", "h");
    var ranks = new Array(1, 2, 3, 4, 5, 6, 7, 8);

    var pieces = new Array();
    pieces["P"] = "&#9817";
    pieces["R"] = "&#9814";
    pieces["N"] = "&#9816";
    pieces["B"] = "&#9815";
    pieces["K"] = "&#9812";
    pieces["Q"] = "&#9813";
    pieces["p"] = "&#9823";
    pieces["r"] = "&#9820";
    pieces["n"] = "&#9822";
    pieces["b"] = "&#9821";
    pieces["k"] = "&#9818";
    pieces["q"] = "&#9819";
    pieces[" "] = "";

    function readFEN(fen) {

        fen = fen.replace(/\//g, "");
        fen = fen.replace(/1/g, " ");
        fen = fen.replace(/2/g, "  ");
        fen = fen.replace(/3/g, "   ");
        fen = fen.replace(/4/g, "    ");
        fen = fen.replace(/5/g, "     ");
        fen = fen.replace(/6/g, "      ");
        fen = fen.replace(/7/g, "       ");
        fen = fen.replace(/8/g, "        ");

        var key;
        for (var i = 7 ; i >= 0 ; i--) {
            for (var j = 0 ; j <= 7 ; j++) {
                key = fen[(7 - i) * 8 + j];
                $("#" + cols[j] + ranks[i]).html(pieces[key]);
            }
        }
    }

    /* create chessboard */

    for (var i = 7 ; i >= 0 ; i--) {
        for (var j = 0 ; j <= 7 ; j++) {
            bgcolor = ((i + j) % 2 == 0) ? "darksquare" : "lightsquare";
            $("#board").append("<div class=\"square piece target " + bgcolor + "\" id=\"" + cols[j] + ranks[i] + "\"></div>");
        }
    }

    /* create dropper */

    $("#board").after("<div id=\"dropper\" class=\"piece\"></div>");
    $("#dropper").offset({ top: $("#a8").offset().top, left: $("#a8").offset().left });

    /* read and display board position */

    readFEN("rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1");


    /* make pieces droppable */

    var dragging = false;
    var draggingsource = false;

    $("#dropper").draggable({
        containment: [0, 0, 370, 365],	/* only for including into this blog */
        start: function (event, ui) {
            dragging = $("#" + draggingsource).attr("id");
            $("#" + draggingsource).text("");
        },
        stop: function (event, ui) {
            if (dragging) {
                $("#dropper").offset({ top: $("#" + draggingsource).offset().top, left: $("#" + draggingsource).offset().left });
                $("#" + draggingsource).text($("#dropper").text());
                dragging = false;
            }
        }
    });

    $(".target").droppable({
        drop: function (event, ui) {
            if (dragging != $(this).attr("id")) {
                $("#dropper").offset({ top: $(this).offset().top, left: $(this).offset().left });
                $(this).text($("#dropper").text());
                draggingsource = $(this).attr("id");
                dragging = false;
            }
        }
    });

    $(".square").mouseenter(function () {
        if (!dragging && $(this).text() != "") {
            draggingsource = $(this).attr("id");
            $("#dropper").text($(this).text());
            $("#dropper").offset({ top: $(this).offset().top, left: $(this).offset().left });
            $("#dropper").css("z-index", "1");
        }
    });

    $("#dropper").mousedown(function () {
        $(this).css("cursor", "move");
    }).mouseup(function () {
        $(this).css("cursor", "pointer");
    });

});