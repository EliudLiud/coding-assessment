<?php 
require('data1.php');

 function getTeams($user,$list){
    $groups=[];
    //get the name of the user
    $name=$user->displayName;
    //loop through the list
    for($i=0;$i<count($list);$i++){
        //check if the list contains a team
        $team=$list[$i]->isTeam;
        if($team){
            //loop through teams and compare the names
            //alternativelt, one can use array_search() to fins the string 'Alice'
            for ($k=0; $k<count($list[$i]->members) ; $k++) { 
                if($name==$list[$i]->members[$k]->displayName){
                    //push the list into the groups present array
                    array_push($groups,$list[$i]);
                }
            }
        }
        if($i==count($list)){
        break;
        }

    }
    return $groups;

}

//short form of member of  team []
$mteam=[];
$group=getTeams($alice,$people);
foreach($group as $g){
    array_push($mteam,$g->displayName);
}
echo (json_encode($mteam));
?>
