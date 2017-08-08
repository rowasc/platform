<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Ushahidi API Sets Controller
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application\Controllers
 * @copyright  2013 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

class Controller_Api_SavedSearches extends Ushahidi_Rest {

	protected $_open_methods = array
	(
		Request::GET
	);

	protected function _scope()
	{
		return 'savedsearches';
	}

	protected function _resource()
	{
		return 'savedsearches';
	}
}
