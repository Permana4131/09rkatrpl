
<script>
$(window).on('resize', function() {
  if($(window).width() > 600) {
      $('#body').addClass('limit1200');
      $('#body').removeClass('limit400');
  }
  else {
      $('#body').addClass('limit400');
      $('#body').removeClass('limit1200');
  }
})
.limit400 h1 { font-size:12px; }
.limit1200 h1 { font-size:50px; }
</script>
<div id="body" class="limit400">
  <h1>Hello :Professor</h1>
  <span>[ change the screen width to understant the effect ]</span>
</div>
