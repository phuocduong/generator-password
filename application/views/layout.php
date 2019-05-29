<?php
     if(!isset($subview))
     {
         $subview = "sites/index";
     }else{
        $subview = "sites/".$subview;
     }
     if(!isset($data))
     {
         $data = [
             'title'=>'Home Page'
         ];
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GENARATOR PASSWORD -
		<?=$data['title']?>
	</title>
	<link rel="stylesheet" href="/dist/app/app.css">
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.content {
			width: 100%;
			padding: 15px;
			margin: auto;
		}

		.form-label-group {
			position: relative;
			margin-bottom: 1rem;
		}

		.form-label-group>input,
		.form-label-group>label {
			height: 3.125rem;
			padding: .75rem;
		}

		.form-label-group>label {
			position: absolute;
			top: 0;
			left: 0;
			display: block;
			width: 100%;
			margin-bottom: 0;
			/* Override default `<label>` margin */
			line-height: 1.5;
			color: #495057;
			pointer-events: none;
			cursor: text;
			/* Match the input under the label */
			border: 1px solid transparent;
			border-radius: .25rem;
			transition: all .1s ease-in-out;
		}

		.form-label-group input::-webkit-input-placeholder {
			color: transparent;
		}

		.form-label-group input:-ms-input-placeholder {
			color: transparent;
		}

		.form-label-group input::-ms-input-placeholder {
			color: transparent;
		}

		.form-label-group input::-moz-placeholder {
			color: transparent;
		}

		.form-label-group input::placeholder {
			color: transparent;
		}

		.form-label-group input:not(:placeholder-shown) {
			padding-top: 1.25rem;
			padding-bottom: .25rem;
		}

		.form-label-group input:not(:placeholder-shown)~label {
			padding-top: .25rem;
			padding-bottom: .25rem;
			font-size: 12px;
			color: #777;
		}

		/* Fallback for Edge
        -------------------------------------------------- */
		@supports (-ms-ime-align: auto) {
			.form-label-group>label {
				display: none;
			}

			.form-label-group input::-ms-input-placeholder {
				color: #777;
			}
		}

		/* Fallback for IE
        -------------------------------------------------- */
		@media all and (-ms-high-contrast: none),
		(-ms-high-contrast: active) {
			.form-label-group>label {
				display: none;
			}

			.form-label-group input:-ms-input-placeholder {
				color: #777;
			}
		}

	</style>
</head>

<body>
	<div class="content" id="app">
		<div class="container">
            <?php $this->load->view($subview,$data) ?>
        </div>
	</div>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.21/vue.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html>
