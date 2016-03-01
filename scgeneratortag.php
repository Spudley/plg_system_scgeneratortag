<?php
/**
 * @package   SCGeneratorTag
 * @type      Plugin (System)
 * @version   1.0.0
 * @author    Simon Champion
 * @copyright (C) 2016 Simon Champion
 * @license   GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

defined('_JEXEC') or die;

class plgSystemSCGeneratorTag extends JPlugin
{
	public function onBeforeRender()
	{
		$jDocument = JFactory::getDocument();

		$active = (int)($this->params->get('active', 'Y') === 'Y');
		$generator = $this->params->get('generator', '');

		$jDocument->setGenerator($active ? $generator : '');
	}
}
