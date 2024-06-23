<?php 

    class User {
        
        public $codigo_cliente;
        public $usuario;
        public $nome_cliente;
        public $senha_cliente;
        public $token;
        public $admin_id_admin;

    }

    interface UserDAOInterface {

        public function buildUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($usuario, $senha_cliente);
        public function findByUsuario($usuario);
        public function findById($codigo_cliente);
        public function findByToken($token);
        public function changePassword(User $user);
    }
