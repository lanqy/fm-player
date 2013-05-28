$(function(){
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