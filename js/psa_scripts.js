jQuery(document).ready(function() {  
     var getUrl = window.location;
     var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
     var protocol = window.location.protocol + "//" + window.location.host;
   //  alert (testing);

    jQuery('#psa-search-form').keyup(function(){
        var post_data = {
            'action' : 'ajaxnews',
            'searchvar': jQuery('#psa-search-form').val()
        };
            //alert(post_data.searchvar);
            
           jQuery('#search-results').html('<div class = "spinner-psa"></div>');
            if (post_data.searchvar)
            {    
                jQuery.post(protocol + "/wp-admin/admin-ajax.php", post_data ,function(data){
                    jQuery('#search-results').html(data);
                });
            }

            return false;
    });
 });
