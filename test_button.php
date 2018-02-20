<html>
<head>
  <link rel="stylesheet" href="./css/bootstrap.css" type="text/css" />
  <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" language="javascript">
    function fun(n) {
      //$("#"+n.id).prop('disabled', true);
      n.disabled = true;
      $.ajax({
        url:"_action_" + n.value + ".php",
        type: "POST",
        data: $("#"+n.value+"_form").serialize(),
        dataType: "json",
        success:function(result){
          if (result.status=="success") {
            alert(result.msg);
            if (result.url) {
              location.href = result.url;
            } else {
              location.reload();
            }
          } else {
            alert(result.msg);
          }
          n.disabled = false;
        },
        error:function(XMLHttpRequest, textStatus, errorThrown){
          alert(txtStatus);
          n.disabled = false;
        }
      });
    }
  </script>
</head>

<body>
  <div>
    <form id="ph_form" name="ph_form" method="post">
      <input type="hidden" name="action" value="ph">
      <input type="hidden" name="name" value="ph">
      <button type="button" class="btn btn-success" id="btn1" onclick="fun(this)" value="ph">ph button</button>
    </form>

    <form id="gh_form" name="gh_form" method="post">
      <input type="hidden" name="action" value="gh">
      <input type="hidden" name="name" value="gh">
      <button type="button" class="btn btn-success" id="btn2" onclick="fun(this)" value="gh">gh button</button>
    </form>
  </div>
</body>


</html>
