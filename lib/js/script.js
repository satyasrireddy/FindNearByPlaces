$('#btnRun').click(function() {
    $.ajax(
      {
        method: "POST",
        url: "lib/php/FindNearplaces.php",
        data: {
          lat: $('#lat').val(),
          lng: $('#lng').val(),
        },
        success: function(result){
          console.log(result['data']);
  
          $('#div1').html(result['data'][0]['distance']);
          $('#countryCode').html(result['data'][0]['countryCode']);
          $('#countryName').html(result['data'][0]['countryName']);
          $('#continentCode').html(result['data'][0]['continentCode']);
        
        },
         error: function(jqXHR, textStatus, errorThrown){
          console.log("we have reached error ");
  
  
         }
      });
  });