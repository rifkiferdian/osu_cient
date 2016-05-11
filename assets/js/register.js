//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches



$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar div.btn.btn-info").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar div.btn.btn-info").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})



$("#ss").click(function(){

      var email = $('#email'); //change form to id or containment selector
      var username = $('#username'); //change form to id or containment selector
      var password = $('#password'); //change form to id or containment selector
      var repassword = $('#repassword'); //change form to id or containment selector
      var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (username.val() == '' || password.val() == '' || repassword.val() == '' || email.val() == '') {
        alert("Isi Semua form");
      }else{
      // if (length(password.val()) == 6) {alert("Masukkan password minimal 6 karakter");};
      // if (repassword.val() == password.val() ) {alert("Masukkan password yang sama");};

        if (re.test(email.val()) == false ) {       
          alert("Masukkan Email dengan benar");
        }else{
           if(animating) return false;
          animating = true;
          
          current_fs = $(this).parent();
          next_fs = $(this).parent().next();
          
          //activate next step on progressbar using the index of next_fs
          $("#progressbar div.btn.btn-info").eq($("fieldset").index(next_fs)).addClass("active");
          
          //show the next fieldset
          next_fs.show(); 
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale current_fs down to 80%
              scale = 1 - (1 - now) * 0.2;
              //2. bring next_fs from the right(50%)
              left = (now * 50)+"%";
              //3. increase opacity of next_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({'transform': 'scale('+scale+')'});
              next_fs.css({'left': left, 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
              current_fs.hide();
              animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
          });
        };
    };
});




$("#ss2").click(function(){

      var uni = $('#uni'); //change form to id or containment selector
      var kota = $('#kota'); //change form to id or containment selector
      var provinsi = $('#provinsi'); //change form to id or containment selector

      if (uni.val() == '' || kota.val() == '' || provinsi.val() == '' ) {
        alert("Isi Semua form");
      }else{
           if(animating) return false;
          animating = true;
          
          current_fs = $(this).parent();
          next_fs = $(this).parent().next();
          
          //activate next step on progressbar using the index of next_fs
          $("#progressbar div.btn.btn-info").eq($("fieldset").index(next_fs)).addClass("active");
          
          //show the next fieldset
          next_fs.show(); 
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale current_fs down to 80%
              scale = 1 - (1 - now) * 0.2;
              //2. bring next_fs from the right(50%)
              left = (now * 50)+"%";
              //3. increase opacity of next_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({'transform': 'scale('+scale+')'});
              next_fs.css({'left': left, 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
              current_fs.hide();
              animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
          });
      };
});
