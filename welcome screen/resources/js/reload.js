$(document).ready(function(){
    setTimeout(function(){
      $("#myModal").modal('show');
      {
        setTimeout(function(){
          $("#myModal").modal('hide');
          // $ids = $request->query('id')
          // if($request == $ids)){
            
           
          // }else{
          //   setInterval('location.reload()', 1000);
          // }
        }, 4000);
      }
    }, 3000);
		
    // $.ajax({
    // if($request->has('id')){
    //         type: 'GET',
    //         url: '../show',
    //         success: function (xml) {
    //             setInterval('location.reload()', 5000);        // Using .reload() method.
    //         }
    //     }
    //     });
	});