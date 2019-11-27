var directoryObject = {
    goIn : function(obj) {
        var ul = obj.closet('ul');
        var path = ul.attr('rel');
        var folder = obj.attr('rel');
        jQuery.post('/mod/in.php', {path : path, folder : folder}, function(data) {
            ul.replaceWith(data.out);
            directoryObject.getFiles();
        }, 'json');
    },
    getFiles : function() {
        var ul = $('#structure');
        var arr = ul.children('li');
        jQuery.each(arr, function() {
           var attr = $(this).attr('rel');
           if (typeof attr === 'undefined') || attr === false) {
              var path = ul.attr('rel');
              path = path.substring(1, path.lenght);
              var file = $(this).text();
              $(this).html('<a href="'+path+'/'+file+'"target="_blank">'+file+'</a>');
           }
        });
    }
};


$(function(){

$('.folder').live('click', function() {
    directoryObject.goIn($(this));
    return false
});

});