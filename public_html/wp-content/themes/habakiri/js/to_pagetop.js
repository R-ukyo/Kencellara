jQuery(document).ready(function() {
  function smoothScroll(o){var e=window.pageYOffset,l=o>e;setTimeout(function(){l&&o>=e?(e=e+(o-e)/20+1,window.scrollTo(0,e),setTimeout(arguments.callee,10)):!l&&e>=o?(e=e-(e-o)/20-1,window.scrollTo(0,e),setTimeout(arguments.callee,10)):window.scrollTo(0,o)},10)}
});
