<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DAO;

/**
 * Description of AdminDAO
 *
 * @author Etudiant
 */
class AdminDAO extends UserDAO
{
    protected $tableName = 'user';


    public function loadUserByUsername($username)
    {
        // SELECT * FROM user WHERE username = ? LIMIT 1
        // bindValue(1, $username)
       
        $user = $this->findOne(array(
            
            'username = ?' => $username,
            'role LIKE ?' => "%ROLE_ADMIN%"
        ));
        if( ! $user){
            throw new UsernameNotFoundException("User with username $username does not exist");
        }
        return $user;
    }

  
 
    }
