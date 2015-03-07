<?php
	session_start();
	
	function site_db()
	{
		try
		{
			return new PDO('mysql:host=localhost;dbname=seroma','root','');
		}
		catch(PDOException $ex)
		{
			echo "Connection Error: ", $ex->getMessage();
		}
	}
	
	function add_subscriber($subscriberemail)
	{
		$db = site_db();
		$sql = "insert into subscriptions(subscriberemail,subscriberstatus) values (?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($subscriberemail,1));
		
		$db = null;
	}
	
	function view_subscriber()
	{
		$db = site_db();
		$sql = "select * from subscriptions order by 1 asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function add_article($articletitle, $articlebody, $articleimgname, $articleimgtype, $articleimgurl)
	{
		$db = site_db();
		$sql = "insert into articles(articletitle, articlebody, articleimgname, articleimgtype, articleimgurl, articlestatus) values (?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($articletitle, $articlebody, $articleimgname, $articleimgtype, $articleimgurl, 1));
		$db = null;
	}
	
	function get_articles()
	{
		$db = site_db();
		$sql = "select articletitle, articlebody, articleimgurl from articles where articlestatus = 1 order by articleid desc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function del_get_articles()
	{
		$db = site_db();
		$sql = "select articleid, articletitle, articlebody, articleimgurl from articles where articlestatus = 1 order by articletitle asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function delete_article($articleid)
	{
		$db = site_db();
		$sql = "update articles set articlestatus = 0 where articleid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($articleid));
		$db = null;
	}
	
	function upd_get_articles()
	{
		$db = site_db();
		$sql = "select articleid, articletitle, articlebody, articleimgurl from articles order by articletitle asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
    function update_article($articleid, $articletitle, $articlebody, $articlestatus, $articleimgname, $articleimgtype, $articleimgurl)
	{
		if($articletitle != '')
			update_article_title($articleid, $articletitle);
		if($articlebody != '')
			update_article_body($articleid, $articlebody);
		if($articlestatus != '')
			update_article_status($articleid, $articlestatus);
		if($articleimgname != '' && $articleimgtype != '')
			update_article_img($articleid, $articleimgname, $articleimgtype, $articleimgurl);
	}
	
	function update_article_title($articleid, $articletitle)
	{
		$db = site_db();
		$sql = "update articles set articletitle = ? where articleid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($articletitle, $articleid));
		$db = null;
	}
	
	function update_article_body($articleid, $articlebody)
	{
		$db = site_db();
		$sql = "update articles set articlebody = ? where articleid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($articlebody, $articleid));
		$db = null;
	}
	
	function update_article_status($articleid, $articlestatus)
	{
		$db = site_db();
		$sql = "update articles set articlestatus = ? where articleid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($articlestatus, $articleid));
		$db = null;
	}
	
	function update_article_img($articleid, $articleimgname, $articleimgtype, $articleimgurl)
	{
		$db = site_db();
		$sql = "update articles set articleimgname = ?, articleimgtype = ?, articleimgurl = ? where articleid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($articleimgname, $articleimgtype, $articleimgurl, $articleid));
		$db = null;
	}
	
	function add_finishes($finishesname)
	{
		$db = site_db();
		$sql = "insert into finishes(finishesname, finishesstatus) values (?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($finishesname,1));
		$db = null;
	}
	
	function get_finishes()
	{
		$db = site_db();
		$sql = "select * from finishes where finishesstatus = ?";
		$st = $db->prepare($sql);
		$st->execute(array(1));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function get_update_finishes()
	{
		$db = site_db();
		$sql = "select * from finishes";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function add_unit($unitname, $unittype, $unitarea, $unitimgname, $unitimgtype, $unitimgurl, $unitfinishes1, $unitfinishes2, $unitfinishes3, $unitfinishes4, $unitfinishes5)
	{
		$db = site_db();
		$sql = "insert into units(unitname, unittype, unitarea, unitimgname, unitimgtype, unitimgurl, unitfinishes1, unitfinishes2, unitfinishes3, unitfinishes4, unitfinishes5, unitstatus) values (?,?,?,?,?,?,?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($unitname, $unittype, $unitarea, $unitimgname, $unitimgtype, $unitimgurl, $unitfinishes1, $unitfinishes2, $unitfinishes3, $unitfinishes4, $unitfinishes5, 1));
		$db = null;
	}
	
	function get_units()
	{
		$db = site_db();
		$sql = "select * from units where unitstatus = ?";
		$st = $db->prepare($sql);
		$st->execute(array(1));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function get_update_units()
	{
		$db = site_db();
		$sql = "select * from units";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function update_unit($unitid, $unitname, $unittype, $unitarea, $unitimgname, $unitimgtype, $unitimgurl, $unitfinishes1, $unitfinishes2, $unitfinishes3, $unitfinishes4, $unitfinishes5, $unitstatus)
	{
		if($unitname != '')
			update_unit_unitname($unitid, $unitname);
		if($unittype != '')
			update_unit_unittype($unitid, $unittype);
		if($unitarea != '')
			update_unit_unitarea($unitid, $unitarea);
		if($unitimgname != '')
			update_unit_img($unitid, $unitimgname, $unitimgtype, $unitimgurl);
		if($unitfinishes1 != '')
			update_unit_unitfinishes1($unitid, $unitfinishes1);
		if($unitfinishes2 != '')
			update_unit_unitfinishes2($unitid, $unitfinishes2);
		if($unitfinishes3 != '')
			update_unit_unitfinishes3($unitid, $unitfinishes3);
		if($unitfinishes4 != '')
			update_unit_unitfinishes4($unitid, $unitfinishes4);
		if($unitfinishes5 != '')
			update_unit_unitfinishes5($unitid, $unitfinishes5);
		if($unitstatus != '')
			update_unit_unitstatus($unitid, $unitstatus);
	}
	
	function update_unit_unitname($unitid, $unitname)
	{
		$db = site_db();
		$sql = "update units set unitname = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitname, $unitid));
		$db = null;
	}
	
	function update_unit_unittype($unitid, $unittype)
	{
		$db = site_db();
		$sql = "update units set unittype = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unittype, $unitid));
		$db = null;
	}
	
	function update_unit_unitarea($unitid, $unitarea)
	{
		$db = site_db();
		$sql = "update units set unitarea = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitarea, $unitid));
		$db = null;
	}
	
	function update_unit_unitimg($unitid, $unitimgname, $unitimgtype, $unitimgurl)
	{
		$db = site_db();
		$sql = "update units set unitimgname = ?, unitimgtype = ?, unitiimgurl = ?, where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitimgname, $unitimgtype, $unitimgurl, $unitid));
		$db = null;
	}
	
	function update_unit_unitfinishes1($unitid, $unitfinishes1)
	{
		$db = site_db();
		$sql = "update units set unitfinishes1 = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitfinishes1, $unitid));
		$db = null;
	}
	
	function update_unit_unitfinishes2($unitid, $unitfinishes2)
	{
		$db = site_db();
		$sql = "update units set unitfinishes2 = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitfinishes2, $unitid));
		$db = null;
	}
	
	function update_unit_unitfinishes3($unitid, $unitfinishes3)
	{
		$db = site_db();
		$sql = "update units set unitfinishes3 = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitfinishes3, $unitid));
		$db = null;
	}
	
	function update_unit_unitfinishes4($unitid, $unitfinishes4)
	{
		$db = site_db();
		$sql = "update units set unitfinishes4 = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitfinishes4, $unitid));
		$db = null;
	}
	
	function update_unit_unitfinishes5($unitid, $unitfinishes5)
	{
		$db = site_db();
		$sql = "update units set unitfinishes5 = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitfinishes5, $unitid));
		$db = null;
	}
	
	function update_unit_unitstatus($unitid, $unitstatus)
	{
		$db = site_db();
		$sql = "update units set unitstatus = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($unitstatus, $unitid));
		$db = null;
	}
	
	function delete_unit($unitid)
	{
		$db = site_db();
		$sql = "update units set unitstatus = ? where unitid = ?";
		$st = $db->prepare($sql);
		$st->execute(array(0,$unitid));
		$db = null;
	}

	function add_amenity($amenityname)
	{
		$db = site_db();
		$sql = "insert into amenities (amenityname, amenitystatus) values (?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($amenityname, 1));
		$db = null;
    }
	
	function get_amenities()
	{
		$db = site_db();
		$sql = "select * from amenities where amenitystatus = ?";
		$st = $db->prepare($sql);
		$st->execute(array(1));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function get_update_amenities()
	{
		$db = site_db();
		$sql = "select * from amenities";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	//add broker
	function add_brokers($broker_username, $broker_password, $broker_name, $broker_contact, $broker_email, $broker_status)
	{
		$db = site_db();
		$sql = "insert into users(username, password, name, contact, email, status) values (?, ?, ?, ?, ?, ?)";
		$st = $db->prepare($sql);
		$st->execute(array($broker_username, $broker_password, $broker_name, $broker_contact, $broker_email, 1));
		
		$db = null;
	}
	
	function view_brokers()
	{
		$db = site_db();
		$sql = "select * from users";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function view_broker_profile($userid)
	{
		$db = site_db();
		$sql = "select * from users where id = ?";
		$st = $db->prepare($sql);
		$st->execute(array($userid));
		$row = $st->fetch();
		$db = null;
		
		return $row;
	}
	
	//delete broker
	function del_get_brokers()
	{
		$db = site_db();
		$sql = "select id, username, password, name, contact, email, status from users where status = 1 order by name asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
  
    function add_feature($featurename)
	{
		$db = site_db();
		$sql = "insert into features (featurename, featurestatus) values (?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($featurename, 1));
		$db = null;
	}
	
    function get_features()
	{
		$db = site_db();
		$sql = "select * from features where featurestatus = ?";
		$st = $db->prepare($sql);
		$st->execute(array(1));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
    } 
	
	function get_update_features()
	{
		$db = site_db();
		$sql = "select * from features";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
    } 

	function delete_brokers($id)
	{
		$db = site_db();
		$sql = "update users set status = 0 where id = ?";
		$st = $db->prepare($sql);
		$st->execute(array($id));
		$db = null;
	}
	//update broker
	function upd_get_brokers()
	{
		$db = site_db();
		$sql = "select id, username, password, name, contact, email, status from users order by name asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	 function update_brokers($brokerid, $brokerusername, $brokerpassword, $brokername, $brokercontact, $brokeremail, $brokerstatus)
	{
		if($brokerusername != '')
			update_broker_username($brokerid, $brokerusername);
		if($brokerpassword != '')
			update_broker_password($brokerid, $brokerpassword);
		if($brokername != '')
			update_broker_name($brokerid, $brokername);
		if($brokercontact != '')
			update_broker_contact($brokerid, $brokercontact);
		if($brokeremail != '')
			update_broker_email($brokerid, $brokeremail);
		if($brokerstatus != '')
			update_broker_status($brokerid, $brokerstatus);
		
	}
	
	function update_broker_name($brokerid, $brokername)
	{
		$db = site_db();
		$sql = "update users set name = ? where id = ?";
		$st = $db->prepare($sql);
		$st->execute(array($brokername, $brokerid));
		$db = null;
	}
	
	function update_broker_username($brokerid, $brokerusername)
	{
		$db = site_db();
		$sql = "update users set username = ? where id = ?";
		$st = $db->prepare($sql);
		$st->execute(array($brokerusername, $brokerid));
		$db = null;
	}
	
	function update_broker_password($brokerid, $brokerpassword)
	{
		$db = site_db();
		$sql = "update users set password = ? where id = ?";
		$st = $db->prepare($sql);
		$st->execute(array($brokerpassword, $brokerid));
		$db = null;
	}
	
	function update_broker_contact($brokerid, $brokercontact)
	{
		$db = site_db();
		$sql = "update users set contact = ? where id = ?";
		$st = $db->prepare($sql);
		$st->execute(array($brokercontact, $brokerid));
		$db = null;
	}
	
	function update_broker_email($brokerid, $brokeremail)
	{
		$db = site_db();
		$sql = "update users set email = ? where id = ?";
		$st = $db->prepare($sql);
		$st->execute(array($brokeremail, $brokerid));
		$db = null;
	}
	
	function update_broker_status($brokerid, $brokerstatus)
	{
		$db = site_db();
		$sql = "update users set status = ? where id = ?";
		$st = $db->prepare($sql);
		$st->execute(array($brokerstatus, $brokerid));
		$db = null;
	}
  
	function update_finishes($finishesname, $finishesid, $finishesstatus)
	{
		if($finishesname != '')
			update_finishes_name($finishesname, $finishesid);
		if($finishesstatus != '')
			update_finishes_status($finishesstatus, $finishesid);
	}
	
	function update_finishes_name($finishesname, $finishesid)
	{
		$db = site_db();
		$sql = "update finishes set finishesname = ? where finishesid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($finishesname, $finishesid));
		$db = null;
	}
	
	function update_finishes_status($finishesstatus, $finishesid)
	{
		$db = site_db();
		$sql = "update finishes set finishesstatus = ? where finishesid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($finishesstatus, $finishesid));
		$db = null;
	}

    function update_features($featurename, $featureid, $featurestatus)
	{
		if($featurename != '')
			update_features_name($featurename, $featureid);
	    if($featurestatus != '')
			update_features_status($featurestatus, $featureid);
	}
	
	function update_features_name($featurename, $featureid)
	{
		$db = site_db();
		$sql = "update features set featurename = ? where featureid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($featurename, $featureid));
		$db = null;
	}
  
	function update_features_status($featurestatus, $featureid)
	{
		$db = site_db();
		$sql = "update features set featurestatus = ? where featureid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($featurestatus, $featureid));
		$db = null;
	}
  
	function update_amenities($amenityname, $amenityid, $amenitystatus)
	{
		if($amenityname != '')
			update_amenities_name($amenityname, $amenityid);
		if($amenitystatus != '')
			update_amenities_status($amenitystatus, $amenityid);
	}
  
	function update_amenities_name($amenityname, $amenityid)
	{
		$db = site_db();
		$sql = "update amenities set amenityname = ? where amenityid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($amenityname, $amenityid));
		$db = null;
	}
	
	function update_amenities_status($amenitystatus, $amenityid)
	{
		$db = site_db();
		$sql = "update amenities set amenitystatus = ? where amenityid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($amenitystatus, $amenityid));
		$db = null;
	}
  
	function del_finishes($finishesid)
	{
		$db = site_db();
		$sql = "update finishes set finishesstatus = ? where finishesid = ?";
		$st = $db->prepare($sql);
		$st->execute(array(0, $finishesid));
		$db = null;
	}
  
	function del_feature($featureid)
	{
		$db = site_db();
		$sql = "update features set featurestatus = ? where featureid = ?";
		$st = $db->prepare($sql);
		$st->execute(array(0, $featureid));
		$db = null;
	}
  
	function del_amenity($amenityid)
	{
		$db = site_db();
		$sql = "update amenities set amenitystatus = ? where amenityid = ?";
		$st = $db->prepare($sql);
		$st->execute(array(0, $amenityid));
		$db = null;
	}

	function login($username, $password)
	{
		$db = site_db();
		$sql = "select * from users where username = ?";
		$st = $db->prepare($sql);
		$st->execute(array($username));
		$row = $st->fetch();
		$db = null;
		
		if($row['password'] == $password && $row['username'] == 'admin')
		{
			$_SESSION['userid'] = $row['id'];
			$_SESSION['isloginadmin'] = true;
			$_SESSION['isloginbroker'] = true;
			return true;
		}
		else if($row['password'] == $password && $row['username'] != 'admin')
		{
			$_SESSION['userid'] = $row['id'];
			$_SESSION['isloginbroker'] = true;
			return true;
		}
		else
		{
			$_SESSION['isloginadmin'] = false;
			$_SESSION['isloginbroker'] = false;
			return false;
		}
	}
	
	function logout()
	{
		session_unset();
		session_destroy();
		session_regenerate_id();
	}
	
	function get_active_users()
	{
		$db = site_db();
		$sql = "select * from users where status=?";
		$st = $db->prepare($sql);
		$st->execute(array(1));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
  
   function send_message($sender, $senderemail, $recipient, $message)
   {
      $db = site_db();
      $sql = "insert into messages (sender, senderemail, recipient, message, viewed, messagestatus) values (?,?,?,?,?,?)";
      $st = $db->prepare($sql);
      $st->execute(array($sender, $senderemail, $recipient, $message, 0, 1));
      $db = null;
   }

