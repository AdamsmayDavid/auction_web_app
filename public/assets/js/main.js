
            $('#TogglerIcon button[type=button]').click(function (e){
            e.preventDefault()
            $(this).addClass('btn-G');
         
        })

        function on() {
            document.getElementById("overlay").style.display = " border: white solid;";
          }
          
          function off() {
            document.getElementById("overlay").style.display = "none";
          }
  