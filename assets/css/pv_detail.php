<?php header("Content-type: text/css"); ?>

@import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

body.hero-anime p {
	opacity: 1;
}
.portofolio {
	padding-top: 20vh;
	padding-bottom: 5%;
	padding-left: 5%;
	padding-right: 5%;
}
/* .gallery-cell {
	width: 400px;
	height: 540px;
	margin-right: 8px;
	border-radius: 20px;

	background: linear-gradient(
			rgba(255, 255, 255, 0.9),
			rgba(255, 255, 255, 0.7)
		),
		url("../../gambar/bg-f68833.jpg");
} */
.gallery-cell img {
	margin-top: -10%;
	width: 440px;
	height: 580px;
	/* padding: 30px; */
	opacity: 1;
	/* border: 1px solid;  */
	/* -webkit-filter: drop-shadow(5px 5px 5px #222);
	filter: drop-shadow(5px 5px 5px #222); */
}
ul.accordion-list {
	position: relative;
	display: block;
	width: 100%;
	height: auto;
	/* padding: 20px; */
	margin: 0;
	list-style: none;
	/* background-color: #f9f9fa; */
}
ul.accordion-list li {
	position: relative;
	display: block;
	width: 100%;
	height: auto;
	background-color: #fff;
	padding: 20px;
	margin: 0 auto 15px auto;
	border: 1px solid #eee;
	border-radius: 5px;
	cursor: pointer;
}
ul.accordion-list li.active h3:after {
	transform: rotate(45deg);
}
ul.accordion-list li h3 {
	font-weight: 700;
	position: relative;
	display: block;
	width: 100%;
	height: auto;
	padding: 0 0 0 0;
	margin: 0;
	font-size: 15px;
	letter-spacing: 0.01em;
	cursor: pointer;
	color: #f68833;
}
ul.accordion-list li h3:after {
	content: "";
	font-family: "material-design-iconic-font";
	/* font-family: "Montserrat",  Helvetica, sans-serif; */
	position: absolute;
	right: 0;
	top: 0;
	color: #fcc110;
	transition: all 0.3s ease-in-out;
	font-size: 18px;
}
ul.accordion-list li div.answer {
	position: relative;
	display: block;
	width: 100%;
	height: auto;
	margin: 0;
	padding: 0;
	cursor: pointer;
}
ul.accordion-list li div.answer p {
	position: relative;
	display: block;
	font-weight: 300;
	padding: 10px 0 0 0;
	cursor: pointer;
	line-height: 150%;
	margin: 0 0 20px 0;
	font-size: 14px;
	color: rgb(0, 0, 0);
	text-align: left;
}