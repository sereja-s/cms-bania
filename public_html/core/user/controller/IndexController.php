<?php

namespace core\user\controller;

/** 
 * Индексный контроллер пользовательской части
 */
class IndexController extends BaseUser
{
	protected $name;

	protected function inputData()
	{
		// Выпуск №120
		parent::inputData();

		// Выпуск №128 - массив преимуществ
		$advantages = $this->model->get('advantages', [
			'where' => ['visible' => 1],
			'order' => ['menu_position'],
			'limit' => 10
		]);

		$services = $this->model->get('services', [
			'where' => ['visible' => 1],
			'order' => ['menu_position'],
		]);

		// Выпуск №128 | Вывод новостей
		/* $news = $this->model->get('news', [
			'where' => ['visible' => 1],
			'order' => ['date'],
			'order_direction' => ['DESC'],
			'limit' => 3
		]); */

		// Выпуск №125
		//$goods = $this->model->getGoods();

		// собираем переменные в массив и возвращаем в шаблон, что бы они стали доступными при выводе
		return compact('advantages', 'services');
	}
}
