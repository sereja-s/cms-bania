<section1 class="page-one one">
	<div class="container-big one__container-big">
		<div class="one__wrapper">
			<div data-da=".one__footer-new__content,767" class="one__image-1">
				<img src="<?= $this->img($this->set['img']) ?>" alt="все сауны Донецка">
			</div>
			<div class="one__container element-animation3">
				<div class="one__content content-1">
					<div class="content-1__uptitle uptitle">

						<div class="uptitle__item">Сауна в Донецке</div>
						<div class="uptitle__item">Баня в Донецке</div>

					</div>

					<h1 style="margin-top: 55px;" class="content-1__title"><?= $this->set['short_content'] ?><br>

						<?php if (!empty($this->phones)) : ?>

							<div style="display: flex; flex-direction: column; flex-wrap: wrap">

								<?php foreach ($this->phones as $phone) : ?>

									<div><a href="tel:<?= preg_replace('/[^+\d]/', '', $phone['name']) ?>" style="color: white;"><?= $phone['name'] ?></a></div>

								<?php endforeach; ?>

							</div>

						<?php endif; ?>

					</h1>

					<div class="content-1__downtitle downtitle">

						<div style="margin-top: 20px;" class="downtitle__item"><?= $this->set['address'] ?></div>

					</div>

				</div>
			</div>
			<div class="one__image-2">
				<img src="<?= $this->img($this->set['img_comp']) ?>" alt="все сауны в Донецке">
			</div>

		</div>
		<div class="one__footer-new">
			<div class="one__footer-new__content"></div>
		</div>
	</div>
</section1>

<section2 class="page-two two">

	<div style="text-align: center;" class="two__text bl0ck__text description">

		<?= $this->set['content'] ?>

	</div>

	<div class="two__container">

		<div style="text-align: center;" class="two__left">
			<div style="text-align: center;" class="two__header block__header">
				<div style="color: white; margin-bottom: 0px; font-size: 10px" class="two__title block__title">все сауны в Донецке, ДНР</div>
				<!-- <div class="two__text bl0ck__text">Вид парилки: сухая сауна</div> -->
			</div>

			<?php if (!empty($advantages)) : ?>

				<div style="text-align: center;" class="two__downtitle downtitle">

					<?php foreach ($advantages as $item) : ?>

						<div class="downtitle__item two__item"><?= $item['name'] ?></div>

					<?php endforeach; ?>

				</div>

			<?php endif; ?>

			<button class="two__btn">
				<h2 style="font-size: 29px;">Заказ сауны, бани по тел.</h2><br>

				<?php if (!empty($this->phones)) : ?>

					<div style="display: flex; flex-direction: column; flex-wrap: wrap">

						<?php foreach ($this->phones as $phone) : ?>

							<span><a href="tel:<?= preg_replace('/[^+\d]/', '', $phone['name']) ?>" style="color: white;"><?= $phone['name'] ?></a></span>

						<?php endforeach; ?>

					</div>

				<?php endif; ?>

			</button>
		</div>

		<div class="two__right">
			<img src="<?= $this->img($this->set['promo_img']) ?>" alt="все сауны в Донецке">
		</div>
	</div>
</section2>


<sectionn7 id="services" class="page-seven seven">

	<?php if (!empty($services)) : ?>

		<div class="seven__container">
			<div class="tree__header block__header">
				<div style="color: darkslategray;" class="tree__title block__title">У нас для вас</div>
				<!--  <div class="tree__text bl0ck__text">Find lots of insights and information on our blog. Explore, learn, and get inspired today.</div> -->
			</div>
			<div class="seven__block">
				<div class="seven__items">

					<?php foreach ($services as $service) : ?>

						<div class="seven__item">
							<div class="seven__image">
								<img src="<?= $this->img($service['img']) ?>" alt="<?= $service['name'] ?>">
							</div>
							<!-- <div class="seven__date">19 Jan 2023</div> -->
							<a href="#" class="seven__subtitle"><?= $service['name'] ?></a>
							<div class="seven__text"><?= $service['short_content'] ?></div>
							<!-- <div class="seven__buttons">
                                    <div class="seven__btn">Plumbing</div>
                                    <div class="seven__btn">Architecture</div>
                                    <div class="seven__btn">Maintenance</div>
                                </div> -->
						</div>

					<?php endforeach; ?>

				</div>
			</div>

		</div>

	<?php endif; ?>

</sectionn7>
<section8 class="page-eight eight">
	<div class="eught__container">

		<?php if (!empty($questions)) : ?>

			<div class="eight__leftside">
				<div style="color: darkslategray;" class="eight-leftside__title">Часто задаваемые вопросы</div>
				<!-- <div class="eight-leftside__block">
                            <div class="eight-leftside__question">Still need help?</div>
                            <div class="eight-leftside__link">
                                <a href="#">Get Help Now</a>
                            </div>
                        </div> -->
			</div>
			<div class="eight__rightside">
				<div data-spollers class="spollers">

					<?php foreach ($questions as $item) : ?>

						<div class="spollers__item">
							<button type="button" data-spoller class="spollers__title"><?= $item['name'] ?></button>
							<div class="spollers__body"><?= $item['short_content'] ?></div>
						</div>

					<?php endforeach; ?>

				</div>
			</div>

		<?php endif; ?>

	</div>
</section8>