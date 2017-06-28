<?php

$request = Symfony\HttpFoundation\Request::createFromGlobals();
$server = new Mrrootcze\Core\Server();

try
{
	$response = $server->execute($request);
}
catch(\Throwable $ex)
{
	$response = new Symfony\HttpFoundation\Response(500, $ex->getMessage());
}
