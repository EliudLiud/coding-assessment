<?php 
require('data3.php');
//for this task, i used data 3 and made the correct adjustments to my code
function get_members($team){
    $members=[];
    foreach ($team->members as $key) {
       if($key->isTeam){
           //for indirect members, we will get them from their teams, 
           //reasdon for this for loop
           for($i=0;$i<count($key->members);$i++){
               if($key->members[$i]->isTeam){
                   continue;
               }else{
                array_push($members,$key->members[$i]);
               }
           }
           //for security purposesto break out of the loop
           //
           if($i==count($key->members)){
           break;
           }
       }else{
           //if not indirect members, then we add them directly
           array_push($members,$key);
       }
    }
   return $members;
}



$teams = [];
$result = get_members($c_team);
foreach($result as $res) {
    array_push($teams, $res->displayName);
}

sort($teams);

echo json_encode($teams);
