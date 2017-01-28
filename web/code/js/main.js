$(function auto(){
  $("#searchform").autocomplete({  //Research into the source files for ajax search
    //source: "getFindCourse"
    source: function( request, response ) {
            $.ajax({
                url: "https://selene.hud.ac.uk/u1352883/webassignment2/web/code/index.php/course/getfindcourse", //load with this url
                dataType: "json",
                data: request,
                success: function(data){
                  
                   var results = [];
                $.each(data, function(i, item) {
                    var itemToAdd = {
                        value: item,
                        label: item
                    };
                    results.push(itemToAdd);
                });
                return response(results); // show results
                }
            });
        },
        minLength: 1, //after 0 it wil show value		
        
    });
    
  });