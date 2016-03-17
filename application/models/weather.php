<?php
class Weather extends Base_Model {


    function __construct()
	{
      $this->db_tablepre = 't_sys_';
      $this->table_name = 'weather';
		  parent::__construct();
	}

  function index($address,$textcontent,$openid,$thattime){

    $data = array('users_address' => $address,'users_city' => $textcontent,'users_openid' =>$openid,'users_thattime' =>$thattime);
    $infodata=$this->insert($data);


  }

  function queryinfo($id1,$id2,$id3){
    $data1=$this->get_one(array('medias_id' =>$id1));
    $data2=$this->get_one(array('medias_id' =>$id2));
    $data3=$this->get_one(array('medias_id' =>$id3));
    return $data1;
    return $data2;
    return $data3;
  }

// END role_model class

/* End of file role_model.php */
/* Location: ./role_model.php */
}
?>
