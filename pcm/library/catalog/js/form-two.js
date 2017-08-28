
     $(document).ready(function(){

      $("#libraryCategory").change ( function () {
        var targID  = $(this).val ();
        $(".library-sub-category").hide();
        $(".other-sub-category").hide();
        $('#' + targID).show ();
      } )

      $("#authorNumber").change ( function () {

        var targID  = $(this).val ();

          if (targID == 'One') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
          }

          if (targID == 'Two') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
          }

          if (targID == 'Three') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
            $('#authorsNameThreeInput').show ();
          }

          if (targID == 'Four') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
            $('#authorsNameThreeInput').show ();
            $('#authorsNameFourInput').show ();
          }

          if (targID == 'Five') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
            $('#authorsNameThreeInput').show ();
            $('#authorsNameFourInput').show ();
            $('#authorsNameFiveInput').show ();
          }

          if (targID == 'Six') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
            $('#authorsNameThreeInput').show ();
            $('#authorsNameFourInput').show ();
            $('#authorsNameFiveInput').show ();
            $('#authorsNameSixInput').show ();
          }

        
        
        
      } )
     

   
     


     });
 