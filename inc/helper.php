<?php
$dir = 'images/';

function movie() { // Rand pictures to movie section
	global $dir;
	$movies = array("$dir"."movie1.png", "$dir"."movie2.png", "$dir"."movie3.png", "$dir"."movie4.png", "$dir"."movie5.png", "$dir"."movie6.png");
	echo '<img src=" ' . $movies[rand(0, 5)] . '" alt="placeholder"/>';
};

function event() { // Rand pictures to event section
	global $dir;
	$events = array("$dir"."event1.png", "$dir"."event2.png", "$dir"."event3.png");
	echo '<img src=" ' . $events[rand(0, 2)] . '" alt="placeholder"/>';
};

function gallery() { // Rand pictures to gallery section
	global $dir;
	$pictures = array("$dir"."gallery1.png", "$dir"."gallery2.png", "$dir"."gallery3.png", "$dir"."gallery4.png", "$dir"."gallery4.png", "$dir"."gallery5.png");
	echo '<img src=" ' . $pictures[rand(0, 4)] . '" alt="placeholder"/>';
};
