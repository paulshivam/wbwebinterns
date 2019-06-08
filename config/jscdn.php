<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://www.jsdelivr.com/package/npm/chart.js"></script>
<script src="https://raw.githubusercontent.com/HubSpot/offline/v0.7.13/offline.min.js"></script>

<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>


//disappearing notification

<?php if(isset($_GET['msg'])){

  if (strpos($_GET['msg'], "not") !== false) $modaltype="danger";
  else if (strpos($_GET['msg'], "Not") !== false) $modaltype="danger";
  else if (strpos($_GET['msg'], "success") !== false) $modaltype="success";
  else if (strpos($_GET['msg'], "Success") !== false) $modaltype="success";
  else $modaltype="info!";

  ?>
  <style>
  [data-notify="progressbar"] {
	margin-bottom: 0px;
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 5px;
}
  </style>
  <script type = "text/javascript">
window.onload=function(){setTimeout(showPopup,1000)};

function showPopup()
{
  $.notify({
    icon: '',
    title: '<?php if(isset($_GET['msg'])) echo $_GET['msg']; ?>' ,
    message: '',
    url: '#',
    target: '_blank'
  },{

    element: 'body',
    position: null,
    type: "<?php echo $modaltype; ?>",
    allow_dismiss: true,
    newest_on_top: false,
    showProgressbar: true,
    placement: {
      from: "top",
      align: "center"
    },
    offset: 20,
    spacing: 10,
    z_index: 1031,
    delay: 2000,
    timer: 1000,
    url_target: '_blank',
    mouse_over: null,
    animate: {
      enter: 'animated fadeInDown',
      exit: 'animated fadeOutUp'
    },
    onShow: null,
    onShown: null,
    onClose: null,
    onClosed: null,
    icon_type: 'class',
    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-<?php echo $modaltype; ?>" role="alert">' +
    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
    '<span data-notify="icon"></span> ' +
    '<span data-notify="title"><b>{1}</b></span> ' +
    '<span data-notify="message"><b>{2}</b></span>' +
    '<div class="progress" data-notify="progressbar">' +
    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
    '</div>' +
    '<a href="{3}" target="{4}" data-notify="url"></a>' +
    '</div>'
  });
}
  </script>

<?php } ?>
