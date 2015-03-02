jQuery(document).ready(function($){
	$("form").submit(function( e ) {
		e.preventDefault();
		$('article').html('<div style="text-align: center;"><img src="images/loading.gif" alt="génération en cours..." /></div>');
		$.post( "ajax/get_p.php", 
			{ 
				language: $('input[name="language"]').attr('data-lang'), 
				nb_p: $('#nb_p').val()
			}
		)
		.done(function( data ) {
			$('article').html(data);
		});
	});
	
	//CUSTOM SELECT
	//Init custom select
    $('.select-wrapper').each(function() {
        var wrapper = $(this);
        wrapper.find('.custom-list .list').html("<ul></ul>");
        $(this).find('option').each(function() {
            wrapper.find('.custom-list ul').append("<li data-lang='"+$(this).val()+"'>" + $(this).html() + "</li>");
        });
    });

    $(".select-wrapper .custom-list").mCustomScrollbar({
        theme: "minimal",
        mouseWheelPixels: 150
    });

    // Open/Close custom select
    function openCustomSelect($this) {
        var heightList = $this.find('.custom-list').css('height', 'auto').height();
        $this.find('.custom-list').css('height', 0);

        if (heightList > 200) {
            heightList = 200;
        }

        $this.find('.custom-list').stop().animate({
            height: heightList
        }, 400);
    }

    function closeCustomSelect($this) {
        $this.find('.custom-list').stop().animate({
            height: 0
        }, 400);
    }

    function closeAllCustomSelectExcept($this) {
        $('.select-wrapper').not($this).removeClass('open');
        $('.custom-list').stop().animate({
            height: 0
        }, 400);
    }
    
    $('body').not('.select-wrapper').click(function() {
        $('.select-wrapper').removeClass('open');
        $('.custom-list').stop().animate({
            height: 0
        }, 400);
    });

    $('.select-wrapper').click(function(e) {
        e.stopPropagation();
        $(this).toggleClass('open');

        if ($(this).hasClass('open')) {
            closeAllCustomSelectExcept($(this));
            openCustomSelect($(this));
        }
        else {
            closeAllCustomSelectExcept($(this));
        }
    });
	
	// Get value hours
    $('.select-wrapper').on('click', '.custom-list li', function() {
        var valueLi = $(this).html();
        $(this).parent().parent().parent().parent().parent().parent().find('input.custom-select').val(valueLi).trigger('change');
        $(this).parent().parent().parent().parent().parent().parent().find('p.custom-select').html(valueLi).attr('data-lang', $(this).attr('data-lang'));
    });
	
	
});