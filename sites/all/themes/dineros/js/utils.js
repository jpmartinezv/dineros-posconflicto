jQuery(document).ready(function ($) {
    $('.popup').click(function (event) {
        var width = 575,
            height = 400,
            left = ($(window).width() - width) / 2,
            top = ($(window).height() - height) / 2,
            url = this.href.replace(/\#/g, '%23').replace(/\;/g, '%3B'),
            opts = 'status=1' +
                ',width=' + width +
                ',height=' + height +
                ',top=' + top +
                ',left=' + left;

        window.open(url, 'popup', opts);

        return false;
    });
});