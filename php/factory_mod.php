<?php

// 工厂模式

class Automobile
{
	private $vehicleMake;
	private $vehicleModel;

	public function __construct($make, $model)
	{
		$this->$vehicleMake = $make;
		$this->$vehicleModel = $model;
	}

	public function getMakeAndModel()
	{
		return $this->$vehicleMake.' '.$this->$vehicleModel;
	}
}

class AutomobileFactory
{
	public static function create($make, $model)
	{
		return new Automobile($make, $mobile);
	}
}

// 用工厂的 create 方法创建 Automobile 对象
$veyron = AutomobileFactory::create('Bugatti', 'Veyron');
echo _($veyron->getMakeAndModel());