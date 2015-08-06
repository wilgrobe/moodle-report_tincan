<?php


/**
 * Add event handlers for the quiz
 *
 * @package    report_tincan
 * @category   event
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$observers = array(
    array(
        'eventname'   => '\mod_quiz\event\attempt_started',
        'includefile' => 'report/tincan/lib.php',
        'callback'    => '\report_tincan\report_tincan::tincan_quiz_attempt_started',
//         'internal' => false,
    ),
    array(
        'eventname'   => '\mod_quiz\event\attempt_preview_started',
        'includefile' => 'report/tincan/lib.php',
        'callback'    => '\report_tincan\report_tincan::tincan_quiz_attempt_preview_started',
//         'internal' => false,
    ),
	array(
        'eventname'   => '\mod_quiz\event\attempt_reviewed',
        'includefile' => 'report/tincan/lib.php',
        'callback'    => '\report_tincan\report_tincan::tincan_quiz_attempt_reviewed',
//         'internal' => false,
    ),
    array(
        'eventname'   => '\mod_quiz\event\attempt_submitted',
		'includefile' => 'report/tincan/lib.php',
        'callback'    => '\report_tincan\report_tincan::tincan_quiz_attempt_submitted',
//         'internal' => false,
	),
	array(
		'eventname'   => '\core\event\question_attempt_answered',
		'includefile' => 'report/tincan/lib.php',
		'callback'    => '\report_tincan\report_tincan::tincan_quiz_question_answered',
// 		'internal' => false,
	),
	array(
		'eventname'   => '\core\event\question_attempt_graded',
		'includefile' => 'report/tincan/lib.php',
		'callback'    => '\report_tincan\report_tincan::tincan_quiz_question_graded',
// 		'internal' => false,
    ),
);