<?php
/**
 * Weave Laminas PSR7 Adaptor Emitter.
 */

namespace Weave\Emitter\Laminas;

use Psr\Http\Message\ResponseInterface as Response;

/**
 * Weave Laminas Emitter Adaptor.
 */
class ResponseEmitter implements \Weave\Http\ResponseEmitterInterface
{
	/**
	 * Output to the client the contents of the provided PSR7 Response object.
	 *
	 * @param Response $response The response object to emit to the client.
	 *
	 * @return null
	 */
	public function emit(Response $response)
	{
		$emitter = new \Laminas\HttpHandlerRunner\Emitter\SapiEmitter();
		$emitter->emit($response);
	}
}
