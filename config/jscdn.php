<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://www.jsdelivr.com/package/npm/chart.js"></script>
<script src="https://raw.githubusercontent.com/HubSpot/offline/v0.7.13/offline.min.js"></script>

<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>

<script>

  <?php if (isset($_GET['msg'])) {

    if (strpos($_GET['msg'], "not") !== false) $modaltype="danger";
    else if (strpos($_GET['msg'], "Not") !== false) $modaltype="danger";
    else if (strpos($_GET['msg'], "success") !== false) $modaltype="success";
    else if (strpos($_GET['msg'], "Success") !== false) $modaltype="success";
    else $modaltype="info!";

    echo "notify(' ','.$_GET['msg'].','.$modaltype.')";
  } ?>

  function notify(title,text,type) {
    swal(title, text, type);
      };
  }

  function prompt(title,text,placeholder) {
    swal({
      title: title,
      text: text,
      type: "input",
      showCancelButton: true,
      closeOnConfirm: false,
      inputPlaceholder: placeholder
    }, function (inputValue) {
      if (inputValue === false) return false;
      if (inputValue === "") {
        swal.showInputError("You need to write something!");
        return false
      }
      swal("Nice!", "You wrote: " + inputValue, "success");
    });
  }
</script>
