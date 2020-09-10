<?php 

require 'app/models/job.php';
require 'app/models/project.php';
require_once 'app/models/printable.php';
require_once 'lib1/project.php';


use app\models\{Job,project};

$job1 = new Job('PHP Developer','this is an awesome job');
$job1->months = 16;

$job2 = new Job('Python Developer','this is an awesome job');
$job2->months = 10;

$job3 = new Job('Devops','this is an awesome job');
$job3->months = 9;

$project1 = new project('project 1', 'description 1');

$projectLib1 = new lib1\project();

$jobs = [
    
    $job1,
    $job2,
    $job3
        
];

$projects = [
    
    $project1,

];

function printElement( $jobs){
    if($jobs->visible != true){
        return;
}
    
    echo    '<li class="work-position">';
    echo    '<h5>'. $jobs->getTitle() . '</h5>';
    echo    '<p>' . $jobs->getDescription().'</p>';
    echo    '<p>' . $jobs->getDurationAsString() .'</p>';
    echo    '<strong>Achievements:</strong>';
    echo    '<ul>';
    echo    '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo    '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo    '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo    '</ul>';
    echo    '</li>';
}
