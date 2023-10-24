<?php
class Funcao{
    private $id;
    private $funcao;
    private $secretaria;
    private $turnoId;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of funcao
     */ 
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * Set the value of funcao
     *
     * @return  self
     */ 
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }

    /**
     * Get the value of secretaria
     */ 
    public function getSecretaria()
    {
        return $this->secretaria;
    }

    /**
     * Set the value of secretaria
     *
     * @return  self
     */ 
    public function setSecretaria($secretaria)
    {
        $this->secretaria = $secretaria;

        return $this;
    }

    /**
     * Get the value of turnoId
     */ 
    public function getTurnoId()
    {
        return $this->turnoId;
    }

    /**
     * Set the value of turnoId
     *
     * @return  self
     */ 
    public function setTurnoId($turnoId)
    {
        $this->turnoId = $turnoId;

        return $this;
    }
}