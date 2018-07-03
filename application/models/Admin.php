<?php

namespace application\models;

use application\core\Model;

class Admin extends Model
{
    public $error;
    
    public function loginValidate($post)
    {
        $config = require 'application/config/admin.php';
        if($config['login'] != $post['login'] or $config['password'] != $post['password']) {
            $this->error = 'Login or password incorrect';
            return false;
        }
        return true;
    }
    
    public function postValidate($post, $type)
    {
        $nameLen = iconv_strlen($post['name']);
        $textLen = iconv_strlen($post['text']);
        if(empty($nameLen)) {
            $this->error = 'Название не должно быть пустым';
            return false;
        }
        return true;
    }
    
    public function postAdd($post)
    {
        $params = [
          'name' => $post['name'],
          'text' => $post['text'],
          'date' => date('Y-m-d'),
          'views' => 0,
        ];
        $this->db->query('INSERT INTO posts (name, text, date, views) VALUES (:name, :text, :date, :views)', $params);
        return $this->db->lastInsertId();
    }
    
    public function postUploadImage($path, $id)
    {
        move_uploaded_file($path, 'public/materials/'.$id.'.jpg');
    }
    
    public function isPostExists($id)
    {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
    }
    
    public function postDelete($id)
    {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE FROM posts WHERE id = :id', $params);
        unlink('public/materials/'.$id.'.jpg');
    }
    
    public function postData($id)
    {
        $params = [
          'id' => $id,  
        ];
        $this->db->query('UPDATE posts SET views = views + 1 WHERE id = :id', $params);
        return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
    }
    
    public function postEdit($post, $id)
    {
       $params = [
          'id' => $id,   
          'name' => $post['name'],
          'text' => $post['text'],
        ];
        $this->db->query('UPDATE posts SET name = :name, text = :text WHERE id = :id', $params);
    }
}
