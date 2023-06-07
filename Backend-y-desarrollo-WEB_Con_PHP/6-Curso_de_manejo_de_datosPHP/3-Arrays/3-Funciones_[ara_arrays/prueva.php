<?php
$courses = [
    'backend' =>'PHP', 
    'frontend' => 'Javascript', 
    'framework' => 'Laravel'
  ];
  
  echo "<pre>";
    var_dump(array_flip($courses));
    var_dump(array_slice($courses, 1));
    var_dump(array_chunk($courses, 1));
    
    $course = array_shift($courses);
    $data = array_pop($courses);
    print_r($data);

    array_unshift($courses, "vuejs", "css");
    print_r($courses);
    array_push($courses, "vuejs");
    