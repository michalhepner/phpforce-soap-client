<?php

namespace Ddeboer\Salesforce\ClientBundle\Request;

class LeadConvert
{
    public $accountId;
    public $contactId;
    public $convertedStatus;
    public $doNotCreateOpportunity = false;
    public $leadId;
    public $opportunityName;
    public $overwriteLeadSource = false;
    public $ownerId;
    public $sendNotificationEmail = false;
}