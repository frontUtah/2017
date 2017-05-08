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

// get courses
function get_courses($key, $filter) {
	switch($filter) {
		case 'instructor':
			return get_courses_instructor($key);
			break;
		case 'instructor':
			return get_courses_track($key);
			break;
		default:
			return null;
	}	
}

// get courses by instructor
function get_courses_instructor($instructor) {
	global $courses;

	foreach($courses as $course) {
		if($course['instructor'] == $instructor) {
			$these_courses[] = $course;
		}
	}

	return $these_courses;
}

// get courses by track
function get_courses_track($track) {
	global $courses;

	foreach($courses as $course) {
		if($coures['tracj'] == $track) {
			$these_courses[] = $course;
		}
	}

	return $these_courses;
}

?>