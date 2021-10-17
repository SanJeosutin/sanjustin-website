/* * * * * * * * * * * * * * * 
* Project      : sanjustin.xyz
* Date Created : 17/10/2021
* Contributor  : SanJeosutin
 * * * * * * * * * * * * * * */

$(document).ready(function(){
    $('#toggleDarkMode').click(function(){
        $(this).data('clicked', true);
        $("i", this).toggleClass("fas fa-moon fas fa-sun");
        
        //? something todo with toggling checkbox via buton 
        var $$ = $(this)
        if( !$$.is('.checked')){
            $$.addClass('checked');
            $('#imgCheck').prop('checked', true);
        } else {
            $$.removeClass('checked');
            $('#imgCheck').prop('checked', false);
        }
    });

    $('.lead').t();
});