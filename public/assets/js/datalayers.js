window.dataLayer = window.dataLayer || []; 
$(document).ready(function() {
    $("#webform665927000000872029").off("submit").on("submit", function() {
         var name = $("#Last_Name").val();
                var phone = $("#LEADCF15").val();
                var location = $("#LEADCF11").val();
                var query = $("#Description").val();
                var pageUrl = $("#LEADCF12").val();
                
        dataLayer.push({
			'event':    'common_product_event',
			'eventName':    'collectionTitle',
			'eventCategory':   'collectionTitle',
			'eventAction':   'product_view',
		    'phone':phone,
		    'location':location,
		    'query':query,
		    'pageUrl':pageUrl
		    
		    
		});
		
        console.log("datalayersssssssssssssssssssssssssssssssss");
    });
});

