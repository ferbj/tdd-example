<?php

/*
 * Creen una clase REAL de Autenticación.
 *
 * 1. Registrar Usuarios - username, password, email.
 * 2. Hash Password - Blowfish / Bcrypt (password_hash).
 * 3. Iniciar Sesion - email, password.
 */
use Src\controllers\UserAuth;

use \PHPUnit\Framework\TestCase;

class UserAuthTest extends TestCase{
    /**
     * @test
     * @dataProvider usersProviders
     */
    public function registrar_usuarios($username, $password, $email, $expected): void
    {   
        $user = new UserAuth($username,$password,$email);
        $result = $user->register();
        $this->assertEquals($expected, $result);
    }

    public function usersProviders(): array
    {
          return [
                ['pepito', '123456','pepito@gmail.com',true],
                ['juanb', '123456','juanb@gmail.com',true],
                ['lospalotes','123456','lospalotes@gmail.com',true],
                ['marcopolo','123456','marcopolo@hotmail.com',true],
            ];

    }

    /**
     * @test
     * @dataProvider userLogin
     */
    public function login_user($username, $password, $expected): void
    {
        $loguser =  new UserAuth($username,$password);
        $result = $loguser->login();
        $this->assertEquals($expected, $result);
    }

    public function userLogin(): array
    {
        return [
            ['pepito', '123456', true]
        ];
    }
    
}
