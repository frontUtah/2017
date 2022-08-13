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
function get_courses_by_instructor($instructor) {
	global $courses;

	foreach($courses as $course) {
		if($course['instructor'] == $instructor || is_array($course['instructor']) && in_array($instructor, $course['instructor'])) {
			$these_courses[] = $course;
		}
	}

	return $these_courses;
}

// get other instructors
function get_other_instructors($instructors, $the_instructor) {
	$other_instructors = array();
	
	foreach($instructors as $other_instructor) {
		if($other_instructor != $the_instructor) {
			$other_instructors[] = $other_instructor;
		}
	}
	
	return $other_instructors;
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

// get courses by slot (ordered by room)
function get_courses($day, $slot) {
	global $courses;
	
	$this_courses = array();

	foreach($courses as $course) {
		if($course['day'] == $day && $course['slot'] == $slot) {
			$this_courses[$course['room']] = $course;
		}
	}
	
	return $this_courses;
}

// get speaker
function get_speaker($slug) {
	global $speakers;
	
	$found = null;

	foreach($speakers as $speaker) {
		if($speaker['slug'] == $slug) {
			$found = $speaker;
		}
	}
	
	return $found;
}

// get talks by speaker
function get_talks($speaker) {
	global $talks;
	
	$these_talks = array();

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
	
	if(is_array($talks) && count($talks) > 0) {
		foreach($talks as $talk) {
			if($talk['day'] == $day && $talk['slot'] == $slot) {
				return $talk;
			}
		}
	}
}

// get individual training
function get_training($slug) {
	global $trainings;
	
	foreach($trainings as $training) {
		if($training['slug'] == $slug) {
			return $training;
		}
	}
}

// get trainings
function get_trainings($subject) {
	global $trainings;

	foreach($trainings as $training) {
		if(in_array($subject, $training['subjects'])) {
			$these_trainings[$training['instructor']][] = $training;
		}
	}
	
	return $these_trainings;
}

// get trainings by instructor
function get_trainings_by_instructor($instructor) {
	global $trainings;

	foreach($trainings as $training) {
		if($training['instructor'] == $instructor) {
			$these_trainings[] = $training;
		}
	}
	
	return $these_trainings;
}

// return training subject
function training_subject($subject) {
	switch($subject) {
		case 'ux':
			return 'UX';
		case 'product-management':
			return 'Product Management';
		case 'leadership':
			return 'Leadership';
	}
}

// get consultant
function get_consultant($slug) {
	global $consultants;

	foreach($consultants as $consultant) {
		if($consultant['slug'] == $slug) {
			return $consultant;
		}
	}
}

// get conference time slots
function get_conference_timeslots($day) {	
	$slots[1] = array('time' => '9:10', 'meridian' => 'AM');
	$slots[2] = array('time' => '9:45', 'meridian' => 'AM');
	$slots[3] = array('time' => '11:00', 'meridian' => 'AM');
	$slots[4] = array('time' => '11:35', 'meridian' => 'AM');
	$slots[5] = array('time' => '1:40', 'meridian' => 'PM');
	$slots[6] = array('time' => '2:15', 'meridian' => 'PM');
	$slots[7] = array('time' => '3:30', 'meridian' => 'PM');
	$slots[8] = array('time' => '4:05', 'meridian' => 'PM');
	
	return $slots;
}

// get workshop series time slots
function get_workshopseries_timeslots($day) {	
	$slots[1] = array('time' => '8:30', 'meridian' => 'AM');
	$slots[2] = array('time' => '1:30', 'meridian' => 'PM');
	
	return $slots;
}

// get time slot
function get_time($day, $slot) {
	$slots = get_workshopseries_timeslots($day);
	return $slots[$slot]['time'] . ' ' . $slots[$slot]['meridian'];
}

// get workshop day
function get_workshop_day($day) {
	switch($day) {
		case 1:
			return 'November 2, 2022';
			break;
		case 2:
			return 'November 3, 2022';
			break;
		case 3:
			return 'November 4, 2022';
			break;
	}
}

// get conference day
function get_conference_day($day) {
	switch($day) {
		case 1:
			return 'Wednesday, 6 April 2022';
			break;
		case 2:
			return 'Thursday, 7 April 2022';
			break;
		case 3:
			return 'Friday, 8 April 2022';
			break;
	}
}

// truncate
function truncate_string($string, $length) {
	if(strlen($string) > $length) {
		return rtrim(mb_strimwidth($string, 0, $length)) . '&hellip;';
	} else {
		return $string;
	}
}

// get room
function get_room($id) {
	switch($id) {
		case 1:
			return 'Viridian A';
		case 2:
			return 'Viridian B';
		case 3:
			return 'Viridian C';
		case 4:
			return 'Parkview';
	}
}

// get sponsor
function get_sponsor($slug) {
	global $sponsors;
	
	$found = null;

	foreach($sponsors as $sponsor) {
		if($sponsor['slug'] == $slug) {
			$found = $sponsor;
		}
	}
	
	return $found;
}

?>