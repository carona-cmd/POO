<?php
require_once 'AdminNotifier.php';
class SubscriptionAdminNotifierObserver implements SplObserver
{
 public AdminNotifier $adminNotifier;


    public function __construct(AdminNotifier $adminNotifier)
    {
        $this->adminNotifier = $adminNotifier;
    }

    public function update(SplSubject $subject)
    {

        $this->adminNotifier->notifyAdmin($subject->username . 's\est inscrit');
    }
}