<?php

namespace SSNepenthe\RecipeParser\Parsers;

/**
 * Description needs more thorough testing.
 *
 * Categories can be found in the upper right of the recipe as well as the very bottom of the page
 * .tags--top and .tags--transporter
 */
class DelishCom extends SchemaOrg {
	protected function set_paths() {
		parent::set_paths();

		$this->paths['description'][0] = './/div[@class="recipe-page--body-content"]/p';

		$this->paths['image'][0] = './/div[@class="embedded-image--inner"]/img';
		array_unshift( $this->paths['image'][1], '@data-src' );

		$this->paths['url'][0] = './/*[@rel="canonical"]';
	}
}
