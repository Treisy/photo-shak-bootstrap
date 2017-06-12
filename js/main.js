/**
 * Created by treisyjimenez on 12/6/17.
 */

$(document).ready(function(){
    $('#four-columns').click(function(){
        $('.tab-pane').find('.col-md-4').addClass('col-md-3');
        $('.tab-pane').find('.col-md-4').removeClass('col-md-4');

        console.log($(this));

        $(this).parents('li').addClass('active');
        $('#three-columns').parents('li').removeClass('active');

    });

    $('#three-columns').click(function(){
        $('.tab-pane').find('.col-md-3').addClass('col-md-4');
        $('.tab-pane').find('.col-md-3').removeClass('col-md-3');

        $(this).parents('li').addClass('active');
        $('#four-columns').parents('li').removeClass('active');
    });
});
