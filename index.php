<?php
$file_get = file_get_contents("info.json");
$file = json_decode($file_get, true);
//var_dump($file);
?>
<!DOCTYPE html>
<html lang="ru-Ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $file['description'];?>">
  	<meta name="keywords" content="Обои,поклейка,Киев,Ирпень">
	<link rel="stylesheet"  href="style/normalize.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/style_mobile.css">
	<link rel="stylesheet" type="text/css" href="node_modules/img-slider/distr/imgslider.min.css">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="node_modules/img-slider/distr/imgslider.min.js"></script>
	<script src="js/index.js"></script>
	<title><?php echo $file['title'];?></title>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<main class="main">
				
				<h1  class="heder_title">
					<?php echo $file['h1'];?>
				</h1>
				<div class="heder_title_small">
					<p>Киев, Ирпень, Софиевская и Петропавловская Борщаговки</p>
				</div>
				<div class="icon">
					<img src="img/0076d106610bac3e9e5e9a18551a63c3.png">

				</div>
				<div class="questions_viber">
				
				<div class="questions">
					<p class="questions_tit">Задайте свои вопросы по поводу поклейки обоев, подготовки стен и других важных для вас моментов:</p>
				</div>
				<div class="phone_number">
					<p>095-389-28-23</p>
				</div>
				<div class="viber">
					(Viber, Telegram) 
				</div>
				</div>

				
					<div class="back_col">
					<div class="heder_title_two">
					<h2 class="title_two">
						Поклейка обоев в квартирах, домах и офисах
					</h2>
					<div class="underlining">
						<hr> 
					</div>
				</div>
				<div class="conteiners_text_icon">
					<div class="inline_items">
						<div class="node node29 widget widget-image wow rotateIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: rotateIn;"><div class="wrapper1"><div class="wrapper2"><div class="bgimage"><img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg34" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: rgba(16, 186, 108, 0.15)" rx="50%" ry="50%"></rect><g transform="scale(0.53) translate(56.75471698113206, 56.75471698113206)"><path class="st0" d="M66.998,54.471c-7.485-14.376-14.974-28.759-22.459-43.134c-7.223,6.035-12.876,15.317-7.515,29.815 l22.603,39.125c0,0,6.534-5.125,7.884-5.62c-1.97-3.648-3.745-6.965-4.68-8.823C64.629,61.636,65.2,58.664,66.998,54.471z M57.53,62.158c-2.008,0-3.637-1.628-3.637-3.637c0-2.01,1.628-3.637,3.637-3.637c2.013,0,3.637,1.627,3.637,3.637 C61.167,60.53,59.543,62.158,57.53,62.158z"></path><path class="st0" d="M67.509,74.657c0.048,0.089,0.094,0.175,0.142,0.264C67.831,74.633,67.759,74.565,67.509,74.657z"></path><path class="st0" d="M69.153,65.208c0.373,0.718,0.748,1.432,1.13,2.146l0.331-0.228l15.243-26.383 c5.359-14.495-0.291-23.781-7.513-29.815L64.666,37.189l7.758,14.898l0.937,1.796l-0.795,1.866 C71.239,58.838,70.339,62.063,69.153,65.208z"></path><path class="st0" d="M99.494,90.797c-2.463-4.58-6.056-8.064-9.876-9.994c-4.338-2.195-9.025-2.474-13.031-0.322 c-1.962,1.055-3.525,2.567-4.677,4.407c-5.889,12.125,0.685,20.442,0.685,20.442c0.242,0.445,0.493,0.878,0.755,1.3l0.508,0.878 l0.026-0.044c2.347,3.502,5.372,6.196,8.558,7.808c4.338,2.198,9.024,2.476,13.029,0.322c4.004-2.156,6.358-6.226,6.922-11.06 C102.885,100.291,101.959,95.377,99.494,90.797z M93.297,103.496c-0.22,1.897-0.958,3.393-2.158,4.043 c-1.207,0.644-2.869,0.436-4.58-0.434c-2.226-1.127-4.381-3.269-5.932-6.164c-1.554-2.889-2.153-5.874-1.863-8.366 c0.22-1.899,0.956-3.393,2.161-4.036c1.2-0.651,2.867-0.438,4.575,0.428c2.226,1.128,4.379,3.27,5.938,6.163 C92.99,98.02,93.588,101.002,93.297,103.496z"></path><path class="st0" d="M51.414,80.48c-4.004-2.151-8.691-1.873-13.029,0.322c-3.823,1.93-7.416,5.414-9.876,9.994 c-2.468,4.58-3.392,9.494-2.901,13.737c0.563,4.834,2.917,8.903,6.922,11.06c4.004,2.153,8.691,1.876,13.029-0.322 c3.187-1.611,6.211-4.306,8.558-7.808l0.026,0.044l0.508-0.878c0.264-0.422,0.516-0.854,0.755-1.3c0,0,6.574-8.317,0.685-20.442 C54.942,83.048,53.376,81.535,51.414,80.48z M47.376,100.941c-1.554,2.896-3.709,5.037-5.935,6.164 c-1.708,0.869-3.371,1.077-4.58,0.434c-1.198-0.65-1.936-2.146-2.158-4.043c-0.291-2.494,0.309-5.477,1.86-8.366 c1.56-2.894,3.711-5.035,5.937-6.163c1.71-0.865,3.375-1.079,4.575-0.428c1.205,0.644,1.943,2.137,2.161,4.036 C49.527,95.067,48.927,98.053,47.376,100.941z"></path></g></svg></div><noscript><img src="//s.platformalp.ru/img/icons-simple-solid/154--black.png" alt=""></noscript></div></div></div>
						<div class="node node30 widget widget-text"><div class="wrapper1_text"><div class="wrapper2"><div class=""><h4 class="font-header spans xs-force-center textable"><span style="text-align: center;" class="p"><span style="color: rgb(57, 68, 88);"><span style="font-size: 14px;"><strong>Клеим обои</strong></span></span></span></h4></div></div></div></div>
					</div>
					<div class="inline_items">
						<div class="node node32 widget widget-image wow rotateIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: rotateIn;"><div class="wrapper1"><div class="wrapper2"><div class="bgimage"><img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg43" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: rgba(16, 186, 108, 0.15)" rx="50%" ry="50%"></rect><g transform="scale(0.53) translate(56.75471698113206, 56.75471698113206)"><path class="st0" d="M90.504,48.631L81.71,37.974c-1.526-1.86-4.3-2.126-6.157-0.595L26.523,77.827 c-1.854,1.532-2.126,4.303-0.589,6.16l3.537,4.297l1.997,2.422l3.256,3.938c1.532,1.862,4.304,2.127,6.162,0.594l49.027-40.446 C91.77,53.26,92.037,50.486,90.504,48.631z"></path><path class="st0" d="M38.902,56.704l14.325-11.815l3.544-2.925l4.882-4.022l2.066-1.704l8.414-6.95L55.507,9.13 c-2.382-2.884-6.684-3.296-9.572-0.92c-2.884,2.378-3.298,6.689-0.917,9.571l4.604,5.586c-1.437,0.051-2.874,0.56-4.065,1.54 c-0.592,0.492-1.082,1.06-1.464,1.687l-3.527-4.276c-4.491-5.449-12.614-6.224-18.059-1.732c-5.443,4.489-6.222,12.618-1.73,18.058 l3.346,4.061c-3.836-0.969-8.061-0.172-11.326,2.521c-5.444,4.492-6.224,12.621-1.732,18.061l8.046,9.749L36.983,58.29 L38.902,56.704z"></path><path class="st0" d="M119.229,110.369L98.795,85.601c0,0,0.567-0.282,1.612-1.329c1.046-1.047,1.458-10.333-0.716-10.454 c-2.177-0.118-11.327,9.34-11.327,9.34l-0.586-0.71c-0.379-0.468-0.905-1.071-1.361-1.588c-1.124-1.295-1.847-1.905-1.06-3.044 l18.399-26.649c1.999-3.751,2.117-3.966-1.122-7.892l-3.657-4.427c-4.356-5.288-5.163-4.591-9.121-1.184l-0.095,0.078l1.992,2.414 l0.139-0.121c1.945-1.668,2.337-2.007,4.661,0.813l3.656,4.426c1.909,2.314,1.847,2.422,0.786,4.418l-18.529,26.79 c-1.906,2.745-0.826,3.659,1.582,6.423c0.312,0.36,0.676,0.778,1.306,1.54l0.592,0.709c0,0-11.248,7.158-11.248,9.284 s8.823,4.025,10.333,2.516c1.507-1.506,1.685-1.386,1.685-1.386l20.435,24.768c0.963,1.17,2.715,1.339,3.885,0.368l7.821-6.445 C120.024,113.29,120.197,111.543,119.229,110.369z"></path></g></svg></div><noscript><img src="//s.platformalp.ru/img/icons-simple-solid/155--black.png" alt=""></noscript></div></div></div>
						<div class="node node33 widget widget-text"><div class="wrapper1_text"><div class="wrapper2"><div class=""><h4 class="font-header spans xs-force-center textable"><span style="text-align: center;" class="p"><span style="color: rgb(57, 68, 88);"><span style="font-size: 14px;"><strong>Красим стены</strong></span></span></span></h4></div></div></div></div>
					</div>
					<div class="inline_items">
						<div class="node node35 widget widget-image wow rotateIn" data-wow-delay="1.3s" style="visibility: visible; animation-delay: 1.3s; animation-name: rotateIn;"><div class="wrapper1"><div class="wrapper2"><div class="bgimage"><img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg8" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: rgba(16, 186, 108, 0.15)" rx="50%" ry="50%"></rect><g transform="scale(0.53) translate(56.75471698113206, 56.75471698113206)"><path class="st0" d="M98.396,44.581C97.58,36.719,92.681,16.79,63.948,16.79c-28.744,0-33.603,19.946-34.403,27.801 c-0.408,0.09-0.723,0.686-0.723,1.414v2.445c0,0.779,0.358,1.407,0.807,1.428l6.187,56.411c0,2.717,2.204,4.922,4.922,4.922H87.21 c2.718,0,4.92-2.206,4.92-4.922l6.188-56.407h0.029c0.459,0,0.83-0.639,0.83-1.431v-2.445 C99.178,45.243,98.832,44.625,98.396,44.581z M92.242,56.696c-0.991,4.635-3.888,5.6-6.263,3.981 c-2.378-1.616-6.805-2.737-8.966,11.203c-1.717,11.093-7.021,5.479-7.668,2.988c-0.86-3.306,0.217-9.957-4.32-15.434 c-4.538-5.476-8.855-0.25-8.855-0.25c-11.448,17.179-21.474-9.336-21.474-9.336c27.865-2.74,58.816-0.033,58.816-0.033 S93.233,52.056,92.242,56.696z M94.548,46.004v0.704c-12.2-1.359-48.832-1.361-61.098-0.005v-0.698c0-0.534-0.171-0.996-0.422-1.242 c1.879-7.926,8.397-22.689,30.923-22.689c22.568,0,29.093,14.821,30.971,22.735C94.697,45.064,94.548,45.504,94.548,46.004z"></path></g></svg></div><noscript><img src="//s.platformalp.ru/img/icons-simple-solid/152--black.png" alt=""></noscript></div></div></div>
							<div class="node node36 widget widget-text"><div class="wrapper1_text"><div class="wrapper2"><div class=""><h4 class="font-header spans xs-force-center textable"><span style="text-align: center;" class="p"><span style="color: rgb(57, 68, 88);"><span style="font-size: 14px;"><strong>Шпаклюем</strong></span></span></span></h4></div></div></div></div>

					</div>


					<div class="inline_items">
						
							<div class="node node38 widget widget-image wow rotateIn" data-wow-delay="1.8s" style="visibility: visible; animation-delay: 1.8s; animation-name: rotateIn;"><div class="wrapper1"><div class="wrapper2"><div class="bgimage"><img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg9" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: rgba(16, 186, 108, 0.15)" rx="50%" ry="50%"></rect><g transform="scale(0.53) translate(56.75471698113206, 56.75471698113206)"><path d="M98.127,41.146H81.191c-3.768,0-6.832-3.065-6.832-6.832V18.312l-0.467-0.448h-39.37c-2.829,0-5.126,2.296-5.126,5.127 v82.021c0,2.831,2.297,5.126,5.126,5.126h58.955c2.831,0,5.126-2.295,5.126-5.126V41.603L98.127,41.146z M64.908,48.782 c0-0.811,0.705-1.466,1.577-1.466h7.664c0.872,0,1.577,0.655,1.577,1.466v7.691c0,0.808-0.705,1.463-1.577,1.463h-7.664 c-0.872,0-1.577-0.655-1.577-1.463V48.782z M48.953,95.92c0,0.807-0.707,1.463-1.577,1.463h-7.665 c-0.872,0-1.578-0.656-1.578-1.463v-7.691c0-0.811,0.706-1.466,1.578-1.466h7.665c0.87,0,1.577,0.655,1.577,1.466V95.92z M48.953,82.854c0,0.81-0.707,1.464-1.577,1.464h-7.665c-0.872,0-1.578-0.654-1.578-1.464v-7.691c0-0.811,0.706-1.466,1.578-1.466 h7.665c0.87,0,1.577,0.655,1.577,1.466V82.854z M48.953,69.537c0,0.81-0.707,1.464-1.577,1.464h-7.665 c-0.872,0-1.578-0.654-1.578-1.464v-7.69c0-0.811,0.706-1.466,1.578-1.466h7.665c0.87,0,1.577,0.655,1.577,1.466V69.537z M48.953,56.473c0,0.808-0.707,1.463-1.577,1.463h-7.665c-0.872,0-1.578-0.655-1.578-1.463v-7.691c0-0.811,0.706-1.466,1.578-1.466 h7.665c0.87,0,1.577,0.655,1.577,1.466V56.473z M62.205,95.92c0,0.807-0.707,1.463-1.578,1.463h-7.664 c-0.873,0-1.577-0.656-1.577-1.463v-7.691c0-0.811,0.704-1.466,1.577-1.466h7.664c0.871,0,1.578,0.655,1.578,1.466V95.92z M62.205,82.854c0,0.81-0.707,1.464-1.578,1.464h-7.664c-0.873,0-1.577-0.654-1.577-1.464v-7.691c0-0.811,0.704-1.466,1.577-1.466 h7.664c0.871,0,1.578,0.655,1.578,1.466V82.854z M62.205,69.537c0,0.81-0.707,1.464-1.578,1.464h-7.664 c-0.873,0-1.577-0.654-1.577-1.464v-7.69c0-0.811,0.704-1.466,1.577-1.466h7.664c0.871,0,1.578,0.655,1.578,1.466V69.537z M62.205,56.473c0,0.808-0.707,1.463-1.578,1.463h-7.664c-0.873,0-1.577-0.655-1.577-1.463v-7.691c0-0.811,0.704-1.466,1.577-1.466 h7.664c0.871,0,1.578,0.655,1.578,1.466V56.473z M64.908,61.847c0-0.811,0.705-1.466,1.577-1.466h7.664 c0.872,0,1.577,0.655,1.577,1.466v7.69c0,0.81-0.705,1.464-1.577,1.464h-7.664c-0.872,0-1.577-0.654-1.577-1.464V61.847z M89.032,76.355v20.96h-0.006v0.082H65.088v-0.082h-0.003V86.399c0-0.004-0.001-0.006-0.001-0.009c0-0.004,0.001-0.004,0.001-0.007 v-0.015h0.003c0.012-1.089,0.959-1.967,2.135-1.967h2.361c1.173,0,2.122,0.878,2.137,1.967h0.001v9.774h2.021V81.561h0.009 c0.03-1.07,0.97-1.93,2.132-1.93h2.361c1.159,0,2.1,0.859,2.132,1.93h0.002v0.023c0,0.01,0.001,0.022,0.001,0.029 c0,0.017-0.001,0.025-0.001,0.035v14.495h2.019V76.274h0.007c0.038-1.063,0.975-1.917,2.129-1.917h2.364 c1.156,0,2.09,0.854,2.13,1.917h0.006v0.055c0,0.004,0.001,0.01,0.001,0.015C89.033,76.347,89.032,76.352,89.032,76.355z M89.115,69.537c0,0.81-0.706,1.464-1.577,1.464h-7.665c-0.872,0-1.577-0.654-1.577-1.464v-7.69c0-0.811,0.705-1.466,1.577-1.466 h7.665c0.871,0,1.577,0.655,1.577,1.466V69.537z M89.115,56.473c0,0.808-0.706,1.463-1.577,1.463h-7.665 c-0.872,0-1.577-0.655-1.577-1.463v-7.691c0-0.811,0.705-1.466,1.577-1.466h7.665c0.871,0,1.577,0.655,1.577,1.466V56.473z"></path><path d="M81.191,37.546H94.38h1.567L77.959,20.265v1.505v12.543C77.959,36.097,79.409,37.546,81.191,37.546z"></path></g></svg></div><noscript><img src="//s.platformalp.ru/img/icons-simple-solid/111--black.png" alt=""></noscript></div></div></div>
							<div class="node"><div class="wrapper1_text"><div class="wrapper2"><div class=""><h4 class="font-header spans xs-force-center textable"><span style="text-align: center;" class="p"><span style="color: rgb(57, 68, 88);"><span style="font-size: 14px;"><strong>Даем реальные сроки</strong></span></span></span></h4></div></div></div></div>
					</div>
					<div class="conteiners_text"></div>
				</div>

				<div class="underlining_two">
						<hr> 
					</div>
				<div class="small_two">
					<p class="small_two_one">
						<?php echo $file['home'];?>
					</p>
				</div>
				</div>

				<div class="title_three">
					<p>Готовые проекты<p>
				</div>	
				<div class="undirlingi_three">
					<hr>
				</div>
				
				<div class="ready-made">
					<div class="slide" id="slider1">
						<div class="slider responsive">
							<div class="left image">
								<img src="img/main/bcb726ddc1017cd2862a3f90735b65fa.jpg" class="slide_one" >
								<div class="descripnion_left">
								Ремонт
							</div>
							</div>
							<div class="right image">
								<img src="img/main/c872919ca4649630eea5ca1d8e6daa02.jpg" class="slide_one" >
								<div class="descripnion_right">
								Результат 
							</div>
							</div>
							
							
						</div>
						<p class="qwe">Спальня, г. Киев</p>
						<p class="qwer">Май, 2016</p>
					</div>
					<div class="slide"  id="slider2">
						<div class="slider responsive">
							<div class="left image" >
								<img src="img/main/11fbc0a8e796848712cfaf06c567db33.jpg" class="slide_two">
								<div class="descripnion_left">
								Ремонт
							</div>
							</div>
							<div class="right image">
								<img src="img/main/d6444fc8db79146d079e1b64c996170e.jpg" class="slide_two" >
								<div class="descripnion_right">
								Результат 
							</div>
							</div>
						</div>
						<p class="qwe">Комната в трешке, г. Киев</p>
						<p class="qwer">Июнь, 2016</p>
					</div>
					<div class="slide"  id="slider3">
						<div class="slider responsive">
							<div class="left image">
								<img src="img/main/193520d2355670e5075ffc4c9f484a85.jpg" class="slide_three">
								<div class="descripnion_left">
								Ремонт
							</div>
							</div>
							<div class="right image">
								<img src="img/main/9de5b619f54a293697c58a1ab197c2cc.jpg" class="slide_three" >
								<div class="descripnion_right">
								Результат 
							</div>
							</div>
						</div>
						<p class="qwe">Гостиная, г. Ирпень</p>
						<p class="qwer">Апрель, 2016</p>
					</div>
				</div>
				<div class="main_big">
				<div class="tittle_foth">
					<div class="tittle_big">
						<p >Наши предложения</p>
						
					</div>
					<div class="undirlingi_foth" >
						<hr>
					</div>

					</div>

					<div class="main_unit">
						<div class="enit_big">
							<div class="unit_one">
								
								<svg class="svgicon_two" id="svg13" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: rgba(16, 186, 108, 0.14)" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)"><path class="st0" d="M98.309,9.48h-29.07c-1.657,0-3,1.344-3,3v102.941c0,1.656,1.343,3,3,3h29.07c1.657,0,3-1.344,3-3V12.48 C101.309,10.824,99.966,9.48,98.309,9.48z M81.514,101.686H69.223c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5h12.291 c0.828,0,1.5,0.672,1.5,1.5S82.342,101.686,81.514,101.686z M81.516,84.078H69.225c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5 h12.291c0.828,0,1.5,0.672,1.5,1.5S82.344,84.078,81.516,84.078z M81.516,65.398H69.223c-0.828,0-1.5-0.672-1.5-1.5 s0.672-1.5,1.5-1.5h12.293c0.828,0,1.5,0.672,1.5,1.5S82.344,65.398,81.516,65.398z M81.516,46.303H69.223 c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5h12.293c0.828,0,1.5,0.672,1.5,1.5S82.344,46.303,81.516,46.303z M81.516,27.623 H69.223c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5h12.293c0.828,0,1.5,0.672,1.5,1.5S82.344,27.623,81.516,27.623z"></path><path class="st0" d="M56.815,43.559c-0.036-0.082-0.057-0.17-0.1-0.248L44.652,13.998c-0.463-1.125-1.559-1.857-2.774-1.857 s-2.312,0.734-2.774,1.857L26.929,43.584c-0.001,0.004-0.003,0.008-0.005,0.012l-0.008,0.02c-0.007,0.018-0.008,0.037-0.015,0.055 c-0.073,0.186-0.126,0.383-0.16,0.586c-0.014,0.078-0.017,0.154-0.023,0.232c-0.009,0.09-0.027,0.178-0.027,0.27v70.762 c0,1.656,1.343,3,3,3h24.377c1.657,0,3-1.344,3-3V44.951c0.004-0.064,0.02-0.127,0.02-0.193c0-0.4-0.099-0.77-0.24-1.119 C56.836,43.611,56.826,43.586,56.815,43.559z M38.227,110.617c0,0.828-0.672,1.5-1.5,1.5s-1.5-0.672-1.5-1.5V50.684 c0-0.828,0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5V110.617z M48.199,110.615c0,0.828-0.672,1.5-1.5,1.5s-1.5-0.672-1.5-1.5V50.682 c0-0.828,0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5V110.615z M34.169,41.758l5.265-12.795h4.889l5.267,12.795H34.169z"></path></g></svg>


								<div class="svgicon_text">	Бесплатные замеры</div>
								<div class="svigion_text_two">
									<p>Мы приедем к вам и сделаем</p> 
									<p>бесплатные замеры!</p>


						


								</div>
							

							</div>
							
							<div class="unit_two">
								<svg class="svgicon_two" id="svg14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" style="fill: rgba(16, 186, 108, 0.14)" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(42.66666666666667, 42.66666666666667)"><path d="M93.674,33.395H34.326c-4.321,0-7.826,3.504-7.826,7.826v34.565c0,4.322,3.504,7.826,7.826,7.826h39.391l7.458,10.532 c0.613,0.615,1.607,0.615,2.222,0l7.457-10.532h2.821c4.321,0,7.826-3.504,7.826-7.826V41.221 C101.5,36.898,97.996,33.395,93.674,33.395z M79.502,54.079c2.808,0,5.084,2.275,5.084,5.084c0,2.808-2.276,5.083-5.084,5.083 c-2.809,0-5.084-2.276-5.084-5.083C74.418,56.354,76.693,54.079,79.502,54.079z M47.981,64.247c-2.808,0-5.083-2.276-5.083-5.083 c0-2.809,2.275-5.084,5.083-5.084c2.809,0,5.084,2.275,5.084,5.084C53.065,61.971,50.79,64.247,47.981,64.247z M63.913,64.247 c-2.809,0-5.083-2.276-5.083-5.083c0-2.809,2.275-5.084,5.083-5.084s5.084,2.275,5.084,5.084 C68.997,61.971,66.721,64.247,63.913,64.247z"></path></g></svg>

								<div class="svgicon_text">	Бесплатная консультация</div>
								<div class="svigion_text_two">
									<p>Мы обязательно поможем сделать </p> 
									<p>вам выбор!</p>


							</div>
						</div>
					</div>

					<div class="middle_main">
						<div class="midle_tit" >
							<p class="tit_one">Используем новые инструменты. Выполним <p class="tit_one">работы любой сложности</p>
						</div>
						<div class="middleobg">
						<div class="middle_tit_two">
							<p class="tit_two">Работаем со всеми типами обоев:</p>
							<p> Бумажные; </p>
							<p> Флезилиновые;</p>
							<p>Виниловые обои;</p>
							<p>Акриловые обои;</p>
							<p>Натуральные обои;</p>
							<p>Стеклообои;</p>
							<p>Текстильные обои;</p>
							<p>Фотообои.</p>

						</div>

						<div class="tit_img">	
								<img src="img/main/da4545b44e4268198d445b8823de1cf7.png">
						</div>

						</div>


					</div>

					<div class="wallpaper">
						<img src="img/walper.jpg"> 

					</div>
				</div>
			</div>

			<div class="Reasonable_prices">
				
				<p class="resonable_text"> Доступные цены</p>
				<div class="resonable_line">
					<hr>
				</div>
				<div class="reson_text">
					<?php echo $file['price'];?>
				</div>

			</div>
			<div class="title_loock">

			<div class="googl_maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20337.832425475794!2d30.421828891821292!3d50.41820388977161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1536589973927" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			

			<div class="title_end">
				<?php echo $file['map'];?>
			</div>

			</div>


				

				
			</main>
			
		</div>
	
	</div>
	<footer class="footer">
		<div class="footer_text">
			Телефоны для связи: 095-128-64-90, 095-389-28-23 (Viber, Telegram)
		</div>
	</footer>
</body>
</html>