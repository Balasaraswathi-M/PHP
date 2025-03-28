<?php
trait Logger {
    public function log($message) {
        echo "Log: $message";
    }
}

trait Notifier {
    public function notify($user) {
        echo "Notification sent to $user";
    }
}

class User {
    use Logger, Notifier;

    public function register($username) {
        $this->log("User $username registered.");
        $this->notify($username);
    }
}

$user = new User();
$user->register("Bala");

?>
