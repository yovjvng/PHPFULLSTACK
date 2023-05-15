<?php

namespace application\model;

class UserModel extends Model{
    public function getUser($arrUserInfo) {
        $sql = " select * FROM user_info WHERE u_id = :id and u_pw = :pw ";
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
        ];
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel->getUser Error : ".$e->getmessage();
            exit();
        } finally {
            $this->closeConn();
        }
        return $result;
    }

    public function PostUser($arrUserInsert) {
        $sql = " INSERT INTO user_info ( u_id, u_pw ) VALUES ( :id, :pw ) ";
        $prepare = [
            ":id" => $arrUserInsert["id"]
            ,":pw" => $arrUserInsert["pw"]
        ];
        try {
            $conn->beginTransaction();
            $stmt = $conn->prepare( $sql );
            $stmt->execute( $arr_prepare );
            $result = $stmt->rowCount();
            $conn->commit();
        } 
        catch ( Exception $e ) {
            echo "UserModel->getUser Error : ".$e->getmessage();
            exit();
        } 
        finally {
            $this->closeConn();
        }
        return $result;
    }

}

?>