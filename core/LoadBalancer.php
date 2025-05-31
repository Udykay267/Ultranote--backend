<?php
class LoadBalancer {
    private $threshold;

    public function __construct($threshold = 70) {
        $this->threshold = $threshold;
    }

    public function getLoadPercentage() {
        $load = sys_getloadavg();
        return round($load[0] * 100 / 100);
    }

    public function shouldThrottle($load) {
        return $load > $this->threshold;
    }
}
?>