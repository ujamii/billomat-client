UPGRADE FROM 2.0.0 to 3.0.0
=======================

* PHP >= 7.4 is required, ext-curl is used for API access
* Guzzle >= 7.2 is required
* The client's methods now return a `GuzzleHttp\Command\ResultInterface`
instead of an array.
* The client now throws a CommandException which wraps the old
  `\Phobetor\Billomat\Exception\ExceptionInterface` exceptions.