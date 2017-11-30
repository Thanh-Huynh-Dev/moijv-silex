<?php

namespace Entity;

/**
 * Description of loaning
 *
 * @author Etudiant
 */
class Loaning {
    /**
     * id of the loaning
     * @var int
     */
    private $id;
    /**
     * start of the loaning
     * @var \Datetime
     */
    private $dateStart;
    /**
     * end of the loaning
     * @var \Datetime
     */
    private $dateEnd;
    /**
     * id of the game
     * @var \Entity\Game
     */
    private $game;
    /**
     * id of the owner
     * @var \Entity\User
     */
    private $user;
    
    public function getId() {
        return $this->id;
    }

    public function getDateStart() {
        return $this->dateStart;
    }

    public function getDateEnd() {
        return $this->dateEnd;
    }

    public function getGame() {
        return $this->game;
    }

    public function getUser() {
        return $this->user;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDateStart($dateStart) {
        if($dateStart instanceof string){
            $dateStart = \DateTime::createFromFormat('Y/m/d', $dateStart);
        }
        $this->dateStart = $dateStart;
    }

    public function setDateEnd($dateEnd) {
        if($dateEnd instanceof string){
            $dateEnd = \DateTime::createFromFormat('Y/m/d', $dateEnd);
        }
        $this->dateEnd = $dateEnd;
    }

    public function setGame(\Entity\Game $game) {
        $this->game = $game;
    }

    public function setUser(\Entity\User $user) {
        $this->user = $user;
    }




}
