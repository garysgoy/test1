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
    return json_encode(array("status"=>"success","msg"=>"Action= ".$req['action']." hello ".$req['name']));
  }
  function btn1()
  {
    return json_encode(array("status"=>"success","msg"=>"hello ".$req['name']));
  }
  function btn2()
  {
    return json_encode(array("status"=>"success","msg"=>"hello ".$req['name']));
  }

?>