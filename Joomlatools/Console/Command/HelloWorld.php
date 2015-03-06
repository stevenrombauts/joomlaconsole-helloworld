<?php
namespace Joomlatools\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    protected function configure()
    {
        $this->setName('hello')
             ->addArgument('object', InputArgument::REQUIRED, 'Something to say hello to.')
             ->setDescription('Hello World command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $object = $input->getArgument('object');

        $output->writeln('Hello, <fg=yellow;options=bold>' . $object . '</fg=yellow;options=bold>');
    }
}
