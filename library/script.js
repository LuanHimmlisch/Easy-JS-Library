var url = "https://weblabormx.github.io/Easy-JS-Library/library/";
//var url = "http://easy-js-library.test/library/";

jQuery(document).ready(function($){
    $.getScript(url+'script-old.js', function(){
        
    });
    $.getScript(url+'script-new.js', function(){
        
    });
});