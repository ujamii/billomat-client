<?php

namespace Phobetor\Billomat\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\ResultInterface;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Phobetor\Billomat\Exception\TooManyRequestsException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Billomat client to interact with Billomat REST API
 *
 * CLIENT RELATED METHODS:
 * @method array getClients(array $args = []) {@command Billomat GetClients}
 * @method array getClient(array $args = []) {@command Billomat GetClient}
 * @method array getClientMyself(array $args = []) {@command Billomat GetClientMyself}
 * @method array createClient(array $args = []) {@command Billomat CreateClient}
 * @method array updateClient(array $args = []) {@command Billomat UpdateClient}
 * @method void deleteClient(array $args = []) {@command Billomat DeleteClient}
 *
 * CLIENT PROPERTY VALUE RELATED METHODS:
 * @method array getClientPropertyValues(array $args = []) {@command Billomat GetClientPropertyValues}
 * @method array getClientPropertyValue(array $args = []) {@command Billomat GetClientPropertyValue}
 * @method array setClientPropertyValue(array $args = []) {@command Billomat SetClientPropertyValue}
 *
 * ARTICLE RELATED METHODS:
 * @method array getArticles(array $args = []) {@command Billomat GetArticles}
 * @method array getArticle(array $args = []) {@command Billomat GetArticle}
 * @method array createArticle(array $args = []) {@command Billomat CreateArticle}
 * @method array updateArticle(array $args = []) {@command Billomat UpdateArticle}
 * @method void deleteArticle(array $args = []) {@command Billomat DeleteArticle}
 *
 * ARTICLE PROPERTY VALUE RELATED METHODS:
 * @method array getArticlePropertyValues(array $args = []) {@command Billomat GetArticlePropertyValues}
 * @method array getArticlePropertyValue(array $args = []) {@command Billomat GetArticlePropertyValue}
 * @method array setArticlePropertyValue(array $args = []) {@command Billomat SetArticlePropertyValue}
 *
 * INVOICE RELATED METHODS:
 * @method array getInvoices(array $args = []) {@command Billomat GetInvoices}
 * @method array getInvoice(array $args = []) {@command Billomat GetInvoice}
 * @method array createInvoice(array $args = []) {@command Billomat CreateInvoice}
 * @method array updateInvoice(array $args = []) {@command Billomat UpdateInvoice}
 * @method array completeInvoice(array $args = []) {@command Billomat CompleteInvoice}
 * @method \Guzzle\Http\Message\Response getInvoicePdf(array $args = []) {@command Billomat GetInvoicePdf}
 * @method array signInvoice(array $args = []) {@command Billomat SignInvoice}
 * @method array sendInvoiceEmail(array $args = []) {@command Billomat SendInvoiceEmail}
 * @method array cancelInvoice(array $args = []) {@command Billomat CancelInvoice}
 * @method array undoCancelInvoice(array $args = []) {@command Billomat UndoCancelInvoice}
 * @method void deleteInvoice(array $args = []) {@command Billomat DeleteInvoice}
 *
 * INVOICE ITEM RELATED METHODS:
 * @method array getInvoiceItems(array $args = []) {@command Billomat GetInvoiceItems}
 * @method array getInvoiceItem(array $args = []) {@command Billomat GetInvoiceItem}
 * @method array createInvoiceItem(array $args = []) {@command Billomat CreateInvoiceItem}
 * @method array updateInvoiceItem(array $args = []) {@command Billomat UpdateInvoiceItem}
 * @method void deleteInvoiceItem(array $args = []) {@command Billomat DeleteInvoiceItem}
 *
 * INVOICE TAG RELATED METHODS:
 * @method array getInvoiceTagCloud(array $args = []) {@command Billomat GetInvoiceTagCloud}
 * @method array getInvoiceTags(array $args = []) {@command Billomat GetInvoiceTags}
 * @method array getInvoiceTag(array $args = []) {@command Billomat GetInvoiceTag}
 * @method array createInvoiceTag(array $args = []) {@command Billomat CreateInvoiceTag}
 * @method array deleteInvoiceTag(array $args = []) {@command Billomat DeleteInvoiceTag}
 *
 * INVOICE PAYMENT RELATED METHODS:
 * @method array getInvoicePayments(array $args = []) {@command Billomat GetInvoicePayments}
 * @method array getInvoicePayment(array $args = []) {@command Billomat GetInvoicePayment}
 * @method array createInvoicePayment(array $args = []) {@command Billomat CreateInvoicePayment}
 * @method array deleteInvoicePayment(array $args = []) {@command Billomat DeleteInvoicePayment}
 *
 * CREDIT NOTE RELATED METHODS:
 * @method array getCreditNotes(array $args = []) {@command Billomat GetCreditNotes}
 * @method array getCreditNote(array $args = []) {@command Billomat GetCreditNote}
 * @method array createCreditNote(array $args = []) {@command Billomat CreateCreditNote}
 * @method array updateCreditNote(array $args = []) {@command Billomat UpdateCreditNote}
 * @method array completeCreditNote(array $args = []) {@command Billomat CompleteCreditNote}
 * @method \Guzzle\Http\Message\Response getCreditNotePdf(array $args = []) {@command Billomat GetCreditNotePdf}
 * @method array signCreditNote(array $args = []) {@command Billomat SignCreditNote}
 * @method array sendCreditNoteEmail(array $args = []) {@command Billomat SendCreditNoteEmail}
 * @method void deleteCreditNote(array $args = []) {@command Billomat DeleteCreditNote}
 *
 * CREDIT NOTE ITEM RELATED METHODS:
 * @method array getCreditNoteItems(array $args = []) {@command Billomat GetCreditNoteItems}
 * @method array getCreditNoteItem(array $args = []) {@command Billomat GetCreditNoteItem}
 * @method array createCreditNoteItem(array $args = []) {@command Billomat CreateCreditNoteItem}
 * @method array updateCreditNoteItem(array $args = []) {@command Billomat UpdateCreditNoteItem}
 * @method void deleteCreditNoteItem(array $args = []) {@command Billomat DeleteCreditNoteItem}
 *
 * CREDIT NOTE PAYMENT RELATED METHODS:
 * @method array getCreditNotePayments(array $args = []) {@command Billomat GetCreditNotePayments}
 * @method array getCreditNotePayment(array $args = []) {@command Billomat GetCreditNotePayment}
 * @method array createCreditNotePayment(array $args = []) {@command Billomat CreateCreditNotePayment}
 * @method array deleteCreditNotePayment(array $args = []) {@command Billomat DeleteCreditNotePayment}
 *
 * TEMPLATE RELATED METHODS:
 * @method array getTemplates(array $args = []) {@command Billomat GetTemplate}
 * @method array getTemplate(array $args = []) {@command Billomat GetTemplate}
 * @method \Guzzle\Http\Message\Response getTemplatePreview(array $args = []) {@command Billomat GetTemplatePreview}
 * @method array createTemplate(array $args = []) {@command Billomat CreateTemplate}
 * @method array updateTemplate(array $args = []) {@command Billomat UpdateTemplate}
 * @method void deleteTemplate(array $args = []) {@command Billomat DeleteTemplate}
 *
 * ARTICLE PROPERTY RELATED METHODS:
 * @method array getArticleProperties(array $args = []) {@command Billomat GetArticleProperties}
 * @method array getArticleProperty(array $args = []) {@command Billomat GetArticleProperty}
 * @method array createArticleProperty(array $args = []) {@command Billomat CreateArticleProperty}
 * @method array updateArticleProperty(array $args = []) {@command Billomat UpdateArticleProperty}
 * @method void deleteArticleProperty(array $args = []) {@command Billomat DeleteArticleProperty}
 *
 * CLIENT PROPERTY RELATED METHODS:
 * @method array getClientProperties(array $args = []) {@command Billomat GetClientProperties}
 * @method array getClientProperty(array $args = []) {@command Billomat GetClientProperty}
 * @method array createClientProperty(array $args = []) {@command Billomat CreateClientProperty}
 * @method array updateClientProperty(array $args = []) {@command Billomat UpdateClientProperty}
 * @method void deleteClientProperty(array $args = []) {@command Billomat DeleteClientProperty}
 *
 * USER PROPERTY RELATED METHODS:
 * @method array getUserProperties(array $args = []) {@command Billomat GetUserProperties}
 * @method array getUserProperty(array $args = []) {@command Billomat GetUserProperty}
 * @method array createUserProperty(array $args = []) {@command Billomat CreateUserProperty}
 * @method array updateUserProperty(array $args = []) {@command Billomat UpdateUserProperty}
 * @method void deleteUserProperty(array $args = []) {@command Billomat DeleteUserProperty}
 *
 * TAX RELATED METHODS:
 * @method array getTaxes(array $args = []) {@command Billomat GetTaxes}
 * @method array getTax(array $args = []) {@command Billomat GetTax}
 * @method array createTax(array $args = []) {@command Billomat CreateTax}
 * @method array updateTax(array $args = []) {@command Billomat UpdateTax}
 * @method void deleteTax(array $args = []) {@command Billomat DeleteTax}
 *
 * COUNTRY TAX RELATED METHODS:
 * @method array getCountryTaxes(array $args = []) {@command Billomat GetCountryTaxes}
 * @method array getCountryTax(array $args = []) {@command Billomat GetCountryTax}
 * @method array createCountryTax(array $args = []) {@command Billomat CreateCountryTax}
 * @method array updateCountryTax(array $args = []) {@command Billomat UpdateCountryTax}
 * @method void deleteCountryTax(array $args = []) {@command Billomat DeleteCountryTax}
 *
 * REMINDER TEXT RELATED METHODS:
 * @method array getReminderTexts(array $args = []) {@command Billomat GetReminderTexts}
 * @method array getReminderText(array $args = []) {@command Billomat GetReminderText}
 * @method array createReminderText(array $args = []) {@command Billomat CreateReminderText}
 * @method array updateReminderText(array $args = []) {@command Billomat UpdateReminderText}
 * @method void deleteReminderText(array $args = []) {@command Billomat DeleteReminderText}
 *
 * EMAIL TEMPLATE RELATED METHODS:
 * @method array getEmailTemplates(array $args = []) {@command Billomat GetEmailTemplates}
 * @method array getEmailTemplate(array $args = []) {@command Billomat GetEmailTemplate}
 * @method array createEmailTemplate(array $args = []) {@command Billomat CreateEmailTemplate}
 * @method array updateEmailTemplate(array $args = []) {@command Billomat UpdateEmailTemplate}
 * @method void deleteEmailTemplate(array $args = []) {@command Billomat DeleteEmailTemplate}
 *
 * USER PROPERTY VALUE RELATED METHODS:
 * @method array getUserPropertyValues(array $args = []) {@command Billomat GetUserPropertyValues}
 * @method array getUserPropertyValue(array $args = []) {@command Billomat GetUserPropertyValue}
 * @method array setUserPropertyValue(array $args = []) {@command Billomat SetUserPropertyValue}
 *
 * SUPPLIER RELATED METHODS
 * @method array getSupplier(array $args = []) {@command Billomat GetSupplier}
 * @method array getSuppliers(array $args = []) {@command Billomat GetSuppliers}
 *
 * INCOMING INVOICE RELATED METHODS
 * @method array getIncomings(array $args = []) {@command Billomat GetIncomings}
 * @method array getIncomingPdf(array $args = []) {@command Billomat GetIncomingPdf}
 * @method array createIncomingTag(array $args = []) {@command Billomat CreateIncomingTag}
 * @method array createIncomingPayment(array $args = []) {@command Billomat CreateIncomingPayment}
 *
 * # INBOX RELATED METHODS
 * @method array createIncomingInboxDocument(array $args = []) {@command Billomat CreateIncomingInboxDocument}
 *
 * @licence MIT
 */
