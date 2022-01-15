<?php

namespace App\Service;

class ParserService
{
    public function parser(){
        $ch = curl_init('https://www.php.net/');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_HEADER, false);

        $result = curl_exec($ch);

        $dom = new \DOMDocument();

        libxml_use_internal_errors(true);

        $dom->loadHTML($result);

        libxml_use_internal_errors(false);

        $xpath = new \DOMXPath($dom);

        $nodeVersion = $xpath->query('//*[@id="2021-12-17-1"]', $dom)->item(0);
        $nodeDate = $xpath->query('//*[@id="layout-content"]/div/article[1]/header/time', $dom)->item(0);
        $nodeText1 = $xpath->query('//*[@id="layout-content"]/div/article[1]/div/div/p[1]', $dom)->item(0);
        $nodeText2 = $xpath->query('//*[@id="layout-content"]/div/article[1]/div/div/p[2]', $dom)->item(0);
        $nodeText3 = $xpath->query('//*[@id="layout-content"]/div/article[1]/div/div/p[3]', $dom)->item(0);

        return ([$nodeVersion->textContent, $nodeDate->textContent, $nodeText1->textContent, $nodeText2->textContent, $nodeText3->textContent]);
    }
}
