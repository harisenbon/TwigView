<?php
/**
 * CakePHP Inflector functions
 *
 * Use: {{ user|debug }}
 * Use: {{ user|pr }}
 * Use: {{ 'FOO'|low }}
 * Use: {{ 'foo'|up }}
 * Use: {{ 'HTTP_HOST'|env }}
 *
 * @author Keith Pehac <keith@delfi-net.com>
 * @package TwigView
 * @subpackage TwigView.Lib
 */
class Twig_Extension_Inflector extends Twig_Extension {

	/**
	 * Returns a list of filters to add to the existing list.
	 *
	 * @return array An array of filters
	 */
	public function getFilters() {
		return array(
			'plural'     => new Twig_Filter_Function('Inflector::pluralize'),
			'singular'   => new Twig_Filter_Function('Inflector::singularize'),
			'camel'      => new Twig_Filter_Function('Inflector::camelize'),
			'underscore' => new Twig_Filter_Function('Inflector::underscore'),
			'human'      => new Twig_Filter_Function('Inflector::humanize'),
			'table'      => new Twig_Filter_Function('Inflector::tableize'),
			'class'      => new Twig_Filter_Function('Inflector::classify'),
			'slug'       => new Twig_Filter_Function('Inflector::slug'),
		);
	}

	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName() {
		return 'inflector';
	}
}
