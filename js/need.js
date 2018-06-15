jQuery(function () {
   
    'use strict';
      
jQuery("#tMenu_toggle").click(function () {
        jQuery(this).toggleClass("tMenu_on");
        jQuery("#tMenu_menu").slideToggle(300);
    });
      
    
});

 function onContainerClick (event) {
  if(event.classList.contains('off')) {
    event.classList.remove('off');
  } else {
    event.classList.add('off');
  }
}