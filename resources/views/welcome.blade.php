<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

	<link rel="icon" type="image/png" href="{{ asset('mailbox/images/icons/favicon.ico') }}"/>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('mailbox/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/vendor/animate/animate.css') }}">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/vendor/css-hamburgers/hamburgers.min.css') }}">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/vendor/animsition/css/animsition.min.css') }}">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/vendor/select2/select2.min.css') }}">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/vendor/daterangepicker/daterangepicker.css') }}">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/css/util.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('mailbox/css/main.css') }}">

<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="{{url('/suggestions')}}" method="POST" >
        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<span class="contact100-form-title">
					Buzón de quejas y sugerencias
				</span>
        <div class="wrap-input100">
          <div class="label-input100">Tipo del mensaje</div>
          <div>
            <select class="js-select2 input100" name="type" >
              <option>Queja</option>
              <option>Sugerencia</option>
            </select>
            <div class="dropDownSelect2"></div>
          </div>
          <span class="focus-input100"></span>
        </div>
				<div class="wrap-input100 validate-input" data-validate="Nombre requerido">
					<label class="label-input100" for="name">Nombre</label>
					<input id="name" class="input100" type="text" name="name" placeholder="Escriba su nombre...">
					<span class="focus-input100"></span>
				</div>
        <div class="wrap-input100 validate-input" data-validate="Teléfono requerido">
					<label class="label-input100" for="name">Teléfono</label>
					<input id="name" class="input100" type="text" name="phone" placeholder="Escriba su teléfono...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Email válido requerido: ex@abc.xyz">
					<label class="label-input100" for="email">Email</label>
					<input id="email" class="input100" type="text" name="email" placeholder="Escriba su correo electrónico...">
					<span class="focus-input100"></span>
				</div>
        <div class="wrap-input100 validate-input" data-validate="Asunto requerido">
					<label class="label-input100" for="name">Asunto</label>
					<input id="name" class="input100" type="text" name="subject" placeholder="Escriba el asunto del mensaje...">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Cuerpo de mensaje requerido">
					<label class="label-input100" for="message">Mensaje</label>
					<textarea id="message" class="input100" name="message" placeholder="Escriba el texto del mensaje..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn">
						Enviar
					</button>
				</div>


			</form>
			<div class="contact100-more flex-col-c-m" style="background-image: url('{{ asset('mailbox/images/bg-01.jpg') }}');">
			</div>
		</div>
	</div>





<!--===============================================================================================-->

	<script src="{{ asset('mailbox/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('mailbox/css/main.css') }}">

  <script src="{{ asset('mailbox/vendor/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('mailbox/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('mailbox/vendor/countdowntime/countdowntime.js') }}"></script>

<!--===============================================================================================-->
	<script src=""></script>
  <script src="{{ asset('mailbox/js/main.js') }}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
