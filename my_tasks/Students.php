<?php

	class Arr
	{
		// Массив для хранения чисел:
		private $numbers;

		// Добавляет число в набор:
		public function add($numbers)
		{
			$this->numbers[] = $num;
		}

		// Находит сумму чисел набора:
		public function getSum()
		{
			return array_sum($this->numbers);
		}
	}
