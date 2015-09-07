<?php


interface Logger
{
    public function log($message);
}
class TerminalLogger implements Logger
{
    public function log($message)
    {
        var_dump($message);
    }
}
class Application
{

    protected $logger;

    /**
     * @param $logger
     * @return self
     */
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
        return $this;
    }

    public function action()
    {
        $this->logger->log('Doing Something');
    }
}

$app =  new Application;
$app->setLogger(new TerminalLogger);
$app->action();

//useful for debugging or testing
$app2 =  new Application;
$app2->setLogger(new class implements Logger{
    public function log($message)
    {
        var_dump($message);
    }
});
$app2->action();