<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="<?= $this->set['name'] ?> - баня, сауна в Донецке по адресу: <?= $this->set['address'] ?>, <?php if (!empty($this->phones)) {
																																												echo 'тел. ';
																																												foreach ($this->phones as $phone) {
																																													echo $phone['name'] . ' ';
																																												}
																																											}; ?>">
	<meta name="keywords" content="баня в Донецке, сауна в Донецке, сауны в Донецке, сауны и бани в Донецке, все сауны Донецка ДНР, все сауны в Донецке ДНР">

	<meta property="og:title" content="<?= $this->set['name'] ?>" />
	<meta property="og:description" content="баня, сауна в Донецке по адресу: <?= $this->set['address'] ?>, <?php if (!empty($this->phones)) {
																																					echo 'тел. ';
																																					foreach ($this->phones as $phone) {
																																						echo $phone['name'] . ' ';
																																					}
																																				}; ?>" />
	<meta property="og:image" content="<?= PATH . TEMPLATE ?>assets/images/header/ЖаRa.png" />

	<link rel="icon" href="https://sauna-zhara-dn.ru/favicon.ico" type="image/x-icon">

	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/site.webmanifest">
	<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title><?= $this->set['title'] ?></title>

	<?php $this->getStyles() ?>

</head>

<body>


	<div class="wrapper">
		<header class="header">
			<div class="container-big">
				<div class="header__container">
					<div class="header__logo">

						<p class="logo__text"><?= $this->set['name'] ?></p>

					</div>

					<div class="header__end-block">
						<img src="<?= PATH . TEMPLATE ?>assets/images/header/dot.png" alt="dot">
						<p class="header__end-text">График работы: <?= $this->set['work_schedule'] ?></p>
					</div>

				</div>
			</div>
		</header>
		<main class="page">