<?php

// get instructor
function get_instructor($slug) {
	global $instructors;

	foreach($instructors as $instructor) {
		if($instructor['slug'] == $slug) {
			return $instructor;
		}
	}
}

// get courses by instructor
function get_courses($instructor) {
	global $courses;

	foreach($courses as $course) {
		if($course['instructor'] == $instructor) {
			$these_courses[] = $course;
		}
	}

	return $these_courses;
}

// get courses by track
function get_course($track, $day, $slot) {
	global $courses;

	foreach($courses as $course) {
		if($course['track'] == $track && $course['day'] == $day && $course['slot'] == $slot) {
			return $course;
		}
	}
}

// get speaker
function get_speaker($slug) {
	global $speakers;

	foreach($speakers as $speaker) {
		if($speaker['slug'] == $slug) {
			return $speaker;
		}
	}
}

// get sessions by speaker
function get_sessions($speaker) {
	global $sessions;

	foreach($sessions as $session) {
		if($session['speaker'] == $speaker || is_array($session['speaker']) && in_array($speaker, $session['speaker'])) {
			$these_sessions[] = $session;
		}
	}

	return $these_sessions;
}

?>