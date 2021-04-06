$(document).ready(function () {
    $('.profile-sidebar a:first').addClass('active');
    $('.profile-content:not(:first)').hide();
    $('.profile-sidebar a').click(function (event) {
        event.preventDefault();
        var content = $(this).attr('href');
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        $(content).show();
        $(content).siblings('.profile-content').hide();
    });
});