<?php

namespace DAO;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Entity\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * Description of UserDAO
 *
 * @author eric
 */

class AdminDAO extends UserDAO
{
    protected $tablename = 'user';
    //put your code here
    
    public function __construct (\PDO $db) 
    {
        parent::__construct($db, 'user');
        $this->entityClassName = '\Entity\User';
    }
    public function loadUserByUsername($username)
    {
        //select * from user where username = ? LIMIT 1 (et le résultat est converti en entité)
        // bindvalue(1, $username)
        $user = $this->findOne(array(
            'username = ?' => $username,
            'role LIKE ?' => "%ROLE_ADMIN%"
                )); //findOne est une méthode fournie par simpledao
            
        if (! $user) {
                throw new UsernameNotFoundException("User with username $username does not exist");
            }
        
            return $user;
    }

    
}
