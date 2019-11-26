<?php

declare(strict_types=1);

namespace App\Controller;

use App\Crawler\Aukro\AukroApiDataProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test")
 */
class TestController extends AbstractController
{
	/**
	 * @Route("/")
	 */
	public function index(Request $request, AukroApiDataProvider $aukroApiDataProvider): Response
	{
		$result = $aukroApiDataProvider->apiRequest(
			$aukroApiDataProvider->getQuery(),
			$aukroApiDataProvider->getPayload()
		);

		dump($result);

		return $this->render('test/index.html.twig', [
			//            'articles' => $this->advisoryRepository->findAll(),
		]);
	}
}
