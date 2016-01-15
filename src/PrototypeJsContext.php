<?php namespace EdmondsCommerce\PrototypeJsContext;

class PrototypeJsContext extends Behat\MinkExtension\Context\MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * @Then /^I wait for AJAX to finish$/
     */
    public function iWaitForAjaxToFinish()
    {
        $this->getSession()->wait(1000000, '(0 === Ajax.activeRequestCount)');
    }

} 