$('html, body').hide();

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keysToDisable = [37, 38, 39, 40];

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;
}

function preventKeydown(e) {
    for (var i = keysToDisable.length; i--;) {
        if (e.keyCode === keysToDisable[i]) {
            preventDefault(e);
            return;
        }
    }
}

function preventWheel(e) {
  preventDefault(e);
}

function disable_scroll() {
  if (window.addEventListener) {
      window.addEventListener('DOMMouseScroll', preventWheel, false);
  }
  window.onmousewheel = document.onmousewheel = preventWheel;
  document.onkeydown = preventKeydown;
}

function enable_scroll() {
    if (window.removeEventListener) {
        window.removeEventListener('DOMMouseScroll', preventWheel, false);
    }
    window.onmousewheel = document.onmousewheel = document.onkeydown = null;
}


function linkOnSamePage(element) {
	var loc = location;
	if(element.hash) {
    	var href = $(element).attr('href');
		if(href.indexOf(element.hash) >= 0) {
    		var endIndex = href.lastIndexOf(element.hash);
    		var hrefNoHash = href.substring(0,endIndex);
			if(href.indexOf('#') === 0) { //starts with hash
				return true;
			} else if(hrefNoHash.charAt(0) == '/') { //starts with slash
				if(hrefNoHash == '/') {
					if(loc.pathname == '/' || loc.pathname === '') {
						return true;
					} else {
						return false;
					}
				} else if(hrefNoHash.charAt(1) == '/' && hrefNoHash.charAt(2) != '/') { //starts with 2 slashes
					if(hrefNoHash == ('//' + loc.host + loc.pathname)) {
						return true;
					} else {
						return false;
					}
				} else if(hrefNoHash == loc.pathname) {
					return true;
				} else {
					return false;
				}

			} else if(hrefNoHash.charAt(0) != '/') { //doesn't start with slash
				//get script name from path name
				var scriptName = 0;
				if(loc.pathname.indexOf('/') >= 0) {
					if(loc.pathname.substr(-1) !== '/') {
						var explodedPathname = split(loc.pathname, '/');
						scriptName = explodedPathname.pop();
					}
				}

				if(hrefNoHash == (loc.protocol + '//' + loc.host + loc.pathname)) {
					return true;
				} else if(scriptName) {
					if(hrefNoHash == scriptName){
						return true;
					} else {
						return false;
					}
				} else {
					return false;
				}
			} else {
				return false;
			}
		}
	} else {
		return false;
	}
}

$(function(){
	var loc = location;
	if(loc.hash) { //if url is to anchor
		target = loc.hash;
        $('html, body').scrollTop(0).show();
        disable_scroll();
        $('html,body').animate({scrollTop: $(target).offset().top}, 1000, function(){
        	enable_scroll();
        });
	} else {
	  $('html, body').show();
	}

	$('a:link').on("click", function(e){
		if(linkOnSamePage(this)){
			e.preventDefault();
			target = this.hash;
			disable_scroll();
			$('html,body').animate({scrollTop: $(target).offset().top}, 1000, function(){
			   location.hash = target;
			   enable_scroll();
			});
		}
	});
});