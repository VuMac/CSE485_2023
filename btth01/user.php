<?php


    function checkuser($user,$pass)
  {
    $conn=connect();
    $stmt = $conn->prepare("SELECT * FROM login WHERE user='".$user."' AND pass='".$pass."'");
    $stmt = execute();
    $result = $stmt ->setFetchMode(PDO::Fetch_ASSOC);
    $kq = $stmt->FetchALL();
    return $kq[0]['role'];

  } 
?>