<?php

namespace LDRCore\Modelling\Models\Observers;

use Illuminate\Database\Eloquent\Model;

class ValidatableObserver
{
	public function saving(Model $model)
	{
		$model->validate();
	}
	
	public function updating(Model $model)
	{
		$model->validate();
	}
	
	public function deleting(Model $model)
	{
		$model->validate();
	}
}