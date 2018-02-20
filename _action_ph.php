<?
$debug = false;
$req = ($debug)? $_GET:$_POST;

  if (isset($req['action']))
  {
    switch($req['action'])
    {
      case "ph":echo btn();break;
      case "gh":echo btn();break;
      default:break;
    }
  }

  function btn()
  {
    global $req;
    return json_encode(array("status"=>"fail","msg"=>"Action= ".$req['action']." hello ".$req['name']));
  }
?>