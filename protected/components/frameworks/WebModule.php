<?php

abstract class WebModule extends CWebModule
{
	abstract public function getModuleOrdering();
	abstract public function getModuleName();
	abstract public function getModuleIcon();
	abstract public function getModuleLink();
}