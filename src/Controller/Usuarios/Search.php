<?php declare(strict_types=1);

namespace App\Controller\Usuarios;

use Slim\Http\Request;
use Slim\Http\Response;

class Search extends Base
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $usuarios = $this->getUsuariosService()->search($args['query']);

        return $this->jsonResponse($response, 'success', $usuarios, 200);
    }
}
