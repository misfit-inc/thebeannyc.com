
var urlid = 29447247;
var urlcount = 8;
var urltoken = '806401368.5aa13be.4a08df065cbb41469c9cc20041432d3b';
var url = 'https://api.instagram.com/v1/users/' + urlid + '/media/recent/?access_token=' + urltoken + '&count=' + urlcount;

jQuery.ajax({
	type: "GET",
	dataType: "jsonp",
	url: url,
	cache: false,
	success: function(data) {
		
		for (var i = 0; i < urlcount; i++) {
			var beanid = jQuery('#instabean');
			var beanlink = data.data[i].link;
			var beanimage = data.data[i].images.low_resolution.url;
			
			beanid.append("<div class='instabox'><a target='_blank' href='" + beanlink + "'><img src=" + beanimage + "/></a></div>");
		}
	}
});