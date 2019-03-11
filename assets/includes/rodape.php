<section id="rodape" class="sec_padding">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul>
					<li><img src="assets/images/logo_branco.png" alt="logo"></li>
					<li>
						<ol>
							<li><a class="rounded-circle" href="http://bit.ly/LinkedIn_BRAND" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							<li style="margin:0;"><a class="rounded-circle" href="http://bit.ly/Medium_OnBiz" target="_blank"><i class="fab fa-medium-m"></i></a></li>
							<div class="clearfix"></div>
						</ol>
					</li>
					<div class="clearfix"></div>
					<li>&copy; BRAND+Co. Todos os direitos reservados.</li>
					<li>An <a href="http://bit.ly/LinkedIn_OnBiz" target="_blank">OnBiz.today</a> venture builder company.</li>
				</ul>

			</div>
		</div>
	</div>
	<div id="btn_topo"><i class="fas fa-angle-up"></i></div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="assets/js/jquery.mask.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/localization/messages_pt_BR.min.js"></script>
<script src="assets/js/jquery.vide.min.js"></script>
<!-- <script src="assets/js/masonry.pkgd.min.js"></script> -->
<script src="assets/js/cmst.js"></script>







<?php
if( $_GET['message'] == true )
{
  $mensagem = 'Nosso Diretor de Criação receberá sua mensagem<br/> e entrará em contato com você. Obrigado!';
}
else
{
  $mensagem = 'Falho no envio. Tente novamente mais tarde ou se preferir envie um email para <a href="mailto:head@getbrand.co">head@getbrand.co</a>';
}
if( isset($_GET['message']) )
{
?>

<div id="modal_mensagem" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align:center"><?php if( $_GET['message'] == true ){ echo "Mensagem enviada com sucesso"; }else{ echo "Falha ao enviar mensagem."; }?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p style="text-align:center"><?php echo $mensagem ; ?></p>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" defer>

$(document).ready(function(){
  $("#modal_mensagem").modal('show');
});

</script>
<?php 
/*
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4502693.js"></script>
<!-- End of HubSpot Embed Code -->
*/ 
?>
<?php
}

?>


</body>
</html>