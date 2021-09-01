<?php

declare(strict_types=1);

namespace App\Command;

use App\Crawler\Aukro\AukroCrawler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CrawlerAukroCommand extends Command
{
	protected static $defaultName = 'crawler:aukro';
	/**
	 * @var AukroCrawler
	 */
	private $aukroCrawler;

	public function __construct(
		AukroCrawler $aukroCrawler
	) {
		parent::__construct();
		$this->aukroCrawler = $aukroCrawler;
	}

	protected function configure(): void
	{
		$this
			->setDescription('Aukro offers crawler');
//			->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
//			->addOption('option1', null, InputOption::VALUE_NONE, 'Option description');
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		$io = new SymfonyStyle($input, $output);

//		$arg1 = $input->getArgument('arg1');
//		if ($arg1) {
//			$io->note(sprintf('You passed an argument: %s', $arg1));
//		}
//
//		if ($input->getOption('option1')) {
//			// ...
//		}

		$itemsCount = 0;
		$itemsCountNew = 0;
		$this->aukroCrawler->prepare();
		foreach ($this->aukroCrawler->getElement() as $offer) {
			++$itemsCount;
			if ($this->aukroCrawler->isNew()) {
				$io->note(sprintf('New offer: %s', $offer->getTitle()));
				$this->aukroCrawler->persistLastOffer();
				$this->aukroCrawler->bulkFlush();
				++$itemsCountNew;
			}
		}

		$io->success(sprintf('Parsed %s items. Saved %s new items.', $itemsCount, $itemsCountNew));

		return 0;
	}
}
