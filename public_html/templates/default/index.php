<section1 class="page-one one">
	<div class="container-big one__container-big">
		<div class="one__wrapper">
			<div data-da=".one__footer-new__content,767" class="one__image-1">
				<img src="<?= PATH . TEMPLATE ?>assets/images/section1/basein.png" alt="image">
			</div>
			<div class="one__container element-animation3">
				<div class="one__content content-1">
					<div class="content-1__uptitle uptitle">

						<div class="uptitle__item">Сауна в Донецке</div>
						<div class="uptitle__item">Баня в Донецке</div>

						<!-- <div class="uptitle__item">на Текстильщике </div> -->
					</div>
					<h1 style="margin-top: 55px;" class="content-1__title"><?= $set['short_content'] ?><br>

						<?php if (!empty($this->phones)) : ?>

							<?php foreach ($this->phones as $phone) : ?>

								<div style="display: flex; flex-direction: column; flex-wrap:wrap"><a href="tel:<?= preg_replace('/[^+\d]/', '', $phone['name']) ?>" style="color: darkcyan;"><?= $phone['name'] ?></a></div>

							<?php endforeach; ?>

						<?php endif; ?>


					</h1>

					<div class="content-1__downtitle downtitle">
						<div style="margin-top: 20px;" class="downtitle__item"><?= $this->set['address'] ?></div>
						<!-- <div class="downtitle__item">100% душевно </div> -->
					</div>
					<!-- <div class="content-1__button btn">
						<div class="btn__text">Позвонить сейчас</div>
						<div class="btn__phone"><img src="<?= PATH . TEMPLATE ?>assets/images/section1/phone.png" alt="phone"></div>
					</div> -->

				</div>
			</div>
			<div class="one__image-2">
				<img src="<?= PATH . TEMPLATE ?>assets/images/section1/sauna.png" alt="image">
			</div>
		</div>
		<div class="one__footer-new">
			<div class="one__footer-new__content"></div>
		</div>
	</div>
</section1>

<section2 class="page-two two">
	<div class="two__container">
		<div style="text-align: center;" class="two__left element-animation1">
			<div style="text-align: center;" class="two__header block__header">
				<div style="color: white;" class="two__title block__title">все сауны в Донецке ДНР</div>
				<div class="two__text bl0ck__text">Вид парилки: сухая сауна</div>
			</div>
			<div style="text-align: center;" class="two__downtitle downtitle">

				<div class="downtitle__item two__item">Вместимость до 10 чел</div>
				<div class="downtitle__item two__item">Бассейн</div>

			</div>
			<button class="two__btn">
				<h3 style="font-size: 26px;">Заказ сауны, бани по тел.</h3><br>
				<span>+7(949)564-47-87</span><br>
				<span>+7(949)428-14-51</span><br>
				<span>+7(949)301-12-81</span><br>
			</button>
		</div>
		<div class="two__right element-animation2">
			<img src="<?= PATH . TEMPLATE ?>assets/images/section2/photo_2023-12-05_22-19-46.jpg" alt="image">
		</div>
	</div>
</section2>


<sectionn7 id="services" class="page-seven seven">
	<div class="seven__container">
		<div class="tree__header block__header">
			<div class="tree__title block__title">У нас для вас</div>
			<!--  <div class="tree__text bl0ck__text">Find lots of insights and information on our blog. Explore, learn, and get inspired today.</div> -->
		</div>
		<div class="seven__block">
			<div class="seven__items">
				<div class="seven__item">
					<div class="seven__image">
						<img src="<?= PATH . TEMPLATE ?>assets/images/ssection7/photo-basein.jpg" alt="image">
					</div>
					<!-- <div class="seven__date">19 Jan 2023</div> -->
					<a href="#" class="seven__subtitle">Просторный бассейн</a>
					<div class="seven__text">Discover the ultimate guide to troubleshooting common smart home issues in our latest blog post. From connectivity problems to device malfunctions...</div>
					<!-- <div class="seven__buttons">
                                    <div class="seven__btn">Plumbing</div>
                                    <div class="seven__btn">Architecture</div>
                                    <div class="seven__btn">Maintenance</div>
                                </div> -->
				</div>


				<div class="seven__item">
					<div class="seven__image">
						<img src="<?= PATH . TEMPLATE ?>assets/images/ssection7/место-для-посиделок.jpg" alt="image">
					</div>
					<!-- <div class="seven__date">19 Jan 2023</div> -->
					<a href="#" class="seven__subtitle">Комната отдыха</a>
					<!-- <div class="seven__text">Discover the ultimate guide to troubleshooting common smart home issues in our latest blog post. From connectivity problems to device malfunctions...</div>
                                <div class="seven__buttons">
                                    <div class="seven__btn">Plumbing</div>
                                    <div class="seven__btn">Architecture</div>
                                    <div class="seven__btn">Maintenance</div>
                                </div> -->
				</div>
				<div class="seven__item">
					<div class="seven__image">
						<img src="<?= PATH . TEMPLATE ?>assets/images/ssection7/спальное-место.jpg" alt="image">
					</div>
					<!-- <div class="seven__date">19 Jan 2023</div> -->
					<a href="#" class="seven__subtitle">Домашняя обстановка</a>
					<!-- <div class="seven__text">Discover the ultimate guide to troubleshooting common smart home issues in our latest blog post. From connectivity problems to device malfunctions...</div>
                                <div class="seven__buttons">
                                    <div class="seven__btn">Plumbing</div>
                                    <div class="seven__btn">Architecture</div>
                                    <div class="seven__btn">Maintenance</div>
                                </div> -->
				</div>
			</div>
		</div>

	</div>
</sectionn7>
<section8 class="page-eight eight">
	<div class="eught__container">
		<div class="eight__leftside">
			<div class="eight-leftside__title">Часто задаваемые вопросы</div>
			<!-- <div class="eight-leftside__block">
                            <div class="eight-leftside__question">Still need help?</div>
                            <div class="eight-leftside__link">
                                <a href="#">Get Help Now</a>
                            </div>
                        </div> -->
		</div>
		<div class="eight__rightside">
			<div data-spollers class="spollers">
				<div class="spollers__item">
					<button type="button" data-spoller class="spollers__title">Где вы находитесь?</button>
					<div class="spollers__body">г. Донецк, р-н Кировский, мкр.Текстильщик, ул.Текстильщиков, 12</div>
				</div>
				<div class="spollers__item">
					<button type="button" data-spoller class="spollers__title">Как к вам добраться на общественном транспорте?</button>
					<div class="spollers__body">Автобус, маршрутное такси № 77, 85, 42, 98</div>
				</div>
				<div class="spollers__item">
					<button type="button" data-spoller class="spollers__title">График работы</button>
					<div class="spollers__body">10:00-22:00</div>
				</div>
				<!--  <div class="spollers__item">
                                <button type="button" data-spoller class="spollers__title">How are payments handled on HomePro?</button>
                                <div class="spollers__body">HomePro is a home care platform that connects homeowners with professional service providers offering a wide range of home services, including repairs, maintenance, cleaning, and more.</div>
                            </div> -->
				<!-- <div class="spollers__item">
                                <button type="button" data-spoller class="spollers__title">How do I leave a review for a service provider?</button>
                                <div class="spollers__body">HomePro is a home care platform that connects homeowners with professional service providers offering a wide range of home services, including repairs, maintenance, cleaning, and more.</div>
                            </div> -->

			</div>
		</div>
	</div>
</section8>