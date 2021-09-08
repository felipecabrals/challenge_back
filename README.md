<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD de Usuários com Autenticação JWT

Desenvolvido com a v.8 do Laravel, um crud basico de usuario com o uso do JWT

### :zap: Rotina
``` Bash
- create base mysql 
    
- Copy ".env.example" to ".env"

- composer install
    
- php artisan migrate --seed
  
- php artisan key:generate

- php artisan jwt:secret
    
- php artisan serve
```

### :dart: Endpoints
<h6>Todos os usuários</h6>

``` Bash
GET api/users
```
<h6>Registrar um usuários</h6>

``` Bash
GET api/register
```
<h6>Editar um usuários</h6>

``` Bash
GET api/update/{id}
```
<h6>Ver um usuários</h6>

``` Bash
GET api/show/{id}
```
<h6>Excluir um usuários</h6>

``` Bash
GET api/destroy/{id}
```
<h6>Entrar</h6>

``` Bash
GET api/auth/login
```
<h6>Sair</h6>

``` Bash
GET api/auth/logout
```

### :trophy: Usuário Padrão
``` Bash
usuario: admin@gmail.com
senha: password
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
