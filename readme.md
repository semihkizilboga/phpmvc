Setup:

<pre>$ composer install</pre>

<hr />

Router System:

https://github.com/izniburak/php-router

<pre>
$router->get('/','home@index'); 
$router->any('/login','auth@login',true); // any = get/post
$router->any('/register','auth@register');
</pre>

<hr />

Views:

<pre>
$this->view('auth/login');
$this->view('homepage');
</pre>

</hr>

Models:

<pre>
$user = $this->model('user_model');
$user->getAll();
</pre>
