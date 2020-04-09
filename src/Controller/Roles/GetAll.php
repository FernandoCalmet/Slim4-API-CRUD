<?php

declare(strict_types=1);

namespace App\Controller\Roles;

use Slim\Http\Request;
use Slim\Http\Response;

class GetAll extends Base
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $input = $request->getParsedBody();
        $roles = $this->getRolesService()->getAll();

        return $this->jsonResponse($response, 'success', $roles, 200);
    }
}
