<?php
class Hotel extends Db
{
    public function add_hotel($hotelName,$h_img, $hotelAddress,$hotelManager,$hotelContact,$conditon,$hotelrent,$hotelTime,$hotelLongitude,$hotelLatitude, $tkn)
    {
        $im = $this->image($h_img);
        if ($im == 10) {
            $this->error = 'Image couldnt upload!';
        }
        $data = array($hotelName,$im,$hotelAddress,$hotelManager,$hotelContact,$conditon,$hotelrent,$hotelTime,$hotelLongitude,$hotelLatitude);
        $this->query = $this->handeller->prepare("INSERT INTO `accommodation` (`hotel_name`,`hotel_image`,`hotel_address`,`hotel_manager`,`hotel_contact`,`hotel_condition`,`hotel_rent`,`hotel_rent_time`,`longitude`,`latitude`)VALUES(?, ?, ?, ?, ?,?, ?,?,?,?) ");
        if ($this->query->execute($data)) {
            return $this->url_return(array('hotel.php', 'hotel added', 'success', $tkn));
        } else {
            return $this->url_return(array('add_hotel.php' . $this->error, 'hotel not added ', 'error', $tkn));
        }
    }

    public function hotel_list()
    {
        $return = array();
        $this->arrays = $this->handeller->query("SELECT * FROM `accommodation`");
        foreach ($this->arrays as $us) {
            $p = array();
            $p['id'] = $us['hotel_id'];
            $p['name'] = $us['hotel_name'];
            $p['img'] = $us['hotel_image'];
            $p['address'] = $us['hotel_address'];
            $p['manager'] = $us['hotel_manager'];
            $p['contact'] = $us['hotel_contact'];
            $p['condition'] = $us['hotel_condition'];
            $p['rent'] = $us['hotel_rent'];
            $p['rent_time'] = $us['hotel_rent_time'];
            $p['longitude'] = $us['longitude'];
            $p['latitude'] = $us['latitude'];
            array_push($return, $p);
        }
        return $return;
    }


    public function delete_hotel($tkn)
    {
        foreach ($_POST['check_list'] as $check) {
            $this->arrays3 = $this->handeller->query("SELECT * FROM `accommodation` WHERE hotel_id ='$check'");
            $this->arrays = $this->handeller->prepare("DELETE FROM `accommodation` WHERE hotel_id = ? ");
            if ($this->arrays->execute(array($check))) {
                $this->url_return(array('hotel.php', 'Hotel has been Deleted', 'success', $tkn));
            } else {
                return $this->url_return(array('hotel.php' . $this->error, 'Hotel not Deleted ', 'error', $tkn));
            }
        }

    }

    public function update_show_hotel($h_id)
    {
        $return = array();
        $hotel = $this->handeller->query("SELECT * FROM `accommodation` WHERE `hotel_id` = '$h_id'");
        foreach ($hotel as $us) {
            $p = array();
            $p['id'] = $us['hotel_id'];
            $p['name'] = $us['hotel_name'];
            $p['img'] = $us['hotel_image'];
            $p['address'] = $us['hotel_address'];
            $p['manager'] = $us['hotel_manager'];
            $p['contact'] = $us['hotel_contact'];
            $p['condition'] = $us['hotel_condition'];
            $p['rent'] = $us['hotel_rent'];
            $p['rent_time'] = $us['hotel_rent_time'];
            $p['longitude'] = $us['longitude'];
            $p['latitude'] = $us['latitude'];
            array_push($return, $p);
        }

        return $return;
    }

    public function hotel_update($hotelName,$ie,$hide_img, $hotelAddress,$hotelManager,$hotelContact,$hotelrent,$hotelTime,$hotelLongitude,$hotelLatitude,$h_id,$tkn )
    {
        if ($_FILES[$ie]["size"] == 0) {
            $h_im = $hide_img;
        } else {
            $h_im = $this->image($ie);
            if ($h_im == 10) {
                $this->error = 'Image couldnt upload!';
            }
        }
        $data = array($hotelName,$h_im,$hotelAddress,$hotelManager,$hotelContact,$hotelrent,$hotelTime,$hotelLongitude,$hotelLatitude,$h_id);

        $this->query = $this->handeller->prepare("UPDATE `accommodation` SET `hotel_name` = ?,`hotel_image` = ?,`hotel_address` = ?,`hotel_manager` = ?, `hotel_contact` = ?,`hotel_rent` = ?,`hotel_rent_time` = ?, `longitude` = ?, `latitude` = ?    WHERE `hotel_id` = ?");

        if ($this->query->execute($data) && $h_im != 10) {
            return $this->url_return(array('hotel.php', 'Your hotel information has been updated', 'success', $tkn));
        } else {
            return $this->url_return(array('hotel.php', 'Your hotel information not updated ' . $this->error, 'error', $tkn));
        }
    }

}

?>