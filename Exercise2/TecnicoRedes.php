<?php

include 'Informatico.php';
class TecnicoRedes extends Informatico {
    private $auditarRedes, $experienciaRedes;

    public function __construct($auditarRedes, $experienciaRedes) {
        $this->auditarRedes = $auditarRedes;
        $this->experienciaRedes = $experienciaRedes;
    }
    
    public function setAuditarRedes($auditarRedes) {
        $this->auditarRedes = $auditarRedes;
    }

    public function getAuditarRedes() {
        return $this->auditarRedes;
    }

    public function setExperienciaRedes($experienciaRedes) {
        $this->experienciaRedes = $experienciaRedes;
    }

    public function getExperienciaRedes() {
        return $this->experienciaRedes;
    }
 
    public function auditaRedes() {
        return $this->auditarRedes - $this->experienciaRedes;
    }
}