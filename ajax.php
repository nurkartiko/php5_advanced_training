<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
               $('#username').keyup(function(){
                  var username=$('#username').val();
                  var email=$('#email').val();
                  $.ajax({
                     type:"POST",
                     url:"proses.php",
                     data:"username="+username+"&email="+email,
                     success:function(html){
                         $('#result').html(html);
                     }
                  });
               }); 
            });
        </script>
        <script>
            function kirimData(){
                  var username=$('#username').val();
                  var email=$('#email').val();
                  $.ajax({
                     type:"POST",
                     url:"proses.php",
                     data:"username="+username+"&email="+email,
                     success:function(html){
                         $('#result').html(html);
                     }
                  });
            }
        </script>
    </head>
    <body>
        <input type="text" id="username" placeholder="user name" onkeyup="kirimData()">
        <input type="text" id="email" placeholder="email" onkeyup="kirimData()">
        <div id="result"></div>
    </body>
</html>