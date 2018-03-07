# Behat Prototype Js Context
## By [Edmonds Commerce](https://www.edmondscommerce.co.uk)

A simple Behat Context provides functionality for prototype

### Installation

Install via composer

"edmondscommerce/prototypejs-context": "*@dev"


### Include Context in Behat Configuration

```
default:
    # ...
    suites:
        default:
            # ...
            contexts:
                - # ...
                - EdmondsCommerce\PrototypeJsContext\PrototypeJsContext
