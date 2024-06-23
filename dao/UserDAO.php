<?php 

    include_once("models/User.php");

    class UserDAO implements UserDAOInterface {

        private $connection;
        private $url;

        public function __construct(PDO $connection, $url) {
            $this->connection = $connection;
            $this->url = $url;
        }
    
        public function buildUser($data) {

            $user = new User();

            $user->codigo_cliente = $data["codigo_cliente"];
            $user->usuario = $data["usuario"];
            $user->nome_cliente = $data["nome_cliente"];
            $user->senha_cliente = $data["senha_cliente"];
            $user->token = $data["token"];
            $user->admin_id_admin = $data["admin_id_admin"];

            return $user;

        }
        public function create(User $user, $authUser = false) {

        }
        public function update(User $user) {

        }
        public function verifyToken($protected = false) {

        }
        public function setTokenToSession($token, $redirect = true) {

        }
        public function authenticateUser($usuario, $senha_cliente) {

        }
        public function findByUsuario($usuario) {

        }
        public function findById($codigo_cliente) {

        }
        public function findByToken($token) {

        }
        public function changePassword(User $user) {

        }
    }
