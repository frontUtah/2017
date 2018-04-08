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

// get talks by speaker
function get_talks($speaker) {
	global $talks;

	foreach($talks as $talk) {
		if($talk['speaker'] == $speaker || is_array($talk['speaker']) && in_array($speaker, $talk['speaker'])) {
			$these_talks[] = $talk;
		}
	}

	return $these_talks;
}

// get talk by slot
function get_talk($day, $slot) {
	global $talks;

	foreach($talks as $talk) {
		if($talk['day'] == $day && $talk['slot'] == $slot) {
			return $talk;
		}
	}
}

?>