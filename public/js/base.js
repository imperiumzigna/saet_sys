/**
 * jQuery base
 */
$(document).ready(function () {

    $('.tree-toggle').click(function () {
        $(this).parent().children('ul.tree').toggle(200);
    });

    /**
     * Paginacao
     */
    $('.pagination').children('li').children('a').each(function () {
        if (!(window.location.search.length == 0)) {
            var urlQuery = window.location.search;
            var elementQuery = $(this).attr('href');
            elementQuery = elementQuery.substring(elementQuery.indexOf('?') + 1, elementQuery.length);

            if (urlQuery.match(/&page=[1-9]*/)) {
                urlQuery = urlQuery.replace(/&page=[1-9]*/, '&' + elementQuery);
                $(this).prop('href', urlQuery);
                return;
            }

            if (urlQuery.match(/\?page=[1-9]*/)) {
                urlQuery = urlQuery.replace(/\?page=[1-9]*/, '?' + elementQuery);
                $(this).prop('href', urlQuery);
                return;
            }
            $(this).prop('href', urlQuery + '&' + elementQuery);
        }
    });

    /**
     * Ordenação
     */
    $('.order-link').each(function () {
        var id = $(this).attr('id');
        var url = window.location.search;
        var parametro = 'sort';

        if (!url.match(new RegExp(id.toString()))) {
            return;
        }

        // Atualiza URL do elemento <a>
        if (url.match(/asc/)) {
            parametro = 'desc';
        } else {
            parametro = 'asc';
        }
        if (url.indexOf('asc') > 0) {
            url = url.replace(/asc/, 'desc');
        } else if (url.indexOf('desc') > 0) {
            url = url.replace(/desc/, 'asc');
        } else {
            if (url.match(/\?[a-zA-Z]+/)) {
                url = url + '&sort=' + parametro;
            }
        }

        $('#' + id.toString()).prop('href', url);
    });

    $('.search-input').submit(function () {
        var column = $('.search-input input').attr('id');
        var value = $('.search-input input').val();
        var url = window.location.href;
        var urlQuery = window.location.search;

        var singleRegExp = new RegExp(column + '=[a-zA-Z]*');
        var multiRegExp = new RegExp('&' + column + '=[a-zA-Z]*');

        if (!urlQuery) {
            if (url.match(/\?/)) {
                console.log(window.location.href + column + '=' + value);
                $(window.location).attr('href', window.location.href + column + '=' + value);
            } else {
                window.location = window.location.href + '?' + column + '=' + value;
            }
        }
        if (urlQuery.match(/&/)) {
            console.log('Tem query 23');
        }
    });
});