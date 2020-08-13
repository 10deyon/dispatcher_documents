<?php

function slash($string){
    global $db;
    return mysqli_real_escape_string($db,$string);
}
function bcrypt($pass){
    return password_hash($pass,PASSWORD_BCRYPT);
}

function userToId($user, $col=''){
    global $db;

    $sql = $db->query("SELECT * FROM user WHERE username='$user'");
    $row = $sql->fetch_object();
    $name = ($col=='')?$row->id:$row->$col;
    return $name;
}
function idToProfile($id,$col=''){
    global $db;

    $sql = $db->query("select * from profile where id='$id'");
    $row = $sql->fetch_object();

    $name = ($col=='')?$row->firstname.' '.$row->lastname:$row->$col;
    return $name;
}
function status($id,$no){
    global $db;

    $db->query("update user set status='$no' where id='$id'");
}
function idToUser($id, $col=''){
    global $db;

    $sql = $db->query("SELECT * FROM user WHERE id='$id'");
    $row = $sql->fetch_object();
    $name = ($col=='')?$row->username:$row->$col;
    return $name;
}
function Alert()
{
    global $message, $count;

    if($count == 1){
        echo '<script type="text/javascript">
   setInterval(function() {
    $("#refresh").load(location.href+" #refresh>*","");
}, 30000);
 </script>
 <div class="alert alert-danger alert-dismissible" style="position:fixed; top:50px; right:15px; z-index:10000">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-ban"></i> '. $message .'
              </div>';

    }
    else{
        echo '<script type="text/javascript">
   setInterval(function() {
    $("#refresh").load(location.href+" #refresh>*","");
}, 15000);
 </script>
 <div class="alert alert-success alert-dismissible"  style="position:fixed; top:50px; right:15px; z-index:10000">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i> '. $message .'
              </div>';
    }

    return;
}

function win_hash($no=7){
    return substr(str_shuffle(str_repeat('123456789abcdefghijklmnopqrstuvwxyz',20)),1,$no);
}
function win_hashs($no=7){
    return substr(str_shuffle(str_repeat('1234567890',20)),1,$no);
}

function create(){
    global $db,$message,$count;
    $id = win_hash(7);
    $password = password_hash('admin',PASSWORD_BCRYPT);
    $sql = $db->query("insert into user(id,username,password) values('$id','admin','$password')");
    if($sql){
        $message = "Successfully created ";
    }
    else {
        $count = 1;
        $message = "Error creating Message";
    }
}

?>