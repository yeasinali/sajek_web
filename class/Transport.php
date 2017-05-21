<?php
class Transport extends Db
{

    public function add_transport($transportName, $transportPlase, $transportTime, $tansportRent, $tansportMobile, $ie, $tkn)
    {
        $im = $this->image($ie);
        if ($im == 10) {
            $this->error = 'Image couldnt upload!';
        }
        $data = array($transportName, $im, $transportPlase, $transportTime, $tansportRent, $tansportMobile);
        $this->query = $this->handeller->prepare("INSERT INTO `transports` ( `tansport_name`, `tansport_img`, `tansport_place`, `tansport_time`, `tansport_rent`, `tansport_mobile`)VALUES(?, ?, ?, ?, ?, ?) ");
        if ($this->query->execute($data)) {
            return $this->url_return(array('transport.php', 'information added', 'success', $tkn));
        } else {
            return $this->url_return(array('add_transport.php' . $this->error, 'transport not added ', 'error', $tkn));
        }
    }

    public function transport_list()
    {
        $return = array();
        $this->arrays = $this->handeller->query("SELECT * FROM `transports`");
        foreach ($this->arrays as $us) {
            $p = array();
            $p['id'] = $us['tansport_id'];
            $p['name'] = $us['tansport_name'];
            $p['img'] = $us['tansport_img'];
            $p['place'] = $us['tansport_place'];
            $p['time'] = $us['tansport_time'];
            $p['rent'] = $us['tansport_rent'];
            $p['mobile'] = $us['tansport_mobile'];
            array_push($return, $p);
        }
        return $return;
    }


    public function delete_transport($tkn)
    {
        foreach ($_POST['check_list'] as $check) {
            $this->arrays3 = $this->handeller->query("SELECT * FROM `transports` WHERE tansport_id ='$check'");
            $this->arrays = $this->handeller->prepare("DELETE FROM `transports` WHERE tansport_id = ? ");
            if ($this->arrays->execute(array($check))) {
                $this->url_return(array('transport.php', 'Transport has been Deleted', 'success', $tkn));
            } else {
                return $this->url_return(array('transport.php' . $this->error, 'transport not Deleted ', 'error', $tkn));
            }
        }

    }

    public function update_show_transport($t_id)
    {
        $return = array();
        $transports = $this->handeller->query("SELECT * FROM `transports` WHERE `tansport_id` = '$t_id'");
        foreach ($transports as $tp) {
            $p = array();
            $p['id'] = $tp['tansport_id'];
            $p['name'] = $tp['tansport_name'];
            $p['img'] = $tp['tansport_img'];
            $p['place'] = $tp['tansport_place'];
            $p['time'] = $tp['tansport_time'];
            $p['rent'] = $tp['tansport_rent'];
            $p['mobile'] = $tp['tansport_mobile'];
            array_push($return, $p);
        }

        return $return;
    }

    public function transport_update($transportName, $transportPlase, $transportTime, $tansportRent, $tansportMobile, $ie, $h_img, $transport_id, $tkn)
    {
        if ($_FILES[$ie]["size"] == 0) {
            $t_im = $h_img;
        } else {
            $t_im = $this->image($ie);
            if ($t_im == 10) {
                $this->error = 'Image couldnt upload!';
            }
        }
        $data = array($transportName, $t_im, $transportPlase, $transportTime, $tansportRent, $tansportMobile, $transport_id);

        $this->query = $this->handeller->prepare("UPDATE `transports` SET `tansport_name` = ? ,`tansport_img` = ? ,`tansport_place` = ?,`tansport_time` = ?,`tansport_rent` = ? ,`tansport_mobile` = ?  WHERE `tansport_id` = ?");

        if ($this->query->execute($data) && $t_im != 10) {
            return $this->url_return(array('transport.php', 'Your transport has been updated', 'success', $tkn));
        } else {
            return $this->url_return(array('transport.php', 'Your transport not updated ' . $this->error, 'error', $tkn));
        }
    }

}

?>