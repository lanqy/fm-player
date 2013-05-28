require.config({
    paths: {
        jQuery: 'jquery',
        jCanvaScript: 'jCanvaScript',
        jplayer: 'jplayer',
        fm: 'fm',
        config: 'config'
    }
});
require(['jQuery', 'jCanvaScript', 'jplayer', 'fm', 'config'], function () {
    var s = $("#init-song").val();
    fm.init(s);
    var contact = Cookie.read("contact");
    if (contact == null) {
        $(".create_by").show();
    } else {
        $(".create_by").hide()
    }

    $(".create_by b").click(function () {
        Cookie.create("contact", "hide", 7);
        $(".create_by").hide()
    })
    var win = $(window).width() - 15,
        h = $(window).height() - 15;
    var canvas = document.getElementById("canvas");
    canvas.width = win;
    canvas.height = h;
    jc.start("canvas", true);
	fm.running();
});