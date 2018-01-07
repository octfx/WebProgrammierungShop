var closestNodeWithClass = function(startElement, nodeClass) {
    var el = startElement;

    while (el.className !== nodeClass) {
        el = el.parentNode;
        if (!el) {
            return null;
        }
    }
    return el;
};

/**
 *
 * @param pageName, e.g. "ria-details" for riaDetail.tmpl.php
 * @param dataName, data to be derived, e.g. "rating"
 *
 * @returns data derived from data element html attributes
 */
var getPageData = function(pageName, dataName) {
    var dataHtmlElement = document.getElementById(pageName + '-data');
    if(dataHtmlElement !== null) {
        return dataHtmlElement.getAttribute('data-' + dataName);
    }
    return null;
};