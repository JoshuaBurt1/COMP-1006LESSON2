<?php
$student_info_keys = [
    'name',
    'age',
    'dob'
  ];
  
  $students = [ //nested array
    ['Shaun McKinnon', 44, '12-22-1978'],
    ['Gagandeep Kaur', 26, '01-02-1997'],
    ['Sam Whitaker', 23, '05-17-1999']
  ];

  $aa_students = [ //key =>
    [
        "name" => "Jeshua Beurt",
        "age" => 34,
        "dob" => "1988-4-29"
    ],
    [
        "age" => 22,
        "name" => "Amrit",
        "dob" => "2001-01-18"
    ]
];

foreach ($aa_students as $student){
    echo $student["age"];
}
//SQL queries return php data as associative arrays
// __DIR__ returns current directory

// in google search bar ? --> key =, ---> values &, --> new key =

?>