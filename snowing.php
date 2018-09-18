<style>
@keyframes snow {
0% {background-position: 0px 0px, 0px 0px;}
 100% {background-position: 500px 1000px, 600px 300px;}
}

@-moz-keyframes snow {
0% {background-position: 0px 0px, 0px 0px;}
100% {background-position: 500px 1000px, 600px 300px;}
}

@-webkit-keyframes snow {
0% {background-position: 0px 0px, 0px 0px;}
 100% {background-position: 500px 1000px, 600px 300px;}
}

@-ms-keyframes snow {
0% {background-position: 0px 0px, 0px 0px;}
 100% {background-position: 500px 1000px, 600px 300px;}
}


#snowy {
	background-color: transparent;
	background-image: url('https://forums.everybodyedits.com/img/snow.png'), url('https://forums.everybodyedits.com/img/snow3.png?2');
	

	-webkit-animation: snow 20s linear infinite;
	-moz-animation: snow 20s linear infinite;
	-ms-animation: snow 20s linear infinite;
	animation: snow 20s linear infinite;

	width: 100%;
	height: 100%;
	z-index: 99;
	pointer-events: none;
	position: fixed;
	top: 0;
	left: 0;
}
</style><div id="snowy"></div>