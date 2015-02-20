<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20/02/15
 * Time: 17:17
 */

namespace EdmondsCommerce\PrototypeJsContext;

class PrototypeJsContext extends Behat\MinkExtension\Context\MinkContext implements Context, SnippetAcceptingContext
{
    /**
     *@Then /^I wait for AJAX to finish$/
     */
    public function iWaitForAjaxToFinish()
    {
        $this->getSession()->wait(1000000, '(0 === Ajax.activeRequestCount)');
    }

} 