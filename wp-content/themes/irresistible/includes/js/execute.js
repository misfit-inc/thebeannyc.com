
var urlid = 29447247;
var urlcount = 14;
var urltoken = '806401368.5aa13be.4a08df065cbb41469c9cc20041432d3b';
var url = 'https://api.instagram.com/v1/users/' + urlid + '/media/recent/?access_token=' + urltoken + '&count=' + urlcount;

jQuery.ajax({
	type: "GET",
	dataType: "jsonp",
	url: url,
	cache: false,
	success: function(data) {
		console.log(data);
		var savethis1, savethis2, savethis3, saveedit;
		for (var i = 0; i < urlcount; i++) {
			var beanid = jQuery('#instabean');
			var beanlink = data.data[i].link;
			var beanimage = data.data[i].images.standard_resolution.url;
			
			if ((i == 0) || (i == 4) || (i == 9) || (i == 13)) {
				if (i == 13) {
					beanid.append("<div class='instafull last' style='background-image: url(" + beanimage + ");'><a class='instalink' target='_blank' href='" + beanlink + "'></a></div>");
				} else {
					beanid.append("<div class='instafull' style='background-image: url(" + beanimage + ");'><a class='instalink' target='_blank' href='" + beanlink + "'></a></div>");
				}
			}
			else if ((i == 1) || (i == 5) || (i == 10)) {
				savethis1 = "<div class='one' style='background-image: url(" + beanimage + ");'><a class='instalink' target='_blank' href='" + beanlink + "'></a></div>";
			}
			else if ((i == 2) || (i == 6) || (i == 11)) {
				savethis2 = "<div class='two' style='background-image: url(" + beanimage + ");'><a class='instalink' target='_blank' href='" + beanlink + "'></a></div>";
			}
			else if ((i == 3) || (i == 7) || (i == 12)) {
				savethis3 = "<div class='instahitfull' style='background-image: url(" + beanimage + ");'><a class='instalink' target='_blank' href='" + beanlink + "'></a></div>";
				
				saveedit = '';
				saveedit += '<div class="instaside left"><div class="instahit">';
				saveedit += savethis1;
				saveedit += savethis2;
				saveedit += '</div>'; // close .ishit
				saveedit += savethis3;
				saveedit += '</div>'; // close .instaside
				
				beanid.append(saveedit);
			}
		}
	},
	error: function(data) {
		$('.beangram').css('display', 'none');
	}
});