class BillomatClient extends GuzzleClient
{
    /**
     * Billomat API version
     */
    public const LATEST_API_VERSION = '1.0';

    protected string $apiKey;
    protected ?int $appId;
    protected ?string $appSecret;
    protected string $billomatId;
    protected ?int $rateLimitRemaining = null;
    protected ?int $rateLimitReset = null;
    protected bool $doWaitForRateLimitReset = false;
    protected Description $serviceDescription;

    public function __construct(
        string $billomatId,
        string $apiKey,
        int $apiAppId = null,
        string $apiAppSecret = null,
        bool $doWaitForRateLimitReset = false,
        string $version = self::LATEST_API_VERSION
    ) {
        $this->apiKey                  = $apiKey;
        $this->appId                   = $apiAppId;
        $this->appSecret               = $apiAppSecret;
        $this->billomatId              = $billomatId;
        $this->doWaitForRateLimitReset = $doWaitForRateLimitReset;

        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());
        $stack->push(Middleware::mapRequest([$this, 'injectHeaders']));
        $stack->push(Middleware::mapResponse([$this, 'handleRateLimit']));
        $stack->push(Middleware::mapResponse([ErrorHandlerMiddleware::class, 'handleResponse']));

        $client = new Client(['handler' => $stack]);
        $this->serviceDescription = new Description($this->getServiceDefinition($version));
        parent::__construct($client, $this->serviceDescription);
    }

    protected function getServiceDefinition(string $version): array
    {
        $definition = require __DIR__."/ServiceDescription/Billomat-{$version}.php";

        // The base URL depends on the Billomat id
        $definition['baseUri'] = "https://{$this->billomatId}.billomat.net";

        return $definition;
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, array $args = []): ResultInterface
    {
        // no automatic rate limit handling, just execute the command
        if (!$this->doWaitForRateLimitReset) {
            return $this->executeCommand($method, $args[0] ?? []);
        }

        $result = null;
        do {
            $caughtRateLimitException = false;
            try {
                $result = $this->executeCommand($method, $args[0] ?? []);
            }
            catch (TooManyRequestsException $e) {
                $caughtRateLimitException = true;

                if (null !== $e->getRateLimitReset()) {
                    // reset time was found, calculate exact interval to wait
                    $now = new \DateTime();
                    $now->setTimezone(new \DateTimeZone('UTC'));
                    $reset = new \DateTime(sprintf('@%d', $e->getRateLimitReset()));

                    $secondsToWait = $reset->getTimestamp() - $now->getTimestamp() + 1;
                }
                else {
                    // reset time was not found, best guess 5 minutes.
                    // if this is too short, the next loop will end here again.
                    $secondsToWait = 5 * 60;
                }

                // sleep until rate limit reset
                sleep($secondsToWait);
            }
            catch (\Exception $e) {
                throw $e;
            }
        }
        while ($caughtRateLimitException);

        return $result;
    }

    /**
     * Wraps Guzzle's execute() with some preperations and post processing.
     */
    protected function executeCommand(string $method, array $args = []): ResultInterface
    {
        $command = $this->getCommand(ucfirst($method), $args);

        // @todo without this the CurlHandler sends the request using
        // chunked encoding and Billomat returns "error reading input data".
        // This can probably cause errors when uploading (large) files, tested
        // & works with 3.8MB PDF
        $command['@http'] = [
            'curl' => ['body_as_string' => true],
        ];

        $result = $this->execute($command);

        // convert single results to arrays to have a consistent return
        // structure for methods that can return 1 to X results. For 0 results
        // the key will be missing, but '@total' can be checked before.
        switch ($method) {
            case 'getClients':
            case 'getClientPropertyValues':
            case 'getArticles':
            case 'getArticlePropertyValues':
            case 'getInvoices':
            case 'getInvoiceItems':
            case 'getInvoiceTagCloud':
            case 'getInvoiceTags':
            case 'getInvoicePayments':
            case 'getCreditNotes':
            case 'getCreditNoteItems':
            case 'getCreditNotePayments':
            case 'getTemplates':
            case 'getArticleProperties':
            case 'getClientProperties':
            case 'getUserProperties':
            case 'getTaxes':
            case 'getCountryTaxes':
            case 'getReminderTexts':
            case 'getEmailTemplates':
            case 'getUserPropertyValues':
                foreach ($result as $listKey => $list) {
                    if (is_array($list)) {
                        foreach ($list as $itemKey => $item) {
                            // this is an object
                            if (!empty($item['id'])) {
                                // make it a list
                                $list[$itemKey] = [$item];
                                $result[$listKey] = $list;
                            }
                        }
                    }
                }
                break;
        }

        return $result;
    }

    public function injectHeaders(RequestInterface $request): RequestInterface
    {
        $enhanced = $request
            ->withHeader('Accept', 'application/json')
            ->withHeader('X-BillomatApiKey', $this->apiKey)
            ->withHeader('User-Agent', 'phobetor-billomat-php/3');

        if ($this->appId && $this->appSecret) {
            $enhanced = $enhanced
                ->withHeader('X-AppId', $this->appId)
                ->withHeader('X-AppSecret', $this->appSecret);
        }

        return $enhanced;
    }

    public function handleRateLimit(ResponseInterface $response): ResponseInterface
    {
        // take over rate limit data for public access
        if ($response->hasHeader('X-Rate-Limit-Remaining')) {
            $this->rateLimitRemaining = (int)$response->getHeader('X-Rate-Limit-Remaining')[0];
        }
        if ($response->hasHeader('X-Rate-Limit-Reset')) {
            $this->rateLimitReset = (int)$response->getHeader('X-Rate-Limit-Reset')[0];
        }

        return $response;
    }

    /**
     * Get current Billomat API version
     */
    public function getApiVersion(): string
    {
        return $this->serviceDescription->getApiVersion();
    }

    public function getRateLimitRemaining(): ?int
    {
        return $this->rateLimitRemaining;
    }

    public function getRateLimitReset(): ?int
    {
        return $this->rateLimitReset;
    }

    public function setDoWaitForRateLimitReset(bool $doWaitForRateLimitReset): void
    {
        $this->doWaitForRateLimitReset = (bool)$doWaitForRateLimitReset;
    }
}
