// --------------------------------------------------
// switcher.js by designesia 2013
// --------------------------------------------------

jQuery(document).ready(function() {
	
	var bt_uri_css = jQuery('.bttpl').val();
	jQuery(".bg1").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/aqua.css");
	});
	
	jQuery(".bg2").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/blue.css");
	});
	
	jQuery(".bg3").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/green.css");
	});
	
	jQuery(".bg4").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/grey.css");
	});
	
	jQuery(".bg5").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/orange.css");
	});
	
	jQuery(".bg6").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/pink.css");
	});
	
	jQuery(".bg7").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/purple.css");
	});
	
	jQuery(".bg8").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/red.css");
	});
	
	jQuery(".bg9").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/yellow.css");
	});
	
	jQuery(".bg10").click(function(){
		jQuery("#colors").attr("href", bt_uri_css+"colors/lime.css");
	});
	
	
	
	jQuery(".custom-show").hide();
	
	jQuery(".custom-close").click(function(){
		jQuery(this).hide();
		jQuery(".custom-show").show();
		jQuery('#switcher').animate({'left': '+=120px'},'medium');
	});
  	

	jQuery(".custom-show").click(function(){
		jQuery(this).hide();
		jQuery(".custom-close").show();
		jQuery(this).parent().animate({'left': '-=120px'},'medium');
	});
	
	
	jQuery('#de-header').on('change', function() {
		v = this.value
		if(v=='opt-1'){
			jQuery('header').removeClass('transparent');
		}else if(v=='opt-2'){
			jQuery('header').addClass('transparent');
		}
	});
	var menu_style = jQuery('nav.bt-nav-menu').attr('data-menu');
    jQuery('#mainmenu').addClass(menu_style);
	jQuery('#de-menu').on('change', function() {
		jQuery('#mainmenu').removeClass('no-separator');
		jQuery('#mainmenu').removeClass('line-separator');
		jQuery('#mainmenu').removeClass('circle-separator');
		jQuery('#mainmenu').removeClass('square-separator');
		jQuery('#mainmenu').removeClass('plus-separator');
		jQuery('#mainmenu').removeClass('strip-separator');
		v = this.value
		if(v=='opt-1'){
			jQuery('#mainmenu').removeClass('no-separator');
			jQuery('#mainmenu').removeClass('line-separator');
		}else if(v=='opt-2'){
			jQuery('#mainmenu').addClass('line-separator');
		}else if(v=='opt-3'){
			jQuery('#mainmenu').addClass('circle-separator');
		}else if(v=='opt-4'){
			jQuery('#mainmenu').addClass('square-separator');
		}else if(v=='opt-5'){
			jQuery('#mainmenu').addClass('plus-separator');
		}else if(v=='opt-6'){
			jQuery('#mainmenu').addClass('strip-separator');
		}else if(v=='opt-0'){
			jQuery('#mainmenu').addClass('no-separator');
		}
	});
	
	jQuery('#de-pattern li').click(function(){
		n = jQuery('#de-layout').val();
		if(n=="boxed"){
			className = jQuery(this).attr('class');
			jQuery('body').removeClass();
			jQuery('body').addClass(className);
		}else{
			alert('Please select boxed layout first.');
		}
			
	});
});

