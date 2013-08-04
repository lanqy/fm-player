$(function () {
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
    });

    $("#music-player").jPlayer({
        swfPath: "js/",
        supplied: "mp3,m4a,oga,webma",
        wmode: "window",
        preload: 'metadata',
        volume: 0.8,
        muted: false,
        cssSelectorAncestor: '#player',
        cssSelector: {
            play: '.play',
            pause: '.pause',
            stop: '.stop',
            seekBar: '.buffer',
            playBar: '.progress',
            mute: '.volume_on',
            unmute: '.muted',
            volumeBar: '.volume-bar',
            volumeBarValue: '.volume-value',
            volumeMax: '.volume-max',
            currentTime: '#player_duration',
            duration: '#player_elapsed'

        },
        errorAlerts: false,
        warningAlerts: false

    });
})