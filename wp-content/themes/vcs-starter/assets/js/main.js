/* ==================================================
   Filter Works
================================================== */

works_filter = function () {
    
    // Activate isotope with jQuery code:
    $('#projects').isotope({
        itemSelector: '.albums-item',
        layoutMode: 'fitRows'
    });
    // Isotope click function
    $('#iso-options ul li a').click(function(){
        $('#iso-options ul li a').removeClass('selected');
        $(this).addClass('selected');

        var selector = $(this).attr('data-option-value');
        $('#projects').isotope({
            filter: selector
        });
        return false;
    });
}


$(document).ready(function() {
    
    // Initialize Smooth Scroll
    $(".nav").localScroll();
    
    // pretty album display
    works_filter();
    
    // textarea tag auto size
    var tx = document.getElementsByTagName('textarea');
    for (var i = 0; i < tx.length; i++) {
      tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
      tx[i].addEventListener("input", OnInput, false);
    }

    function OnInput() {
      this.style.height = 'auto';
      this.style.height = (this.scrollHeight) + 'px';
    }

    ///// contact area field label transformation
    var labels = ['#field-name', '#field-email', '#field-message'];
    // label shift up
    for ($i=0; $i<=2; $i++) {
        $(labels[$i]).focusin( function() {
            $(this).parent().next().next().css('transform', 'translateY(-120%)');
        });
    };
    // label shift down IF no data entered
    for ($i=0; $i<=2; $i++) {
        $(labels[$i]).focusout( function() {
            if ( !$(this).val() ) {
                $(this).parent().next().next().css('transform', 'none');
            };
        });
    };
    
    
});