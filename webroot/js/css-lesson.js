jQuery(document).ready(function(){
  jQuery('#styles_exerc_machado li').mouseover(function(){
    var style = jQuery(this).html();
    jQuery('#exerc_machado').css({'border-style' : style});
  });
   
  /*jQuery('.box-example div').mouseover(function(){
    var target = "#exp-" + jQuery(this).attr("id");
    var title = jQuery(this).attr("title");
    jQuery('.explanation').hide(); 
    jQuery(target).show();
    jQuery('#box-explanation').html(title);
  });*/

    /*jQuery('.box-example div').mouseleave(function(){
        var target = "#exp-" + jQuery(this).attr("id");
        alert(target);
        jQuery('.explanation').hide(); 
        jQuery(target).hide();

    });  */
/*    jQuery('.box-example div').mouseleave(function(){
        jQuery('.explanation').hide();
        jQuery('#exp-box').show();
    });
*/
});
