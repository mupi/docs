// Activate Google Prettify for pretty-printing code
jQuery(document).ready(
    function(){
        
        
        // make code pretty
        window.prettyPrint && prettyPrint();

        // $(".wizard-content").mCustomScrollbar({
        //     theme:"dark",
        //     scrollInertia: 0,
        //     advanced:{
        //         updateOnContentResize: true
        //     }
        // });

	jQuery('.exemplo').popover({html : true, container :  'body'});

        jQuery(".two-columns-example").each(
            function(){
                var encoded = $("<div/>").text(jQuery(this).html()).html();
                var pretty = prettyPrintOne(encoded, null, true);
                var codeTitle = jQuery(this).attr("data-code-title") || "C&oacute;digo:";
                var renderTitle = jQuery(this).attr("data-render-title") || "Resultado:";

                jQuery(this).html(
                    "<div class='mupi-example'>"
                        +"<div class='clearfix'>"
                        + "<div class='span6'>"
                        + codeTitle   
                        + "</div>"
                        + "<div class='span6'>"
                        + renderTitle 
                        + "</div>"
                        + "</div>"
                        + "<div class='row-fluid'>"
                        + "<div class='span6'>"
                        + "<pre class='prettyprint linenums'>"
                        + pretty
                        + "</pre>"
                        + "</div>"
                        + "<div class='span6 code-render'>"
                        + jQuery(this).html()
                        + "</div>"
                        +"</div>"
                        +"</div>");

            });

        // Dismiss popovers when clicking out of it
        $('.pop').each(
            function () {
                var $this = $(this);
                $this.popover({html : true, container :  'body'});
                $this.click(function (e) {
                                e.preventDefault();
                                var popover = $this.data('popover');
                                var shown = popover && popover.tip().is(':visible');
                                if(shown) return;        // Avoids flashing
                                $(this).popover('show');
                            });
            });

        $('body').on('click', 
                     function (e) {
                         $('.pop').each(function () {
                                            //the 'is' for buttons that triggers popups
                                            //the 'has' for icons within a button that triggers a popup
                                            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                                                $(this).popover('hide');
                                            }
                                        });
                     });
        $('.step-content').on('mousewheel', function (e) {
                                  $('.pop').each(function () {
                                                     $(this).popover('hide');
                                                 });
                              });

        $(".steps li").click(
            function(){
                jQuery('.wizard-content').animate({ scrollTop: 0}, 300);
            });
    });
