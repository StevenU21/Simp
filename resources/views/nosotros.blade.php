<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIMP|NOSOTROS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images\logo-simp.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
    @include('includes.panel.headerDesktop')
    @include('includes.panel.MainmobileHeader')
	<!-- Cart -->
    @include('includes.panel.carritoModal')


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-10 p-tb-90" style="background-image: url('images/cafexd.jpg');">
		<h2 class="ltext-105 cl2 txt-center">
			Sobre nosotros
		</h2>
	</section>


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Sobre nosotros
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Fundada en 2022, SIMP conecta a las personas de toda nicaragua con m??s de 400 profesionales en las ??reas de trabajo m??s requeridas en Nicaragua. SIMP es la forma mas factible para conseguir trabajadores capacitados en Nicaragua. Nuestros trabajadores contratados bajo un conjunto de pruebas y entrevistas para garantizar a nuestro cliente la mejor calidad.

                            <h3 class="mtext-111 cl2 p-b-16">
                                Nuestra misi??n
                            </h3>
                         <p class="stext-113 cl6 p-b-26">
							La misi??n de SIMP es sencilla: conectar a personas de toda Nicaragua con profesionales de calidad para satisfacer sus necesidades. De esta forma podemos solventar un crecimiento exponencial en la econom??a nicarag??ense mientras que al mismo tiempo cubrimos una necesidad latente en la sociedad. Haciendo que no solo crezca la econom??a, sino que tambi??n lo haga la sociedad.
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/estadisticas.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Nuestra visi??n
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Ser la empresa n??mero uno en este apartado. Todo esto gracias a cumplir con las necedades de cientos de nicarag??enses facilit??ndoles en un solo lugar trabajadores de calidad y de las especialidades m??s requeridas en la localizaci??n en la que se encuentre el cliente
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								Todo lo que te rodea que llamas vida fue hecho por gente que no era m??s inteligente que t??, y lo puedes cambiar, puedes influenciar, puedes construir tus propias cosas que otra gente pueda usar.
							</p>

							<span class="stext-111 cl8">
								- Steve Job???s
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="images/abuelito.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Footer -->
    @include('includes.panel.footer')

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->
@include('includes.panel.WishFav')

</body>
</html>

