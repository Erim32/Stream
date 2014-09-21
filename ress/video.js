
function loadVideo(playerUrl, autoplay) {
  swfobject.embedSWF(
      playerUrl + '&rel=1&border=0&fs=1&autoplay=' + 
      (autoplay?1:0), 'player', '290', '250', '9.0.0', false, 
      false, {allowfullscreen: 'true'});
}

function showMyVideos2(data) {
  var feed = data.feed;
  var entries = feed.entry || [];
  var html = ['<ul class="videos">'];
  for (var i = 0; i < entries.length; i++) {
    var entry = entries[i];
    var title = entry.title.$t.substr(0, 50);
    var thumbnailUrl = entries[i].media$group.media$thumbnail[0].url;
    var playerUrl = entries[i].media$group.media$content[0].url;
    var videoID = playerUrl.replace("?version=3&f=user_uploads&app=youtube_gdata",""); 
    var videoID = videoID.replace("v/","watch?v=");
    html.push('<li>',
              '<a class="zoombox" href="', videoID, '"><img class="miniaturevideo" src="', 
              thumbnailUrl, '" width="320" height="180"><span class="titlec">', title, '   </span></img></a>', '</span>');
  }
  html.push('</ul><br style="clear: left;"/>');
  document.getElementById('videos2').innerHTML = html.join('');
  if (entries.length > 0) {
    loadVideo(entries[0].media$group.media$content[0].url, false);
  }
}
