<?php
    
    #documentação: https://stackoverflow.com/questions/28249164/php-curl-website-scraping-not-working
    #documentação: http://rberaldo.com.br/trabalhando-com-a-biblioteca-curl/
    #documentação: https://www.php.net/manual/pt_BR/ref.curl.php
    #documentação: https://desenvolvimentoparaweb.com/php/como-pegar-parte-do-conteudo-dados-de-outro-site-com-php/
    #https://pt.stackoverflow.com/questions/289433/como-monitorar-uma-url-quando-houver-mudan%C3%A7as
    
   
    $sites = [
        'https://coinmarketcap.com/pt-br/currencies/bombcrypto/',#bombcryptos (BCOIN)
        'https://coinmarketcap.com/pt-br/currencies/cryptocars/',  #cryptocars (CCAR)
        'https://coinmarketcap.com/pt-br/currencies/cryptoplanes/',  #cryptoplanes (CPAN)
        'https://coinmarketcap.com/pt-br/currencies/cryptoguards/',  #cryptoguards (CGAR)
        'https://coinmarketcap.com/pt-br/currencies/zodiacs/',  #ZOODIACS (ZDC)
    ];
    
    $values = [];

    foreach ($sites as $site) {
   
    $curl = curl_init ($site);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    $page = curl_exec($curl);
    
    
    
    if(!empty($curl)){ //if any html is actually returned
        
        $pokemon_doc = new DOMDocument;
        libxml_use_internal_errors(true);
        $pokemon_doc->loadHTML($page);
        libxml_clear_errors(); //remove errors for yucky html
    
        $pokemon_xpath = new DOMXPath($pokemon_doc);
   
        $values[] = [
          'price' => $pokemon_xpath->evaluate('string(//div[@class="priceValue "])'),
          'name' => $pokemon_xpath->evaluate('string(//small[@class="nameSymbol"])')
        ];

        /*
        echo "<br>================================";
	    echo "<br>PRICE........: ".$price;
	    echo "<br>SYMBOL........: ".$name;
	    echo "<br>================================";
	    */
	    
    }
    else {
        print "Not found";
    }
    
}