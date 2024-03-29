<?php

declare(strict_types=1);

namespace App\Controller;

use App\Crawler\Aukro\AukroApiDataProvider;
use App\Crawler\Aukro\AukroCrawler;
use App\Crawler\Aukro\AukroOfferDataMapper;
use App\Entity\Brand;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
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
	public function index(
		Request $request,
		AukroApiDataProvider $aukroApiDataProvider,
		AukroOfferDataMapper $aukroOfferDataMapper
	): Response {
		$result = $aukroApiDataProvider->apiRequest(
			$aukroApiDataProvider->getQuery(),
			$aukroApiDataProvider->getPayload()
		);

		dump($result['content'][0]);

		$aukroOfferDataMapper->setData($result['content'][0]);

		dump($aukroOfferDataMapper);

		return $this->render('test/index.html.twig', [
			//            'articles' => $this->advisoryRepository->findAll(),
		]);
	}

	/**
	 * @Route("/date")
	 */
	public function date(Request $request, AukroApiDataProvider $aukroApiDataProvider): Response
	{
		dump(
			DateTimeImmutable::createFromFormat('Y-m-d\TH:i:s.uT', '2019-11-26T11:17:03.409Z')
		);

		return $this->render('test/index.html.twig', [
			//            'articles' => $this->advisoryRepository->findAll(),
		]);
	}

	/**
	 * @Route("/crawler")
	 */
	public function crawler(Request $request, AukroCrawler $aukroCrawler): Response
	{
		$aukroCrawler->prepare();

		foreach ($aukroCrawler->getElement() as $data) {
			dump($data);

			break;
		}

		return $this->render('test/index.html.twig', [
			//            'articles' => $this->advisoryRepository->findAll(),
		]);
	}

	/**
	 * @Route("/import/brand/")
	 */
	public function importBrand(Request $request, EntityManagerInterface $entityManager): Response
	{
		// Heureka Data
		$data = '[{"value":"Author","parametrId":4269,"count":521,"valueId":25266,"selected":false,"plus":0},{"value":"Superior","parametrId":4269,"count":335,"valueId":105846,"selected":false,"plus":0},{"value":"GT","parametrId":4269,"count":271,"valueId":25417,"selected":false,"plus":0},{"value":"Rock Machine","parametrId":4269,"count":370,"valueId":25410,"selected":false,"plus":0},{"value":"Kellys","parametrId":4269,"count":454,"valueId":25826,"selected":false,"plus":0},{"value":"Specialized","parametrId":4269,"count":728,"valueId":25337,"selected":false,"plus":0},{"value":"Scott","parametrId":4269,"count":540,"valueId":25284,"selected":false,"plus":0},{"value":"Leader Fox","parametrId":4269,"count":240,"valueId":25258,"selected":false,"plus":0},{"value":"Trek","parametrId":4269,"count":326,"valueId":25420,"selected":false,"plus":0},{"value":"CTM","parametrId":4269,"count":291,"valueId":516281,"selected":false,"plus":0},{"value":"Merida","parametrId":4269,"count":349,"valueId":25324,"selected":false,"plus":0},{"value":"Ghost","parametrId":4269,"count":500,"valueId":26937,"selected":false,"plus":0},{"value":"Cannondale","parametrId":4269,"count":484,"valueId":26879,"selected":false,"plus":0},{"value":"Giant","parametrId":4269,"count":449,"valueId":25296,"selected":false,"plus":0},{"value":"Cube","parametrId":4269,"count":376,"valueId":803542,"selected":false,"plus":0},{"value":"Kross","parametrId":4269,"count":412,"valueId":652778,"selected":false,"plus":0},{"value":"Orbea","parametrId":4269,"count":276,"valueId":176689,"selected":false,"plus":0},{"value":"4Ever","parametrId":4269,"count":229,"valueId":101662,"selected":false,"plus":0},{"value":"Mongoose","parametrId":4269,"count":68,"valueId":25332,"selected":false,"plus":0},{"value":"Focus","parametrId":4269,"count":64,"valueId":435894,"selected":false,"plus":0},{"value":"Felt","parametrId":4269,"count":224,"valueId":25926,"selected":false,"plus":0},{"value":"Lapierre","parametrId":4269,"count":379,"valueId":26558,"selected":false,"plus":0},{"value":"Olpran","parametrId":4269,"count":29,"valueId":25425,"selected":false,"plus":0},{"value":"Woom","parametrId":4269,"count":12,"valueId":22501082,"selected":false,"plus":0},{"value":"Galaxy","parametrId":4269,"count":224,"valueId":25548,"selected":false,"plus":0},{"value":"Apache","parametrId":4269,"count":100,"valueId":25262,"selected":false,"plus":0},{"value":"Mondraker","parametrId":4269,"count":108,"valueId":420957,"selected":false,"plus":0},{"value":"Acra","parametrId":4269,"count":70,"valueId":411246,"selected":false,"plus":0},{"value":"Kona","parametrId":4269,"count":53,"valueId":25418,"selected":false,"plus":0},{"value":"KTM","parametrId":4269,"count":128,"valueId":260728,"selected":false,"plus":0},{"value":"Amulet","parametrId":4269,"count":112,"valueId":25789,"selected":false,"plus":0},{"value":"BMC","parametrId":4269,"count":48,"valueId":1481174,"selected":false,"plus":0},{"value":"Dino","parametrId":4269,"count":72,"valueId":25715,"selected":false,"plus":0},{"value":"Dema","parametrId":4269,"count":144,"valueId":25312,"selected":false,"plus":0},{"value":"MMR","parametrId":4269,"count":34,"valueId":24403038,"selected":false,"plus":0},{"value":"Maxbike","parametrId":4269,"count":478,"valueId":258838,"selected":false,"plus":0},{"value":"Head","parametrId":4269,"count":89,"valueId":849624,"selected":false,"plus":0},{"value":"DHS","parametrId":4269,"count":56,"valueId":628817,"selected":false,"plus":0},{"value":"Pells","parametrId":4269,"count":85,"valueId":25499,"selected":false,"plus":0},{"value":"HaiBike","parametrId":4269,"count":119,"valueId":27308,"selected":false,"plus":0},{"value":"Marin","parametrId":4269,"count":62,"valueId":25703,"selected":false,"plus":0},{"value":"TBK","parametrId":4269,"count":24,"valueId":21252881,"selected":false,"plus":0},{"value":"Liberty","parametrId":4269,"count":107,"valueId":382177,"selected":false,"plus":0},{"value":"Romet","parametrId":4269,"count":79,"valueId":2110648,"selected":false,"plus":0},{"value":"Alpina","parametrId":4269,"count":54,"valueId":454828,"selected":false,"plus":0},{"value":"Kreativ","parametrId":4269,"count":22,"valueId":21242025,"selected":false,"plus":0},{"value":"Silverback","parametrId":4269,"count":29,"valueId":807804,"selected":false,"plus":0},{"value":"Wilier","parametrId":4269,"count":21,"valueId":21243155,"selected":false,"plus":0},{"value":"MRX","parametrId":4269,"count":136,"valueId":1213653,"selected":false,"plus":0},{"value":"Bergamont","parametrId":4269,"count":135,"valueId":27027,"selected":false,"plus":0},{"value":"Volare","parametrId":4269,"count":30,"valueId":31039260,"selected":false,"plus":0},{"value":"AREZZO","parametrId":4269,"count":10,"valueId":31396173,"selected":false,"plus":0},{"value":"Worker","parametrId":4269,"count":5,"valueId":108707,"selected":false,"plus":0},{"value":"Bianchi","parametrId":4269,"count":44,"valueId":420258,"selected":false,"plus":0},{"value":"Capriolo","parametrId":4269,"count":4,"valueId":2992560,"selected":false,"plus":0},{"value":"Stevens","parametrId":4269,"count":137,"valueId":521138,"selected":false,"plus":0},{"value":"Subrosa","parametrId":4269,"count":14,"valueId":354913,"selected":false,"plus":0},{"value":"Basso","parametrId":4269,"count":11,"valueId":24258281,"selected":false,"plus":0},{"value":"Tern","parametrId":4269,"count":33,"valueId":514180,"selected":false,"plus":0},{"value":"Reactor","parametrId":4269,"count":10,"valueId":904300,"selected":false,"plus":0},{"value":"RoyalBaby","parametrId":4269,"count":7,"valueId":22992542,"selected":false,"plus":0},{"value":"Core","parametrId":4269,"count":9,"valueId":22355541,"selected":false,"plus":0},{"value":"Rascal","parametrId":4269,"count":6,"valueId":32883130,"selected":false,"plus":0},{"value":"Early Rider","parametrId":4269,"count":26,"valueId":3669259,"selected":false,"plus":0},{"value":"Bulls","parametrId":4269,"count":35,"valueId":777360,"selected":false,"plus":0},{"value":"Santa Cruz","parametrId":4269,"count":3,"valueId":32874974,"selected":false,"plus":0},{"value":"PUKY","parametrId":4269,"count":36,"valueId":33370166,"selected":false,"plus":0},{"value":"VT-BIKE","parametrId":4269,"count":17,"valueId":1036870,"selected":false,"plus":0},{"value":"Devron","parametrId":4269,"count":36,"valueId":21239048,"selected":false,"plus":0},{"value":"CULT","parametrId":4269,"count":9,"valueId":1546522,"selected":false,"plus":0},{"value":"Conway","parametrId":4269,"count":42,"valueId":22326778,"selected":false,"plus":0},{"value":"Scud","parametrId":4269,"count":102,"valueId":21242040,"selected":false,"plus":0},{"value":"Rocky Mountain","parametrId":4269,"count":32,"valueId":197910,"selected":false,"plus":0},{"value":"Sensa","parametrId":4269,"count":2,"valueId":22393601,"selected":false,"plus":0},{"value":"MEXLLER","parametrId":4269,"count":11,"valueId":31396110,"selected":false,"plus":0},{"value":"Norco","parametrId":4269,"count":102,"valueId":278875,"selected":false,"plus":0},{"value":"Raymon","parametrId":4269,"count":47,"valueId":24313668,"selected":false,"plus":0},{"value":"Condor","parametrId":4269,"count":7,"valueId":21239047,"selected":false,"plus":0},{"value":"Winora","parametrId":4269,"count":87,"valueId":409257,"selected":false,"plus":0},{"value":"Dahon","parametrId":4269,"count":24,"valueId":25286,"selected":false,"plus":0},{"value":"Frog","parametrId":4269,"count":13,"valueId":21243150,"selected":false,"plus":0},{"value":"Wethepeople","parametrId":4269,"count":20,"valueId":201724,"selected":false,"plus":0},{"value":"BBF","parametrId":4269,"count":72,"valueId":385450,"selected":false,"plus":0},{"value":"Brompton","parametrId":4269,"count":12,"valueId":258882,"selected":false,"plus":0},{"value":"LeGrand","parametrId":4269,"count":25,"valueId":21087993,"selected":false,"plus":0},{"value":"Kozbike","parametrId":4269,"count":14,"valueId":23494084,"selected":false,"plus":0},{"value":"Schwinn","parametrId":4269,"count":11,"valueId":105853,"selected":false,"plus":0},{"value":"Tribe","parametrId":4269,"count":10,"valueId":33560569,"selected":false,"plus":0},{"value":"Anita","parametrId":4269,"count":5,"valueId":835727,"selected":false,"plus":0},{"value":"Beany","parametrId":4269,"count":4,"valueId":22417268,"selected":false,"plus":0},{"value":"Mayo","parametrId":4269,"count":29,"valueId":391972,"selected":false,"plus":0},{"value":"Sense","parametrId":4269,"count":3,"valueId":27953598,"selected":false,"plus":0},{"value":"Transition","parametrId":4269,"count":1,"valueId":422657,"selected":false,"plus":0},{"value":"FORCE","parametrId":4269,"count":10,"valueId":2060101,"selected":false,"plus":0},{"value":"TBB","parametrId":4269,"count":1,"valueId":20686873,"selected":false,"plus":0},{"value":"Sundance","parametrId":4269,"count":10,"valueId":102234,"selected":false,"plus":0},{"value":"Pashley","parametrId":4269,"count":22,"valueId":835726,"selected":false,"plus":0},{"value":"ACstar","parametrId":4269,"count":4,"valueId":25373,"selected":false,"plus":0},{"value":"Haro","parametrId":4269,"count":3,"valueId":136785,"selected":false,"plus":0},{"value":"Hanscraft","parametrId":4269,"count":1,"valueId":910224,"selected":false,"plus":0},{"value":"Salsa","parametrId":4269,"count":1,"valueId":3173860,"selected":false,"plus":0},{"value":"STORM","parametrId":4269,"count":2,"valueId":32751757,"selected":false,"plus":0},{"value":"Electra","parametrId":4269,"count":108,"valueId":197912,"selected":false,"plus":0},{"value":"Frejus","parametrId":4269,"count":1,"valueId":21432490,"selected":false,"plus":0},{"value":"Commencal","parametrId":4269,"count":5,"valueId":382099,"selected":false,"plus":0},{"value":"Hercules","parametrId":4269,"count":11,"valueId":26730,"selected":false,"plus":0},{"value":"Le Grand","parametrId":4269,"count":3,"valueId":24219691,"selected":false,"plus":0},{"value":"Insportline","parametrId":4269,"count":3,"valueId":118840,"selected":false,"plus":0},{"value":"KANDS","parametrId":4269,"count":2,"valueId":32751759,"selected":false,"plus":0},{"value":"Piranha","parametrId":4269,"count":1,"valueId":260754,"selected":false,"plus":0},{"value":"Fly Bikes","parametrId":4269,"count":10,"valueId":21744731,"selected":false,"plus":0},{"value":"Ridley","parametrId":4269,"count":4,"valueId":26820,"selected":false,"plus":0},{"value":"Monochrome","parametrId":4269,"count":6,"valueId":32159425,"selected":false,"plus":0},{"value":"Bauer","parametrId":4269,"count":1,"valueId":21557174,"selected":false,"plus":0},{"value":"Vellberg","parametrId":4269,"count":12,"valueId":31396109,"selected":false,"plus":0},{"value":"Bottecchia","parametrId":4269,"count":12,"valueId":385449,"selected":false,"plus":0},{"value":"Strida","parametrId":4269,"count":3,"valueId":1036869,"selected":false,"plus":0},{"value":"Coral","parametrId":4269,"count":4,"valueId":24669132,"selected":false,"plus":0},{"value":"Look","parametrId":4269,"count":3,"valueId":803545,"selected":false,"plus":0},{"value":"Babboe","parametrId":4269,"count":4,"valueId":21243168,"selected":false,"plus":0},{"value":"Excelsior","parametrId":4269,"count":11,"valueId":22344925,"selected":false,"plus":0},{"value":"Coppi","parametrId":4269,"count":3,"valueId":21326714,"selected":false,"plus":0},{"value":"Johnny Loco","parametrId":4269,"count":16,"valueId":5867411,"selected":false,"plus":0},{"value":"Cheetah Original","parametrId":4269,"count":4,"valueId":21542016,"selected":false,"plus":0},{"value":"Corratec","parametrId":4269,"count":3,"valueId":26467,"selected":false,"plus":0},{"value":"Agang","parametrId":4269,"count":1,"valueId":425604,"selected":false,"plus":0},{"value":"High Colorado","parametrId":4269,"count":3,"valueId":298984,"selected":false,"plus":0},{"value":"Rossignol","parametrId":4269,"count":8,"valueId":24440749,"selected":false,"plus":0},{"value":"Cervelo","parametrId":4269,"count":5,"valueId":408976,"selected":false,"plus":0},{"value":"Frozen","parametrId":4269,"count":1,"valueId":22992541,"selected":false,"plus":0},{"value":"Rascal Bikes","parametrId":4269,"count":1,"valueId":32751758,"selected":false,"plus":0},{"value":"KS Cycling","parametrId":4269,"count":4,"valueId":8788045,"selected":false,"plus":0},{"value":"Viva","parametrId":4269,"count":6,"valueId":461233,"selected":false,"plus":0},{"value":"Kolsport","parametrId":4269,"count":9,"valueId":820299,"selected":false,"plus":0},{"value":"Wisper","parametrId":4269,"count":2,"valueId":464108,"selected":false,"plus":0},{"value":"ORLANDO","parametrId":4269,"count":4,"valueId":23911959,"selected":false,"plus":0},{"value":"Cossack","parametrId":4269,"count":1,"valueId":9912295,"selected":false,"plus":0},{"value":"Maltrack","parametrId":4269,"count":1,"valueId":32236561,"selected":false,"plus":0},{"value":"Stolen","parametrId":4269,"count":1,"valueId":427687,"selected":false,"plus":0},{"value":"Bungi Bungi","parametrId":4269,"count":3,"valueId":33560570,"selected":false,"plus":0},{"value":"Torpado","parametrId":4269,"count":2,"valueId":200355,"selected":false,"plus":0},{"value":"Injusa","parametrId":4269,"count":4,"valueId":21242029,"selected":false,"plus":0},{"value":"Pyrobikes","parametrId":4269,"count":2,"valueId":24737273,"selected":false,"plus":0},{"value":"BeFly","parametrId":4269,"count":1,"valueId":39664203,"selected":false,"plus":0},{"value":"Stuf","parametrId":4269,"count":1,"valueId":858990,"selected":false,"plus":0},{"value":"Vautron","parametrId":4269,"count":3,"valueId":21243152,"selected":false,"plus":0}]';

		$arrayData = json_decode($data, true);

		usort($arrayData, function ($a, $b) {
			return strcmp($a['value'], $b['value']);
		});

		dump($arrayData);
		/*
		foreach ($arrayData as $brand) {
			$entity = new Brand();
			$entity->setName($brand['value']);
			$entity->setCreatedAt(new \DateTimeImmutable());
			$entity->setPopularity($brand['count']);
			$meta = json_encode(['Heureka' => $brand]);
			if ($meta !== false) {
				$entity->setMetadataText($meta);
			}
			$entityManager->persist($entity);
		}

		$entityManager->flush();
		*/
		return $this->render('test/index.html.twig', [
			//            'articles' => $this->advisoryRepository->findAll(),
		]);
	}
}
