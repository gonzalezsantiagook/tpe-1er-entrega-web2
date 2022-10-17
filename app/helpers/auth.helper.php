<?php

class authHelper {

    /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     * lo voy a llamar antes de querer modificar algo como administrador para evitar que me hardcodeen la url y puedan acceder sin logearse.
     */
    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    } 
}