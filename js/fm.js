var fm = {

    init: function (s_url) {
        $("#music-player").jPlayer({
            ready: function (event) {
                $(this).jPlayer("setMedia", {
                    mp3: s_url
                }).jPlayer("play");
            },
            ended: function () {
                fm.nextSong();
            }
        });

        fm.gotoNext();
        fm.changePlayerSkin();
    },

    gotoNext: function () {
        $("#next").click(function () {
            fm.nextSong();
            return false;
        });

    },

    nextSong: function () {
        $.ajax({
            url: "music/nextSong?time=" + Math.random() + "",
            method: 'get',
            success: function (data) {
                var data = jQuery.parseJSON(data);
                var href = data[0].song_url,
                    id = data[0].id,
                    artist = data[0].artist,
                    song_name = data[0].song_name,
                    song_url = data[0].song_url,
                    album = data[0].album,
                    album_image = data[0].album_image;
                $("#album_image").attr("src", album_image).attr("alt", album);
                $(".album").html(album);
                $(".artists").html(artist);
                $(".song-name").html(song_name);
                $("#single-song").attr("href", "http://lanqy.info/music/single/" + id);
                document.title = song_name + "----" + artist;
                $("#music-player").jPlayer("setMedia", {
                    mp3: href
                }).jPlayer("play");
                fm.changePlayerSkin();
                fm.running();
            }
        });
    },

    changePlayerSkin: function () {
        var color = fm.getRandomColor();
        var _color = color.split("").sort().join("");
        fm.randomPlayerSkin(color, _color);

    },

    getRandomColor: function () {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.round(Math.random() * 15)];
        }
        return color;
    },

    getGradientColor: function (c, _c) {
        var gradient = ['background: ' + c + ';'];
        gradient.push('background: -webkit-gradient(linear, 0 0, 0 bottom, from(' + c + '), to(' + _c + '));');
        gradient.push('background: -moz-linear-gradient(' + c + ', ' + _c + ');');
        return gradient;
    },

    randomPlayerSkin: function (c, _c) {
        var css = fm.getGradientColor(c, _c).join(""),
            music = document.getElementById("music");
        music.style.cssText = css;
        $(".progress").css("background", c);
        $(".play").css("background", c);
        $(".pause").css("background", c);
        $(".volume-value").css("background", c);

    },

    running: function () {
        var w = $(window).width() - 15,
            h = $(window).height() - 15;
        var r, g, b, x, y, color, filled = true,
            radius = 1;
        for (var i = 0; i < 100; i++) {
            r = Math.floor(Math.random() * (254));
            g = Math.floor(Math.random() * (254));
            b = Math.floor(Math.random() * (254));
            x = Math.floor(Math.random() * (w));
            y = Math.floor(Math.random() * (h));
            color = "rgba(" + r + ", " + g + ", " + b + ", 0.5)";
            jc.circle(x, y, radius, color, filled).animate({
                radius: 100,
                opacity: 0
            }, 3000, function () {
                this.del();
            });
        }
    }
};


var Cookie = {

    create: function (name, val, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else var expires = "";
        document.cookie = name + "=" + val + expires + "; path=/";
        this[name] = val;
    },

    read: function (name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    },

    del: function (name) {
        this.create(name, '', - 1);
        this[name] = undefined;
    }
}