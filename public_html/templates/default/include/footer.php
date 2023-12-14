</main>
<footer class="footer">

	<div class="footer__container-big big-down">
		<div class="footer__container">
			<div class="footer__down element-animation3">

				<div class="footer__down-body">
					<div class="footer-body__left left-down">
						<div class="left-down__header">

							<div class="left-down__name"><?= $this->set['name'] ?></div>

						</div>
						<div class="left-down__body"><?= $this->set['description'] ?></div>

						<?php if (!empty($this->socials)) : ?>

							<div class="left-down__icons">

								<?php foreach ($this->socials as $social) : ?>

									<div class="left-down__icon">

										<a href="<?= $this->alias($social['external_alias']) ?>">
											<img src="<?= $this->img($social['img']) ?>" alt="<?= $social['name'] ?>">
										</a>

									</div>

								<?php endforeach; ?>

							</div>

						<?php endif; ?>

					</div>
					<div class="footer-body__right">

						<div class="footer-body__right-2">
							<a class="footer-body__item item-big" href="#">Контакты</a>
							<a class="footer-body__item" href="#"><?= $this->set['address'] ?></a>
							<a class="footer-body__item" href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a>

							<?php if (!empty($this->phones)) : ?>

								<?php foreach ($this->phones as $phone) : ?>

									<a class="footer-body__item" href="tel:<?= preg_replace('/[^+\d]/', '', $phone['name']) ?>"><?= $phone['name'] ?></a>

								<?php endforeach; ?>

							<?php endif; ?>

						</div>
						<div class="footer-body__right-2"></div>
					</div>
				</div>
				<div class="footer__down-footer">
					<p><?= '&copy; ' . date('Y') ?>&nbsp.<?= $this->set['title'] ?></p>
				</div>
				<div style="padding: 0;" class="footer__down-footer">
					<p>Сделано в <a href="https://saitpostroen.ru/">СайтПостроен</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<?php $this->getScripts() ?>

</body>

</html>