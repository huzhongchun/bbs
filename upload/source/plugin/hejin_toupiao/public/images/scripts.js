!function(e){"use strict";e(document).ready(function(){e(".post").fitVids(),jQuery.extend(jQuery.easing,{easeInOutCirc:function(e,n,a,t,r){return(n/=r/2)<1?-t/2*(Math.sqrt(1-n*n)-1)+a:t/2*(Math.sqrt(1-(n-=2)*n)+1)+a}});var n=!1,a=300,t="easeInOutCirc";e(".menu-link").on("click",function(r){r.preventDefault(),1==n?(e(".panel").animate({left:"-15.625em"},a,t),n=!1,e("#wrap, #bg").removeClass("fader")):(e(".panel").delay(300).animate({left:"0"},a,t),e("#wrap, #bg").addClass("fader"),n=!0)}),e(".panel ul").length>=1||e(".panel p").length>=1?e(".menu-link").fadeIn():e(".menu-link").hide()})}(jQuery);