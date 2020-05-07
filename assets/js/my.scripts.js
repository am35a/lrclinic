$(document).ready(function(){
    $('.action-expand-certificates').click(function(){
        $('.action-expand-certificates').parents('.actions').hide();
        $('.target-expand-certificates').show();
        $('.action-expand-certificates').hide();
    })
});
