<?php
class Mensagem{
    private $id;
    private $mensagem;
    private $tipoMensagem;
    private $permicao;
    private $idImagem;
    private $idDestinatario;
    private $created;
    private $updated;

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
     * Get the value of mensagem
     */ 
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * Set the value of mensagem
     *
     * @return  self
     */ 
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

        return $this;
    }

    /**
     * Get the value of tipoMensagem
     */ 
    public function getTipoMensagem()
    {
        return $this->tipoMensagem;
    }

    /**
     * Set the value of tipoMensagem
     *
     * @return  self
     */ 
    public function setTipoMensagem($tipoMensagem)
    {
        $this->tipoMensagem = $tipoMensagem;

        return $this;
    }

    /**
     * Get the value of permicao
     */ 
    public function getPermicao()
    {
        return $this->permicao;
    }

    /**
     * Set the value of permicao
     *
     * @return  self
     */ 
    public function setPermicao($permicao)
    {
        $this->permicao = $permicao;

        return $this;
    }

    /**
     * Get the value of idImagem
     */ 
    public function getIdImagem()
    {
        return $this->idImagem;
    }

    /**
     * Set the value of idImagem
     *
     * @return  self
     */ 
    public function setIdImagem($idImagem)
    {
        $this->idImagem = $idImagem;

        return $this;
    }

    /**
     * Get the value of idDestinatario
     */ 
    public function getIdDestinatario()
    {
        return $this->idDestinatario;
    }

    /**
     * Set the value of idDestinatario
     *
     * @return  self
     */ 
    public function setIdDestinatario($idDestinatario)
    {
        $this->idDestinatario = $idDestinatario;

        return $this;
    }

    /**
     * Get the value of created
     */ 
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @return  self
     */ 
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of updated
     */ 
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set the value of updated
     *
     * @return  self
     */ 
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }
}