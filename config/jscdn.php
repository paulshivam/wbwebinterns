<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

    echo 'notify("","'.$_GET['msg'].'","'.$modaltype.'")';
  } ?>

  function notify(title,text,type) {
    swal(title, text, type);
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
