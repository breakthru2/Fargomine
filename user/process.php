<?php

if (isset($_POST['amount'])) {
    //if (preg_match($_POST['amount'], '/\d+/')) {
        $amount = intval($_POST['amount']);
        $url = "https://blockchain.info/stats?format=json";
        $stats = json_decode(file_get_contents($url), true);
        $btcValue = $stats['market_price_usd'];
        $usdCost = $amount;

        $convertedCost = $usdCost / $btcValue;
        
        echo $convertedCost;
    } else {
        echo "Invalid amount";
    }
//}

//echo $convertedCost;
?>  