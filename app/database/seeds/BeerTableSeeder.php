<?php class BeerTableSeeder extends Seeder {

    public function run()
    {
        DB::table('beers')->delete();

$beer=Beer::create(array('beer_name'=>'Cactus Queen IPA',
'style'=>'American IPA',
'brewery'=>'Yellow Rose Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wildcatter\'s Crude Stout',
'style'=>'American Stout',
'brewery'=>'Yellow Rose Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Amber',
'style'=>'Vienna Lager',
'brewery'=>'Abita Brewing Co.',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Turbodog',
'style'=>'English Brown Ale',
'brewery'=>'Abita Brewing Co.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Purple Haze',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Abita Brewing Co.',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wheat',
'style'=>'American Adjunct Lager',
'brewery'=>'Abita Brewing Co.',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Golden',
'style'=>'American Pale Lager',
'brewery'=>'Abita Brewing Co.',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Allagash Dubbel Ale',
'style'=>'Dubbel',
'brewery'=>'Allagash Brewing Company',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bert Grant\'s Scottish Ale',
'style'=>'Scottish Ale',
'brewery'=>'Yakima Brewing Co. / Bert Grant\'s Ales',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bert Grant\'s Imperial Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Yakima Brewing Co. / Bert Grant\'s Ales',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bert Grant\'s IPA',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Yakima Brewing Co. / Bert Grant\'s Ales',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Witkap Pater Singel / Stimulo',
'style'=>'Belgian Pale Ale',
'brewery'=>'Brouwerij Slaghmuylder',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wild Goose Snow Goose Winter Ale',
'style'=>'Winter Warmer',
'brewery'=>'Wild Goose Brewery, LLC',
'abv'=>'6.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hop Jack Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Widmer Brothers Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Widmer Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Widmer Brothers Brewing Company',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sommerbräu',
'style'=>'Kölsch',
'brewery'=>'Widmer Brothers Brewing Company',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mackeson Triple XXX Stout',
'style'=>'Milk / Sweet Stout',
'brewery'=>'Whitbread PLC',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Izaak',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Whim Ales',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Deep Shaft Stout',
'style'=>'Foreign / Export Stout',
'brewery'=>'Freeminer Brewery Ltd.',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wachusett IPA (India Pale Ale)',
'style'=>'American IPA',
'brewery'=>'Wachusett Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wachusett Black Shack Porter',
'style'=>'American Porter',
'brewery'=>'Wachusett Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wachusett Octoberfest Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Wachusett Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Quinn\'s Amber Ale',
'style'=>'Irish Red Ale',
'brewery'=>'Wachusett Brewing Company',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wachusett Winter Fest Ale',
'style'=>'Winter Warmer',
'brewery'=>'Wachusett Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Peter\'s Brand Pilsner Beer',
'style'=>'German Pilsener',
'brewery'=>'Union Export Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Trois Pistoles',
'style'=>'Belgian Strong Dark Ale',
'brewery'=>'Unibroue',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blanche De Chambly',
'style'=>'Witbier',
'brewery'=>'Unibroue',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Eau Benite',
'style'=>'Tripel',
'brewery'=>'Unibroue',
'abv'=>'7.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Maudite',
'style'=>'Belgian Strong Dark Ale',
'brewery'=>'Unibroue',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'La Fin Du Monde',
'style'=>'Tripel',
'brewery'=>'Unibroue',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Twisted Pine Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Twisted Pine Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Traquair House Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Traquair House Brewery Lld',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Cobnut Nut Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Tollemache & Cobbold Brewery Ltd',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Burnham Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Three Floyds Brewing Co. & Brewpub',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Alpha King Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Three Floyds Brewing Co. & Brewpub',
'abv'=>'6.66'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Extra Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Three Floyds Brewing Co. & Brewpub',
'abv'=>'5.25'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Light Lager',
'style'=>'Light Lager',
'brewery'=>'Upper Canada Brewing Company',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dark Ale',
'style'=>'English Brown Ale',
'brewery'=>'Upper Canada Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rebellion Lager',
'style'=>'American Pale Lager',
'brewery'=>'Upper Canada Brewing Company',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lager',
'style'=>'German Pilsener',
'brewery'=>'Upper Canada Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Woody\'s Wild Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Upper Canada Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rebellion Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Upper Canada Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tremont Summer Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tremont Porter',
'style'=>'American Porter',
'brewery'=>'Tremont Brewery / Atlantic Coast Brewing, Ltd.',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tremont Winter Ale',
'style'=>'Winter Warmer',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tremont Freedom Trail IPA',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'6.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tremont Ale',
'style'=>'English Pale Ale',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Melbourn Bros. Apricot',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Melbourn Bros.',
'abv'=>'3.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Redhook Blackhook Porter',
'style'=>'English Porter',
'brewery'=>'Redhook Ale Brewery',
'abv'=>'5.23'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Redhook Double Black Stout',
'style'=>'American Double / Imperial Stout',
'brewery'=>'Redhook Ale Brewery',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Melbourn Bros. Strawberry',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Melbourn Bros.',
'abv'=>'3.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Allagash Grand Cru',
'style'=>'Belgian Strong Dark Ale',
'brewery'=>'Allagash Brewing Company',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Allagash White',
'style'=>'Witbier',
'brewery'=>'Allagash Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Anchor Porter',
'style'=>'American Porter',
'brewery'=>'Anchor Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Our Special Ale 1998 (Anchor Christmas Ale)',
'style'=>'Winter Warmer',
'brewery'=>'Anchor Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Anchor Steam Beer',
'style'=>'California Common / Steam Beer',
'brewery'=>'Anchor Brewing Company',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Budweiser',
'style'=>'American Adjunct Lager',
'brewery'=>'Anheuser-Busch',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'King Cobra Premium Malt Liquor',
'style'=>'American Malt Liquor',
'brewery'=>'Anheuser-Busch',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'14\'ER ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Avery Brewing Company',
'abv'=>'5.13'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Redhook Rye',
'style'=>'Rye Beer',
'brewery'=>'Redhook Ale Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Redhook Blonde',
'style'=>'American Blonde Ale',
'brewery'=>'Redhook Ale Brewery',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Redhook Hefe-Weizen',
'style'=>'Hefeweizen',
'brewery'=>'Redhook Ale Brewery',
'abv'=>'5.19'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Redhook Nut Brown',
'style'=>'English Brown Ale',
'brewery'=>'Redhook Ale Brewery',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Young\'s Double Chocolate Stout',
'style'=>'Milk / Sweet Stout',
'brewery'=>'Wells & Young\'s Ltd',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Post Road Pumpkin Ale',
'style'=>'Pumpkin Ale',
'brewery'=>'Brooklyn Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pocono Caramel Porter',
'style'=>'American Porter',
'brewery'=>'Lion Brewery, Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brewery Hill Centennial Lager',
'style'=>'American Pale Lager',
'brewery'=>'Lion Brewery, Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blanche De Bruxelles / Manneken Pis Belgian White',
'style'=>'Witbier',
'brewery'=>'Brasserie Lefèbvre SA',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wee Heavy',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Belhaven Brewery Company Ltd.',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Organic Münster Alt',
'style'=>'Altbier',
'brewery'=>'Brauerei Pinkus Mueller',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Organic Ur Pils',
'style'=>'German Pilsener',
'brewery'=>'Brauerei Pinkus Mueller',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Organic Hefe-Weizen',
'style'=>'Hefeweizen',
'brewery'=>'Brauerei Pinkus Mueller',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Beck\'s Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Brauerei Beck & Co.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Independence Wheat Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Coffeehouse Porter',
'style'=>'American Porter',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Drayman\'s Porter',
'style'=>'American Porter',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Stone Brewing Co.',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone IPA (India Pale Ale)',
'style'=>'American IPA',
'brewery'=>'Stone Brewing Co.',
'abv'=>'6.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lost Sailor India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smoked Porter',
'style'=>'American Porter',
'brewery'=>'Stone Brewing Co.',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Arrogant Bastard Ale',
'style'=>'American Strong Ale',
'brewery'=>'Stone Brewing Co.',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Steel Rail Extra Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Red Sky Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'St. Stan\'s Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wit Original',
'style'=>'Witbier',
'brewery'=>'Spring Street Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Black Bavarian',
'style'=>'Schwarzbier',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'5.86'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Special Amber',
'style'=>'Vienna Lager',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Spaten Optimator',
'style'=>'Doppelbock',
'brewery'=>'Spaten-Franziskaner-Bräu',
'abv'=>'7.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blue Moon Harvest Moon Pumpkin Ale',
'style'=>'Pumpkin Ale',
'brewery'=>'Coors Brewing Company',
'abv'=>'5.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Winter Lager',
'style'=>'Bock',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Octoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Summer Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Boston Lager',
'style'=>'Vienna Lager',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Spring Ale',
'style'=>'Kölsch',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Cherry Wheat',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Golden Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'4.63'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Cream Ale',
'style'=>'Cream Ale',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Triple Bock',
'style'=>'American Strong Ale',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'17.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Belzebuth',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brasserie Grain d\' Orge (Brasserie Jeanne d\'Arc SA)',
'abv'=>'13.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Butthead Doppelbock',
'style'=>'Doppelbock',
'brewery'=>'Tommyknocker Brewery',
'abv'=>'8.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Jack Whacker Wheat Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Tommyknocker Brewery',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Maple Nut Brown Ale',
'style'=>'American Brown Ale',
'brewery'=>'Tommyknocker Brewery',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Red Eye Märzen Stil Lager',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Tommyknocker Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lost Dutchman Gold Ale',
'style'=>'Kölsch',
'brewery'=>'Tommyknocker Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pick Axe IPA',
'style'=>'American IPA',
'brewery'=>'Tommyknocker Brewery',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone Mansion Stout',
'style'=>'American Stout',
'brewery'=>'Stone City Brewing',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Artist Colony Ale',
'style'=>'English Brown Ale',
'brewery'=>'Stone City Brewing',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Iowa Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Stone City Brewing',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stein Bock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Stone City Brewing',
'abv'=>'6.25'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'John\'s Generations White Ale',
'style'=>'Witbier',
'brewery'=>'Millstream Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Stone City Brewing',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone Bluff Pils',
'style'=>'German Pilsener',
'brewery'=>'Stone City Brewing',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Aaaah Bock',
'style'=>'Bock',
'brewery'=>'Stone City Brewing',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Orval Trappist Ale',
'style'=>'Belgian Pale Ale',
'brewery'=>'Brasserie d\'Orval S.A.',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Grand Cru',
'style'=>'Belgian Dark Ale',
'brewery'=>'Brasserie Grain d\' Orge (Brasserie Jeanne d\'Arc SA)',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ayinger Celebrator Doppelbock',
'style'=>'Doppelbock',
'brewery'=>'Privatbrauerei Franz Inselkammer KG / Brauerei Aying',
'abv'=>'6.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ayinger Bräu Weisse',
'style'=>'Hefeweizen',
'brewery'=>'Privatbrauerei Franz Inselkammer KG / Brauerei Aying',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ayinger Jahrhundert Bier',
'style'=>'Dortmunder / Export Lager',
'brewery'=>'Privatbrauerei Franz Inselkammer KG / Brauerei Aying',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ayinger Altbairisch Dunkel',
'style'=>'Munich Dunkel Lager',
'brewery'=>'Privatbrauerei Franz Inselkammer KG / Brauerei Aying',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ayinger Ur-Weisse',
'style'=>'Dunkelweizen',
'brewery'=>'Privatbrauerei Franz Inselkammer KG / Brauerei Aying',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ayinger Maibock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Privatbrauerei Franz Inselkammer KG / Brauerei Aying',
'abv'=>'6.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'König Pilsener',
'style'=>'German Pilsener',
'brewery'=>'König-Brauerei GmbH',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Corsendonk Pater / Abbey Brown Ale',
'style'=>'Dubbel',
'brewery'=>'Brouwerij Corsendonk',
'abv'=>'7.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Corsendonk Agnus / Abbey Pale Ale',
'style'=>'Tripel',
'brewery'=>'Brouwerij Corsendonk',
'abv'=>'7.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Corsendonk Christmas Ale',
'style'=>'Belgian Strong Dark Ale',
'brewery'=>'Brouwerij Corsendonk',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hennepin (Farmhouse Saison)',
'style'=>'Saison / Farmhouse Ale',
'brewery'=>'Brewery Ommegang',
'abv'=>'7.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ommegang (Abbey Ale)',
'style'=>'Dubbel',
'brewery'=>'Brewery Ommegang',
'abv'=>'8.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Knucklehead Barleywine',
'style'=>'American Barleywine',
'brewery'=>'BridgePort Brewing Co. / Brewpub',
'abv'=>'9.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Whitewater Wheat Ale',
'style'=>'Hefeweizen',
'brewery'=>'Great Divide Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wild Raspberry Ale',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Great Divide Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brooklyn Brown Ale',
'style'=>'American Brown Ale',
'brewery'=>'Brooklyn Brewery',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brooklyn East India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Brooklyn Brewery',
'abv'=>'6.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brooklyn Lager',
'style'=>'American Amber / Red Lager',
'brewery'=>'Brooklyn Brewery',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Kinmount Willie Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Broughton Ales Ltd',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Merlin\'s Ale',
'style'=>'English Pale Ale',
'brewery'=>'Broughton Ales Ltd',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Jock Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Broughton Ales Ltd',
'abv'=>'6.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Black Douglas Ale',
'style'=>'Scottish Ale',
'brewery'=>'Broughton Ales Ltd',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Boon Geuze',
'style'=>'Gueuze',
'brewery'=>'Brouwerij Boon',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gulden Draak (Dark Triple)',
'style'=>'Belgian Strong Dark Ale',
'brewery'=>'Brouwerij Van Steenberge N.V.',
'abv'=>'10.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Piraat Ale',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij Van Steenberge N.V.',
'abv'=>'10.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Affligem Dubbel',
'style'=>'Dubbel',
'brewery'=>'Brouwerij De Smedt / Brouwerij Affligem',
'abv'=>'6.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Alimony Ale',
'style'=>'American IPA',
'brewery'=>'Buffalo Bill\'s Brewery',
'abv'=>'6.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Denver Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Great Divide Brewing Company',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Buzzards Bay Golden Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Buzzards Bay Brewing',
'abv'=>'4.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tennent\'s Lager',
'style'=>'Euro Pale Lager',
'brewery'=>'Tennent Caledonian Breweries',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lucknow Munich-Style Lager',
'style'=>'Munich Helles Lager',
'brewery'=>'Castle Springs Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lucknow Porter',
'style'=>'American Porter',
'brewery'=>'Castle Springs Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lucknow IPA',
'style'=>'American IPA',
'brewery'=>'Castle Springs Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pale Rider Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Celis Brewery Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Celis Pale Bock',
'style'=>'Bock',
'brewery'=>'Celis Brewery Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Celis White',
'style'=>'Witbier',
'brewery'=>'Celis Brewery Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Celis Grand Cru',
'style'=>'Witbier',
'brewery'=>'Celis Brewery Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Celis Dubbel Ale',
'style'=>'Dubbel',
'brewery'=>'Celis Brewery Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dos Equis Amber Lager',
'style'=>'Vienna Lager',
'brewery'=>'Cervecería Cuauhtémoc Moctezuma, S.A. de C.V.',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Concord Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Concord Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nine Man Ale Golden Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Cooperstown Brewing Company',
'abv'=>'4.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Benchwarmer Porter',
'style'=>'English Porter',
'brewery'=>'Cooperstown Brewing Company',
'abv'=>'6.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Strike Out Stout',
'style'=>'English Stout',
'brewery'=>'Cooperstown Brewing Company',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Yankee Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Cottrell Brewing Co.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Winter Porter (Big Beer Series)',
'style'=>'American Porter',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Barleywine Style Ale (Big Beer Series)',
'style'=>'American Barleywine',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'11.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Portsmouth Lager',
'style'=>'Vienna Lager',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Octoberfest (Big Beer Series)',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'6.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Old Brown Dog Ale',
'style'=>'American Brown Ale',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'6.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Imperial Stout (Big Beer Series)',
'style'=>'Russian Imperial Stout',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'9.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Shoals Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Chuck Wheat Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Maibock (Big Beer Series)',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'8.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Geary\'s Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'D.L. Geary Brewing Company',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Geary\'s London Porter',
'style'=>'English Porter',
'brewery'=>'D.L. Geary Brewing Company',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Cascade Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Deschutes Brewery',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mirror Pond Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Deschutes Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bachelor ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Deschutes Brewery',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Obsidian Stout',
'style'=>'American Stout',
'brewery'=>'Deschutes Brewery',
'abv'=>'6.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Black Butte Porter',
'style'=>'American Porter',
'brewery'=>'Deschutes Brewery',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Immort Ale',
'style'=>'English Strong Ale',
'brewery'=>'Dogfish Head Brewery',
'abv'=>'11.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dornbusch Gold',
'style'=>'Munich Helles Lager',
'brewery'=>'Dornbusch Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dornbusch Alt',
'style'=>'Altbier',
'brewery'=>'Dornbusch Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Einbecker Mai-Ur-Bock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Einbecker Brauhaus AG',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Laguna Bay Australian Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Eumundi Brewing Group LTD.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Scratch Amber Lager',
'style'=>'American Amber / Red Lager',
'brewery'=>'Flying Dog Brewery',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Snake Dog IPA',
'style'=>'American IPA',
'brewery'=>'Flying Dog Brewery',
'abv'=>'7.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Road Dog Porter',
'style'=>'American Porter',
'brewery'=>'Flying Dog Brewery',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hempen Golden',
'style'=>'Herbed / Spiced Beer',
'brewery'=>'Wild Goose Brewery, LLC',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bee Sting Honey Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Great Divide Brewing Company',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ridgeline Amber Ale',
'style'=>'Scottish Ale',
'brewery'=>'Great Divide Brewing Company',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Full Sail Stout',
'style'=>'American Stout',
'brewery'=>'Full Sail Brewery & Tasting Room & Pub',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Full Sail Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Full Sail Brewery & Tasting Room & Pub',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Full Sail Amber',
'style'=>'American Amber / Red Ale',
'brewery'=>'Full Sail Brewery & Tasting Room & Pub',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Full Sail Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Full Sail Brewery & Tasting Room & Pub',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Imperial Porter',
'style'=>'Baltic Porter',
'brewery'=>'Full Sail Brewery & Tasting Room & Pub',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Full Sail Wassail',
'style'=>'Winter Warmer',
'brewery'=>'Full Sail Brewery & Tasting Room & Pub',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fuller\'s ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Fuller Smith & Turner PLC',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fuller\'s Old Winter Ale',
'style'=>'Winter Warmer',
'brewery'=>'Fuller Smith & Turner PLC',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fuller\'s London Porter',
'style'=>'English Porter',
'brewery'=>'Fuller Smith & Turner PLC',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fuller\'s London Pride',
'style'=>'English Pale Ale',
'brewery'=>'Fuller Smith & Turner PLC',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Schneider Weisse Tap 6 Unser Aventinus',
'style'=>'Weizenbock',
'brewery'=>'Weisses Bräuhaus G. Schneider & Sohn GmbH',
'abv'=>'8.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Great Lakes Burning River Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Great Lakes Brewing Co.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Great Lakes Edmund Fitzgerald Porter',
'style'=>'American Porter',
'brewery'=>'Great Lakes Brewing Co.',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Great Lakes Cleveland Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Great Lakes Brewing Co.',
'abv'=>'6.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Great Lakes Dortmunder Gold',
'style'=>'Dortmunder / Export Lager',
'brewery'=>'Great Lakes Brewing Co.',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Great Lakes Eliot Ness',
'style'=>'Vienna Lager',
'brewery'=>'Great Lakes Brewing Co.',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gritty McDuff\'s Best Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Gritty McDuff\'s Brewing Company',
'abv'=>'4.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gritty McDuff\'s Best Bitter',
'style'=>'English Bitter',
'brewery'=>'Gritty McDuff\'s Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Corona Extra',
'style'=>'American Adjunct Lager',
'brewery'=>'Grupo Modelo S.A. de C.V.',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Corona Light',
'style'=>'Light Lager',
'brewery'=>'Grupo Modelo S.A. de C.V.',
'abv'=>'4.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hacker-Pschorr Oktoberfest-Märzen',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Hacker-Pschorr Bräu GmbH',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Burton Bridge Empire India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Burton Bridge Brewery',
'abv'=>'7.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hobgoblin',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Wychwood Brewery Company Ltd',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fiddler\'s Elbow',
'style'=>'English Pale Ale',
'brewery'=>'Wychwood Brewery Company Ltd',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hammer & Nail Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Hammer & Nail Brewers',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hammer & Nail Vienna Style Lager',
'style'=>'Vienna Lager',
'brewery'=>'Hammer & Nail Brewers',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hammer & Nail Scotch Classic Style Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Hammer & Nail Brewers',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hammer & Nail Extra Special Bitter Ale',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Hammer & Nail Brewers',
'abv'=>'6.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Alba Scots Pine Ale',
'style'=>'Scottish Gruit / Ancient Herbed Ale',
'brewery'=>'Williams Brothers Brewing Company',
'abv'=>'7.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Grozet',
'style'=>'Scottish Gruit / Ancient Herbed Ale',
'brewery'=>'Williams Brothers Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fraoch Heather Ale',
'style'=>'Scottish Gruit / Ancient Herbed Ale',
'brewery'=>'Williams Brothers Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Heineken Lager Beer',
'style'=>'Euro Pale Lager',
'brewery'=>'Heineken Nederland B.V.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hoegaarden Original White Ale',
'style'=>'Witbier',
'brewery'=>'Brouwerij van Hoegaarden',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Edelweiss Weissbier',
'style'=>'Hefeweizen',
'brewery'=>'Hofbräu Kaltenhausen (Brau Union)',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hyland American Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Pioneer Brewing Co.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hyland Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Pioneer Brewing Co.',
'abv'=>'5.25'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ipswich Winter Ale',
'style'=>'Old Ale',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ipswich Original Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'1084 Barley Wine Ale',
'style'=>'English Barleywine',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ipswich Nut Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ipswich ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ipswich India Pale Ale (I.P.A.)',
'style'=>'American IPA',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ipswich Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Iron Range Amber Lager',
'style'=>'Vienna Lager',
'brewery'=>'James Page Brewing Company',
'abv'=>'4.48'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saint Bridget\'s Porter',
'style'=>'American Porter',
'brewery'=>'Great Divide Brewing Company',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Schlitz',
'style'=>'American Adjunct Lager',
'brewery'=>'JOS. Schlitz Brewing Co. (Pabst)',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Alexander Keith\'s India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Alexander Keith\'s',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Porter',
'style'=>'American Porter',
'brewery'=>'King & Barnes Ltd.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Kingfisher Premium Lager',
'style'=>'American Pale Lager',
'brewery'=>'United Breweries - UB Group',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pilsener',
'style'=>'German Pilsener',
'brewery'=>'Cerveceria La Constancia S.A. / BevCo Ltd',
'abv'=>'3.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Suprema',
'style'=>'American Adjunct Lager',
'brewery'=>'Cerveceria La Constancia S.A. / BevCo Ltd',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Traditional IPA',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Long Trail Brewing Co.',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hibernator',
'style'=>'Scottish Ale',
'brewery'=>'Long Trail Brewing Co.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harvest',
'style'=>'English Brown Ale',
'brewery'=>'Long Trail Brewing Co.',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Double Bag',
'style'=>'Altbier',
'brewery'=>'Long Trail Brewing Co.',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ybor Gold Wheat Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Florida Beer Company',
'abv'=>'3.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sierra Nevada Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Sierra Nevada Brewing Co.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ybor Gold Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Florida Beer Company',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sierra Nevada Porter',
'style'=>'American Porter',
'brewery'=>'Sierra Nevada Brewing Co.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Löwenbräu Original',
'style'=>'Munich Helles Lager',
'brewery'=>'Löwenbräu AG',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Löwenbräu Premium Dark',
'style'=>'Munich Dunkel Lager',
'brewery'=>'Löwenbräu AG',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sierra Nevada Wheat Beer',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Sierra Nevada Brewing Co.',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sierra Nevada Stout',
'style'=>'American Stout',
'brewery'=>'Sierra Nevada Brewing Co.',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Feast Of Fools',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ravell',
'style'=>'American Porter',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Summer Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Prelude Special Ale',
'style'=>'Winter Warmer',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'6.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Brewer\'s Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Longfellow Winter Ale',
'style'=>'English Porter',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Blue Fin Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hocus Pocus',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Old Thumper',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bob\'s 1st Ale',
'style'=>'Irish Red Ale',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fat Angel',
'style'=>'English Pale Ale',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Jinx',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'6.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Heart Of Darkness',
'style'=>'English Stout',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'5.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blind Faith',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'#9',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Miss Bliss',
'style'=>'Herbed / Spiced Beer',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Black Pearl Cream Ale',
'style'=>'Cream Ale',
'brewery'=>'Maritime Beer Company Inc.',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Shepherd Neame Ltd',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'King\'s Honey Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Maritime Beer Company Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Original Porter',
'style'=>'American Porter',
'brewery'=>'Shepherd Neame Ltd',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Spitfire (Premium Ale Export)',
'style'=>'English Pale Ale',
'brewery'=>'Shepherd Neame Ltd',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Casey\'s Smooth Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'Shepherd Neame Ltd',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon Summer Beer',
'style'=>'Kölsch',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon Spring Maibock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon Winter Warmer',
'style'=>'Winter Warmer',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon IPA',
'style'=>'American IPA',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon Octoberfest Beer',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon Dark',
'style'=>'Munich Dunkel Lager',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harpoon Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pickwick Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'UFO Hefeweizen',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saranac Pilsener',
'style'=>'German Pilsener',
'brewery'=>'Matt Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saranac Lager',
'style'=>'American Pale Lager',
'brewery'=>'Matt Brewing Company',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saranac Black Forest',
'style'=>'Schwarzbier',
'brewery'=>'Matt Brewing Company',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'McNeill\'s Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'McNeill\'s Brewery',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'McNeill\'s Duck\'s Breath Ale',
'style'=>'English Strong Ale',
'brewery'=>'McNeill\'s Brewery',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'McNeill\'s Champ Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'McNeill\'s Brewery',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'McNeill\'s Firehouse Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'McNeill\'s Brewery',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Michelob Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Anheuser-Busch',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Syracuse Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Middle Ages Brewing Co., Ltd.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Beast Bitter',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Middle Ages Brewing Co., Ltd.',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Grail Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Middle Ages Brewing Co., Ltd.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'ImPaled Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Middle Ages Brewing Co., Ltd.',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Miller Lite',
'style'=>'Light Lager',
'brewery'=>'Miller Brewing Co.',
'abv'=>'4.17'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Millstream Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Millstream Brewing Company',
'abv'=>'5.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Millstream Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'Millstream Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Millstream Schild Brau Amber',
'style'=>'Vienna Lager',
'brewery'=>'Millstream Brewing Company',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone Cat E.S.B.',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone Cat Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone Cat I.P.A.',
'style'=>'American IPA',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pendle Witches Brew',
'style'=>'English Pale Ale',
'brewery'=>'Moorhouse\'s Brewery (Burnley) Ltd',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Black Cat',
'style'=>'English Dark Mild Ale',
'brewery'=>'Moorhouse\'s Brewery (Burnley) Ltd',
'abv'=>'3.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sea Dog Winter Ale (Cabin Fever)',
'style'=>'Winter Warmer',
'brewery'=>'Sea Dog Brewing Company',
'abv'=>'6.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sea Dog Blueberry Wheat Ale',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Sea Dog Brewing Company',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sea Dog Windjammer Blonde Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Sea Dog Brewing Company',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sea Dog Old East India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Sea Dog Brewing Company',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wasatch Slickrock Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'Utah Brewers Cooperative',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Jupiler',
'style'=>'Euro Pale Lager',
'brewery'=>'Brasserie Piedboeuf',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ruddles Pub Ale',
'style'=>'English Pale Ale',
'brewery'=>'Greene King / Morland Brewery',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mocha Porter',
'style'=>'American Porter',
'brewery'=>'Rogue Ales',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Chipotle Ale',
'style'=>'Chile Beer',
'brewery'=>'Rogue Ales',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dead Guy Ale',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Rogue Ales',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Imperial Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Rogue Ales',
'abv'=>'11.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smoke Ale',
'style'=>'Smoked Beer',
'brewery'=>'Rogue Ales',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'XS Imperial India Pale Ale',
'style'=>'American Double / Imperial IPA',
'brewery'=>'Rogue Ales',
'abv'=>'9.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Artisan Vienna Lager',
'style'=>'Vienna Lager',
'brewery'=>'Rogue Ales',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brutal Bitter Ale',
'style'=>'American IPA',
'brewery'=>'Rogue Ales',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oregon Golden Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Rogue Ales',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'American Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Rogue Ales',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Half-E-Weizen',
'style'=>'Witbier',
'brewery'=>'Rogue Ales',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Honey Cream Ale',
'style'=>'Cream Ale',
'brewery'=>'Rogue Ales',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rockies Fall Fest Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Boulder Beer / Wilderness Pub',
'abv'=>'5.13'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Boulder, Extra Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Boulder Beer / Wilderness Pub',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nor\'easter Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Rocky Bay Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Schooner Point Lager',
'style'=>'German Pilsener',
'brewery'=>'Rocky Bay Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tucher Dunkles Hefe Weizen',
'style'=>'Dunkelweizen',
'brewery'=>'Brauerei Tucher Brau',
'abv'=>'5.35'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tucher Helles Hefe Weizen',
'style'=>'Hefeweizen',
'brewery'=>'Brauerei Tucher Brau',
'abv'=>'5.35'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tucher Kristall Weizen',
'style'=>'Kristalweizen',
'brewery'=>'Brauerei Tucher Brau',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oberdorfer Hefeweizen Dunkel',
'style'=>'Dunkelweizen',
'brewery'=>'Privatbrauerei Franz Joseph Sailer',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bobby Dazzler',
'style'=>'Winter Warmer',
'brewery'=>'Portland Brewing Company',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pete\'s Wicked Summer Brew',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Pete\'s Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pete\'s Wicked Winter Brew',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Pete\'s Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pete\'s Wicked Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Pete\'s Brewing Company',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pete\'s Wicked ESP',
'style'=>'American Adjunct Lager',
'brewery'=>'Pete\'s Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pete\'s Wicked Springfest',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Pete\'s Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pete\'s Wicked Strawberry Blonde',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Pete\'s Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Penn Weizen',
'style'=>'Hefeweizen',
'brewery'=>'Pennsylvania Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Penn Dark',
'style'=>'Munich Dunkel Lager',
'brewery'=>'Pennsylvania Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Penn Gold',
'style'=>'Munich Helles Lager',
'brewery'=>'Pennsylvania Brewing Company',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Penn Pilsner',
'style'=>'Vienna Lager',
'brewery'=>'Pennsylvania Brewing Company',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Paulaner Oktoberfest-Märzen',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Paulaner Brauerei GmbH & Co. KG',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Salvator Doppel Bock',
'style'=>'Doppelbock',
'brewery'=>'Paulaner Brauerei GmbH & Co. KG',
'abv'=>'7.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Paulaner Original Münchner',
'style'=>'Munich Helles Lager',
'brewery'=>'Paulaner Brauerei GmbH & Co. KG',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Winter Palace Wee Heavy',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Paper City Brewery Co., Inc.',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'India\'n Pale Ale',
'style'=>'American IPA',
'brewery'=>'Paper City Brewery Co., Inc.',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Holyoke Dam Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Paper City Brewery Co., Inc.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Cabot Street Wheat',
'style'=>'Hefeweizen',
'brewery'=>'Paper City Brewery Co., Inc.',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Paper City Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Paper City Brewery Co., Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ireland Parish Brand Golden Ale',
'style'=>'English Pale Ale',
'brewery'=>'Paper City Brewery Co., Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Three Stooges Curly\'s Light',
'style'=>'Light Lager',
'brewery'=>'Panther Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'The Three Stooges Beer',
'style'=>'American Adjunct Lager',
'brewery'=>'Panther Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wolaver\'s Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'5.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wolaver\'s Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wolaver\'s India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Premium Dark',
'style'=>'Munich Dunkel Lager',
'brewery'=>'Paderborner Isenbeck Brauerei Haus Cramer GmbH & Co. KG',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dark Island',
'style'=>'Scottish Ale',
'brewery'=>'Orkney Brewery',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Skull Splitter',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Orkney Brewery',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'ACME California IPA',
'style'=>'American IPA',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'6.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tremont Festival Ale',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Tremont Brewery / Atlantic Coast Brewing, Ltd.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'ACME California Brown Ale',
'style'=>'American Brown Ale',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'ACME California Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blue Star Great American Wheat Beer',
'style'=>'American Pale Wheat Ale',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old #38 Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Scrimshaw Pilsner',
'style'=>'German Pilsener',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ruedrich\'s Red Seal Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pranqster',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'7.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Rasputin Russian Imperial Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'North Coast Brewing Co.',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Allston Beer',
'style'=>'American Pale Lager',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Springfest Maibock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Cherry 2000',
'style'=>'Lambic - Fruit',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nail in the Brain Barley Wine',
'style'=>'American Barleywine',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Trappist Monkey Abbey Ale',
'style'=>'Dubbel',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dortmunder Export Lager',
'style'=>'Dortmunder / Export Lager',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Griggs ST Mild',
'style'=>'American Pale Ale (APA)',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'MacFearsome\'s Scotch Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Palatine Porter',
'style'=>'American Porter',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oak Whiskey Porter',
'style'=>'American Porter',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Grampus Trippel',
'style'=>'Tripel',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Triple Black',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Black Sow Stout',
'style'=>'American Stout',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lobsterback IPA',
'style'=>'American IPA',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nor\'Easter Copper Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Munchener Helles',
'style'=>'Munich Helles Lager',
'brewery'=>'North East Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pilsner Urquell',
'style'=>'Czech Pilsener',
'brewery'=>'Plzensky Prazdroj, a. s.',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Otter Creek Mud Bock Spring Ale',
'style'=>'American Brown Ale',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'5.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Otter Creek Stovepipe Porter',
'style'=>'American Porter',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Otter Creek Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Otter Creek A Winter\'s Ale',
'style'=>'Smoked Beer',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Otter Creek Copper Ale',
'style'=>'Altbier',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Otter Creek Summer Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Otter Creek Brewing / Wolaver\'s',
'abv'=>'4.25'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Amstel Light',
'style'=>'Light Lager',
'brewery'=>'Amstel Brouwerij B. V.',
'abv'=>'3.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nutfield Harvest Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Old Nutfield Brewing Company, Ltd.',
'abv'=>'6.25'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Le Coq Imperial Extra Double Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Harvey & Son Ltd.',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Original Sarah Hughes Dark Ruby Mild',
'style'=>'English Dark Mild Ale',
'brewery'=>'Beacon Hotel (Sarah Hughes Brewery)',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Desert Mist Golden Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Palm Springs Brewery Inc.',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Red Feather Premium Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Palm Springs Brewery Inc.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lobkowicz Baron',
'style'=>'Munich Dunkel Lager',
'brewery'=>'Brewery Lobkowicz',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lobkowicz Prince',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Brewery Lobkowicz',
'abv'=>'5.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lobkowicz Knight',
'style'=>'Czech Pilsener',
'brewery'=>'Brewery Lobkowicz',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Allagash Tripel Ale',
'style'=>'Tripel',
'brewery'=>'Allagash Brewing Company',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stella Artois',
'style'=>'Euro Pale Lager',
'brewery'=>'Stella Artois',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Belgian Style White Ale (Big Beer Series)',
'style'=>'Witbier',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'4.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Climax Wheat',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Old Toasted Head',
'style'=>'Old Ale',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Big Bang Brown',
'style'=>'English Brown Ale',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bannatyne\'s Scotch Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'9.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brewnet Bombshell',
'style'=>'Altbier',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Cranberry Ale',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sunday River Alt Beer',
'style'=>'Altbier',
'brewery'=>'Stone Coast Brewing Co.',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Veltins Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Brauerei C. & A. Veltins GmbH & Co.',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fred',
'style'=>'American Strong Ale',
'brewery'=>'Hair of the Dog Brewing Company / Brewery and Tasting Room',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'#29 Spawn Of Adam Bier',
'style'=>'Old Ale',
'brewery'=>'Hair of the Dog Brewing Company / Brewery and Tasting Room',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'MacTarnahan\'s Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Portland Brewing Company',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Summer Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Portland Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oregon Honey Beer',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Portland Brewing Company',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Zigzag River Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'Portland Brewing Company',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Haystack Black Porter',
'style'=>'American Porter',
'brewery'=>'Portland Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bridgeport IPA',
'style'=>'American IPA',
'brewery'=>'BridgePort Brewing Co. / Brewpub',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blue Heron Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'BridgePort Brewing Co. / Brewpub',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bridgeport Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'BridgePort Brewing Co. / Brewpub',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Black Strap Stout',
'style'=>'American Stout',
'brewery'=>'BridgePort Brewing Co. / Brewpub',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bridgeport ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'BridgePort Brewing Co. / Brewpub',
'abv'=>'6.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bridgeport Porter',
'style'=>'American Porter',
'brewery'=>'BridgePort Brewing Co. / Brewpub',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harvest Spice Ale',
'style'=>'Herbed / Spiced Beer',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dunster Street Amber',
'style'=>'American Amber / Red Ale',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Light Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Irish Dry Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'3.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blueberry Wheat',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hugh Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Colonial Kölsch',
'style'=>'Kölsch',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'AAA Gold',
'style'=>'American Blonde Ale',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Milk Stout',
'style'=>'Milk / Sweet Stout',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nut Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Christmas Ale',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Cherry Blossom',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'India Pale Ale (IPA)',
'style'=>'American IPA',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Belgian Spiced Ale',
'style'=>'Belgian Pale Ale',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Winter Welcome',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Special Old Ale',
'style'=>'Old Ale',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Summer Bitter',
'style'=>'English Bitter',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Commonwealth IPA',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'American Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blonde Ale',
'style'=>'English Pale Ale',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Golden Ale',
'style'=>'English Pale Ale',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Famous Porter',
'style'=>'American Porter',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Boston\'s Best Burton Ale',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Best Bitter',
'style'=>'English Bitter',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stout',
'style'=>'English Stout',
'brewery'=>'Commonwealth Fish & Beer Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saison du CBC',
'style'=>'Saison / Farmhouse Ale',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dunkles Weizen',
'style'=>'Dunkelweizen',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'80 Schilling Scottish Ale',
'style'=>'Scottish Ale',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'6.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Big Man IPA',
'style'=>'American IPA',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'6.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hopalong\'s ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bitchin\' Special Bitter',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Biere De Garde',
'style'=>'Bière de Garde',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blunderbuss Barleywine',
'style'=>'American Barleywine',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'11.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Beantowne Espresso Stout',
'style'=>'American Stout',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Regatta Golden',
'style'=>'Kölsch',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tall Tale Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Cambridge Amber',
'style'=>'American Amber / Red Ale',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Charles River Porter',
'style'=>'American Porter',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Thetford IPA',
'style'=>'American IPA',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Echo Rock Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Broadway Blonde',
'style'=>'American Blonde Ale',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Tony\'s Steamin Lager',
'style'=>'California Common / Steam Beer',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Prussia\'s Pride ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Toasted Head IPA',
'style'=>'American IPA',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Moon Light',
'style'=>'Light Lager',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Purple Plum Wheat Ale',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Herbale',
'style'=>'Herbed / Spiced Beer',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Planetary Porter',
'style'=>'American Porter',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Alternative Ale',
'style'=>'Altbier',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Munich Gold',
'style'=>'Munich Helles Lager',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Lost Planet EPA',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Oktoberfest',
'style'=>'American Amber / Red Ale',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Orion Red',
'style'=>'Irish Red Ale',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Mayberry Wheat R.F.D.',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Independence Rye',
'style'=>'Rye Beer',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fenway Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Muddy River Porter',
'style'=>'American Porter',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Curley\'s Irish Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Haymarket Hefe-Weizen',
'style'=>'Hefeweizen',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'ASB 99',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mayflower Maibock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Canal Street Cream Ale',
'style'=>'Cream Ale',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bay State ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Printemps Saison',
'style'=>'Saison / Farmhouse Ale',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bambino Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Allston Mild',
'style'=>'English Dark Mild Ale',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'3.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Back Bay IPA',
'style'=>'American IPA',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'6.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bunker Hill Blueberry Ale',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Buck Eye Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Boston Red',
'style'=>'American Amber / Red Ale',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Eisbock',
'style'=>'Eisbock',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Premium American Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Fris Opdienen',
'style'=>'Lambic - Fruit',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fuller\'s 1845',
'style'=>'English Strong Ale',
'brewery'=>'Fuller Smith & Turner PLC',
'abv'=>'6.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Young\'s Ram Rod',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Wells & Young\'s Ltd',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Will\'s Extra Bitter',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'5.75'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'BMF Stout',
'style'=>'American Stout',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Charles River Dunkel',
'style'=>'Dunkelweizen',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Bière Blache',
'style'=>'Witbier',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Black Hole Lager',
'style'=>'Schwarzbier',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rolling Rock Extra Pale',
'style'=>'American Adjunct Lager',
'brewery'=>'Latrobe Brewing Co.',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Würzburger Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Würzburger Hofbräu AG',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brooklyn Oktoberfest Beer',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Brooklyn Brewery',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s The Famous Taddy Porter',
'style'=>'English Porter',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s India Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s Pure Brewed Lager Beer',
'style'=>'Euro Pale Lager',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s Old Brewery Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s Nut Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s Winter Welcome Ale',
'style'=>'Winter Warmer',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Thomas Hardy\'s Ale (1968-1999)',
'style'=>'Old Ale',
'brewery'=>'O\'Hanlon Brewing Co. Ltd.',
'abv'=>'11.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Miller High Life',
'style'=>'American Adjunct Lager',
'brewery'=>'Miller Brewing Co.',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Snake River Lager',
'style'=>'Vienna Lager',
'brewery'=>'Snake River Brewing Company & Brewpub',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Spaten Oktoberfestbier Ur-Märzen',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Spaten-Franziskaner-Bräu',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Duinen Dubbel',
'style'=>'Dubbel',
'brewery'=>'Brouwerij Huyghe',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gale\'s Millennium Brew',
'style'=>'Old Ale',
'brewery'=>'George Gale & Company Ltd',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Yuengling Premium Beer',
'style'=>'American Pale Lager',
'brewery'=>'Yuengling Brewery',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bokrijks Kruikenbier',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij Sterkens N.V.',
'abv'=>'6.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'La Trappe Blond (Koningshoeven / Dominus)',
'style'=>'Belgian Pale Ale',
'brewery'=>'Bierbrouwerij De Koningshoeven B.V.',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hoogstraten Poorter',
'style'=>'Baltic Porter',
'brewery'=>'Brouwerij Sterkens N.V.',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Snake River Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Snake River Brewing Company & Brewpub',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rare Vos (Amber Ale)',
'style'=>'Belgian Pale Ale',
'brewery'=>'Brewery Ommegang',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Aass Genuine Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Aass Brewery',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Würzburger Hofbräu Premium Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Würzburger Hofbräu AG',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Aass Original Lager',
'style'=>'Euro Pale Lager',
'brewery'=>'Aass Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rebel Garnet',
'style'=>'Euro Dark Lager',
'brewery'=>'Měťanský Pivovar Havlíčkův Brod, A.S.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lindemans Pêche',
'style'=>'Lambic - Fruit',
'brewery'=>'Brouwerij Lindemans',
'abv'=>'2.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lindemans Framboise',
'style'=>'Lambic - Fruit',
'brewery'=>'Brouwerij Lindemans',
'abv'=>'2.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lindemans Kriek',
'style'=>'Lambic - Fruit',
'brewery'=>'Brouwerij Lindemans',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lindemans Cassis',
'style'=>'Lambic - Fruit',
'brewery'=>'Brouwerij Lindemans',
'abv'=>'3.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Caledonian 80/-',
'style'=>'Scottish Ale',
'brewery'=>'The Caledonian Brewing Company',
'abv'=>'4.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Duinen Tripel',
'style'=>'Tripel',
'brewery'=>'Brouwerij Huyghe',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Zambezi',
'style'=>'Euro Pale Lager',
'brewery'=>'Delta Beverages',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Chapeau Framboise Lambic',
'style'=>'Lambic - Fruit',
'brewery'=>'Brouwerij De Troch',
'abv'=>'3.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fat Tire Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'New Belgium Brewing',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Poleeko Gold Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Anderson Valley Brewing Company',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Buzzards Bay Island Export Beer',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Buzzards Bay Brewing',
'abv'=>'4.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dornbusch Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Dornbusch Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hop Ottin\' IPA',
'style'=>'American IPA',
'brewery'=>'Anderson Valley Brewing Company',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Barbãr (Belgian Honey Ale)',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brasserie Lefèbvre SA',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Julius Echter Hefe-Weissbier Hell',
'style'=>'Hefeweizen',
'brewery'=>'Würzburger Hofbräu AG',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Barney Flats Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Anderson Valley Brewing Company',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Julius Echter Hefe-Weissbier Dunkel',
'style'=>'Dunkelweizen',
'brewery'=>'Würzburger Hofbräu AG',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Troubadour Blond Ale',
'style'=>'Belgian Pale Ale',
'brewery'=>'Brouwerij De Musketiers',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Belk\'s ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Anderson Valley Brewing Company',
'abv'=>'6.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Affligem Blond',
'style'=>'Belgian Pale Ale',
'brewery'=>'Brouwerij De Smedt / Brouwerij Affligem',
'abv'=>'6.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'McNeill\'s Green Mountain Gold',
'style'=>'Kölsch',
'brewery'=>'McNeill\'s Brewery',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smuttynose Robust Porter',
'style'=>'American Porter',
'brewery'=>'Smuttynose Brewing Company',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Boont Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Anderson Valley Brewing Company',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fischer Bitter',
'style'=>'Euro Pale Lager',
'brewery'=>'Brasserie Fischer / Fischer Biere d\' Alsace',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wieckse Witte',
'style'=>'Witbier',
'brewery'=>'De Ridder Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'La Trappe Dubbel (Koningshoeven / Dominus)',
'style'=>'Dubbel',
'brewery'=>'Bierbrouwerij De Koningshoeven B.V.',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sterkens Dubbel Ale',
'style'=>'Dubbel',
'brewery'=>'Brouwerij Sterkens N.V.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sterkens White Ale',
'style'=>'Witbier',
'brewery'=>'Brouwerij Sterkens N.V.',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blue Heron Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Mendocino Brewing Company',
'abv'=>'6.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Red Tail Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Mendocino Brewing Company',
'abv'=>'6.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Zonker Stout',
'style'=>'Foreign / Export Stout',
'brewery'=>'Snake River Brewing Company & Brewpub',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'De Dolle Arabier',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij De Dolle Brouwers',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'De Dolle Boskeun',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij De Dolle Brouwers',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pauwel Kwak',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij Bosteels',
'abv'=>'8.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Speckled Hen',
'style'=>'English Pale Ale',
'brewery'=>'Greene King / Morland Brewery',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blackout Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'3.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Newcastle Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'The Caledonian Brewery Company Limited',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Maccabee Premium Beer',
'style'=>'Czech Pilsener',
'brewery'=>'Tempo Beer Industries LTD',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Eye of the Hawk',
'style'=>'American Strong Ale',
'brewery'=>'Mendocino Brewing Company',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone 4th Anniversary IPA',
'style'=>'American Double / Imperial IPA',
'brewery'=>'Stone Brewing Co.',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Buffalo Bill\'s Pumpkin Ale',
'style'=>'Pumpkin Ale',
'brewery'=>'Buffalo Bill\'s Brewery',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hook & Ladder Backdraft Brown',
'style'=>'English Brown Ale',
'brewery'=>'Hook & Ladder Brewing Company (No. 2)',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Trappistes Rochefort 10',
'style'=>'Quadrupel (Quad)',
'brewery'=>'Brasserie de Rochefort',
'abv'=>'11.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Westmalle Trappist Tripel',
'style'=>'Tripel',
'brewery'=>'Brouwerij Westmalle',
'abv'=>'9.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dornbusch Winter Night Lager',
'style'=>'Schwarzbier',
'brewery'=>'Dornbusch Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Anchor Small Beer',
'style'=>'English Bitter',
'brewery'=>'Anchor Brewing Company',
'abv'=>'3.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ipswich Dark Ale',
'style'=>'American Brown Ale',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'6.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Guinness Extra Stout (Original)',
'style'=>'Irish Dry Stout',
'brewery'=>'Guinness Ltd.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Traquair Jacobite',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Traquair House Brewery Lld',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Natural Ice',
'style'=>'American Adjunct Lager',
'brewery'=>'Anheuser-Busch',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rockies Nut Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Boulder Beer / Wilderness Pub',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rebel',
'style'=>'Czech Pilsener',
'brewery'=>'Měťanský Pivovar Havlíčkův Brod, A.S.',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tripel Karmeliet',
'style'=>'Tripel',
'brewery'=>'Brouwerij Bosteels',
'abv'=>'8.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'La Trappe Tripel (Koningshoeven / Dominus)',
'style'=>'Tripel',
'brewery'=>'Bierbrouwerij De Koningshoeven B.V.',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Orion\'s Irish Amber',
'style'=>'Irish Red Ale',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Nutcracker Festival Ale',
'style'=>'English Brown Ale',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Improper Hopper IPA',
'style'=>'American IPA',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bitchin Bitter',
'style'=>'English Bitter',
'brewery'=>'Cambridge Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Aass Classic',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Aass Brewery',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Aass Bock',
'style'=>'Bock',
'brewery'=>'Aass Brewery',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Anchor Liberty Ale',
'style'=>'American IPA',
'brewery'=>'Anchor Brewing Company',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hacker-Pschorr Dunkel Weisse (Weisse Dark)',
'style'=>'Dunkelweizen',
'brewery'=>'Hacker-Pschorr Bräu GmbH',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Negra Modelo',
'style'=>'Vienna Lager',
'brewery'=>'Grupo Modelo S.A. de C.V.',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brigand',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij Van Honsebrouck N.V.',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Haffenreffer Private Stock',
'style'=>'American Malt Liquor',
'brewery'=>'Private Stock Brewing Co.',
'abv'=>'6.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Busch Beer',
'style'=>'American Adjunct Lager',
'brewery'=>'Anheuser-Busch',
'abv'=>'4.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Steenbrugge Dubbel Bruin',
'style'=>'Dubbel',
'brewery'=>'Brouwerij De Gouden Boom',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Chimay Première (Red)',
'style'=>'Dubbel',
'brewery'=>'Bières de Chimay S.A.',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rodenbach Grand Cru',
'style'=>'Flanders Red Ale',
'brewery'=>'Brouwerij Rodenbach N.V.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Westmalle Trappist Dubbel',
'style'=>'Dubbel',
'brewery'=>'Brouwerij Westmalle',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Vondel',
'style'=>'Flanders Oud Bruin',
'brewery'=>'Brouwerij Riva S.A.',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'De Koninck',
'style'=>'Belgian Pale Ale',
'brewery'=>'Brouwerij De Koninck NV',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blanche de Bruges',
'style'=>'Witbier',
'brewery'=>'Brouwerij De Gouden Boom',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gale\'s Conquest Ale Master Brew',
'style'=>'Old Ale',
'brewery'=>'George Gale & Company Ltd',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brooklyn Black Chocolate Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Brooklyn Brewery',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sudwerk Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Sudwerk Restaurant and Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Catamount Porter',
'style'=>'American Porter',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Young\'s Winter Warmer',
'style'=>'Winter Warmer',
'brewery'=>'Wells & Young\'s Ltd',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tocaloma Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Lagunitas Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Winter Ale (Special Brew)',
'style'=>'American Amber / Red Ale',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Our Special Ale 2000 (Anchor Christmas Ale)',
'style'=>'Winter Warmer',
'brewery'=>'Anchor Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Red Stripe Jamaican Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'Desnoes & Geddes Limited',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Calico Copper Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Ballast Point Brewing Company',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Catamount  8 Lives',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard IPA',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Don De Dieu',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Unibroue',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Duvel',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij Duvel Moortgat NV',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Yellowtail Pale Ale',
'style'=>'Kölsch',
'brewery'=>'Ballast Point Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Jacobins Gueuze',
'style'=>'Gueuze',
'brewery'=>'Brouwerij Bockor N.V.',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Pauli Girl Special Dark',
'style'=>'Munich Dunkel Lager',
'brewery'=>'St. Pauli Brauerei C.L. Wilh. Brandt Gmbh & Co.',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Vanderghinste Oud Bruin',
'style'=>'Flanders Oud Bruin',
'brewery'=>'Brouwerij Bockor N.V.',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Pauli Girl',
'style'=>'German Pilsener',
'brewery'=>'St. Pauli Brauerei C.L. Wilh. Brandt Gmbh & Co.',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Catamount Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Harpoon Brewery & Beer Hall',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Juniper Pale Ale',
'style'=>'Herbed / Spiced Beer',
'brewery'=>'Rogue Ales',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Murphy\'s Irish Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'Murphy Brewery Ireland Limited',
'abv'=>'4.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'J.W. Lees Vintage Harvest Ale',
'style'=>'English Barleywine',
'brewery'=>'J.W. Lees & Co (Brewers) Ltd',
'abv'=>'11.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tetley\'s English Ale',
'style'=>'English Pale Ale',
'brewery'=>'Carlsberg-Tetley Brewing Ltd',
'abv'=>'3.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gritty McDuff\'s Christmas Ale',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Gritty McDuff\'s Brewing Company',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Big Eye IPA',
'style'=>'American IPA',
'brewery'=>'Ballast Point Brewing Company',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fischer Tradition Amber',
'style'=>'Euro Dark Lager',
'brewery'=>'Brasserie Fischer / Fischer Biere d\' Alsace',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Steenbrugge Abbey Tripel',
'style'=>'Tripel',
'brewery'=>'Brouwerij De Gouden Boom',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Weihenstephaner Original',
'style'=>'Munich Helles Lager',
'brewery'=>'Bayerische Staatsbrauerei Weihenstephan',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Sebastiaan Dark',
'style'=>'Dubbel',
'brewery'=>'Brouwerij Sterkens N.V.',
'abv'=>'6.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Casco Bay Riptide Red Ale',
'style'=>'Irish Red Ale',
'brewery'=>'Casco Bay Brewing Co.',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nut Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Oak Pond Brewing Company',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Cole Porter',
'style'=>'American Porter',
'brewery'=>'SLO Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Downtown Brown',
'style'=>'English Brown Ale',
'brewery'=>'Lost Coast Brewery and Cafe',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Steel Reserve 211 (High Gravity)',
'style'=>'American Malt Liquor',
'brewery'=>'Steel Brewing Company',
'abv'=>'8.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Buzzards Bay West Porter',
'style'=>'American Porter',
'brewery'=>'Buzzards Bay Brewing',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Bernardus Tripel',
'style'=>'Tripel',
'brewery'=>'Brouwerij St. Bernardus NV',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gavroche',
'style'=>'Bière de Garde',
'brewery'=>'Brasserie De Saint-Sylvestre',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Young\'s Special London Ale',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Wells & Young\'s Ltd',
'abv'=>'6.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Young\'s Dirty Dick\'s Ale',
'style'=>'English Bitter',
'brewery'=>'Young & Co Brewery PLC',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'He\'Brew Genesis Ale (Old Version)',
'style'=>'American Amber / Red Ale',
'brewery'=>'Shmaltz Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Aecht Schlenkerla Rauchbier Märzen',
'style'=>'Rauchbier',
'brewery'=>'Brauerei Heller-Trum / Schlenkerla',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lucifer',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij Riva S.A.',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sudwerk Hefe-Weizen',
'style'=>'Hefeweizen',
'brewery'=>'Sudwerk Restaurant and Brewery',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Weihenstephaner Hefeweissbier',
'style'=>'Hefeweizen',
'brewery'=>'Bayerische Staatsbrauerei Weihenstephan',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'K-9 Cruiser Winter Ale',
'style'=>'Winter Warmer',
'brewery'=>'Flying Dog Brewery',
'abv'=>'7.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fuller\'s India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Fuller Smith & Turner PLC',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Steelhead Scotch Porter',
'style'=>'English Porter',
'brewery'=>'Mad River Brewing Company',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Jamaica Red Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Mad River Brewing Company',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Odell Easy Street Wheat',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Odell Brewing Company',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Odell Levity Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Odell Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Odell Cutthroat Porter',
'style'=>'American Porter',
'brewery'=>'Odell Brewing Company',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Straffe Hendrik Bruin',
'style'=>'Belgian Strong Dark Ale',
'brewery'=>'Brouwerij Straffe Hendrik / Huisbrouwerij De Halve Maan',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Odell 90 Shilling Ale',
'style'=>'Scottish Ale',
'brewery'=>'Odell Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Odell Isolation Ale',
'style'=>'Winter Warmer',
'brewery'=>'Odell Brewing Company',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Odell Curmudgeon\'s Nip',
'style'=>'Old Ale',
'brewery'=>'Odell Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ceres Royal Stout (Ceres Extra Strong Stout)',
'style'=>'Foreign / Export Stout',
'brewery'=>'Ceres Brewery (Royal Unibrew)',
'abv'=>'7.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tennent\'s Stout',
'style'=>'Milk / Sweet Stout',
'brewery'=>'Tennent Caledonian Breweries',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Guinness Bitter Draft',
'style'=>'English Bitter',
'brewery'=>'Guinness Ltd.',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Foxy\'s Premium Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'Virgin Islands Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dragon Stout',
'style'=>'Foreign / Export Stout',
'brewery'=>'Desnoes & Geddes Limited',
'abv'=>'7.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blackbeard Ale',
'style'=>'English Pale Ale',
'brewery'=>'Virgin Islands Brewing Co.',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Carib Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'Carib Brewery Limited',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sweetwater 420 Extra Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'SweetWater Brewing Company',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Guinness Foreign Extra Stout',
'style'=>'Foreign / Export Stout',
'brewery'=>'Guinness Ltd.',
'abv'=>'7.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Guinness Draught',
'style'=>'Irish Dry Stout',
'brewery'=>'Guinness Ltd.',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Carnegie Porter 5,5%',
'style'=>'Baltic Porter',
'brewery'=>'Carlsberg Sverige AB',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Rollstone Red Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Z Street Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Patriot Pilsner',
'style'=>'Czech Pilsener',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Boston Victory Bock',
'style'=>'Bock',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Schneider Weisse Tap 4 Mein Grünes',
'style'=>'Hefeweizen',
'brewery'=>'Weisses Bräuhaus G. Schneider & Sohn GmbH',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Weihenstephaner Kristallweissbier',
'style'=>'Kristalweizen',
'brewery'=>'Bayerische Staatsbrauerei Weihenstephan',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Concord North Woods Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Concord Brewery',
'abv'=>'6.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Concord Porter',
'style'=>'American Porter',
'brewery'=>'Concord Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Schneider Weisse Tap 1 Mein Blondes',
'style'=>'Hefeweizen',
'brewery'=>'Weisses Bräuhaus G. Schneider & Sohn GmbH',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ziggy Socky Premium Lager Beer',
'style'=>'American Adjunct Lager',
'brewery'=>'Panther Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brugse Tripel',
'style'=>'Tripel',
'brewery'=>'Brouwerij De Gouden Boom',
'abv'=>'9.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tsingtao',
'style'=>'American Adjunct Lager',
'brewery'=>'Tsingtao Brewery Co., Ltd.',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Captain Swain\'s Extra Stout',
'style'=>'Foreign / Export Stout',
'brewery'=>'Cisco Brewers Inc.',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mocha Java Stout',
'style'=>'American Stout',
'brewery'=>'Z Street Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Z Street Gold Ale',
'style'=>'Kölsch',
'brewery'=>'Z Street Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Entire Butt English Porter',
'style'=>'English Porter',
'brewery'=>'Salopian Brewing Company Ltd',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hacker-Pschorr Hefe Weisse Naturtrüb',
'style'=>'Hefeweizen',
'brewery'=>'Hacker-Pschorr Bräu GmbH',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Goudenband',
'style'=>'Flanders Oud Bruin',
'brewery'=>'Brouwerij Liefmans',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sapporo Reserve',
'style'=>'Euro Pale Lager',
'brewery'=>'Sapporo Breweries Ltd.',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Buzzards Bay Olde Buzzard Lager',
'style'=>'Dortmunder / Export Lager',
'brewery'=>'Buzzards Bay Brewing',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samichlaus Classic Bier',
'style'=>'Doppelbock',
'brewery'=>'Brauerei Schloss Eggenberg',
'abv'=>'14.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s Organically Produced Lager Beer',
'style'=>'Euro Pale Lager',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Weihenstephaner Korbinian',
'style'=>'Doppelbock',
'brewery'=>'Bayerische Staatsbrauerei Weihenstephan',
'abv'=>'7.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pride Of Romsey I.P.A.',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Hampshire Brewery Ltd',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s Organic Best Ale',
'style'=>'English Pale Ale',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Smith\'s Imperial Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Samuel Smith Old Brewery (Tadcaster)',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Springfest',
'style'=>'Altbier',
'brewery'=>'Widmer Brothers Brewing Company',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dornbusch Bock',
'style'=>'Bock',
'brewery'=>'Dornbusch Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Artevelde',
'style'=>'Belgian Dark Ale',
'brewery'=>'Brouwerij Huyghe',
'abv'=>'7.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'ESB Cellar Reserve',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Boston Beer Works - Canal Street',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon Milk Chocolate Stout',
'style'=>'American Stout',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brooklyn Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Brooklyn Brewery',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brew Moon 90 Schilling Scotch Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Brew Moon Restaurant & Microbrewery',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Imperial Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Presidential Weizenbock',
'style'=>'Weizenbock',
'brewery'=>'John Harvard\'s Brewery & Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Raftman',
'style'=>'Belgian Pale Ale',
'brewery'=>'Unibroue',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bell\'s Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Bell\'s Brewery, Inc.',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Holidale',
'style'=>'American Barleywine',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'9.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Riley\'s Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'Paper City Brewery Co., Inc.',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Ides High Gravity Malt Liquor',
'style'=>'American Malt Liquor',
'brewery'=>'Saint Ides Brewing Company',
'abv'=>'8.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Radeberger Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Radeberger Exportbierbrauerei',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Yebisu (Premium)',
'style'=>'Dortmunder / Export Lager',
'brewery'=>'Sapporo Breweries Ltd.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hefe Weiss',
'style'=>'Hefeweizen',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smooth Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Goose Island Beer Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blue',
'style'=>'Belgian Strong Dark Ale',
'brewery'=>'Goose Island Beer Co.',
'abv'=>'8.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Sebastiaan Golden',
'style'=>'Tripel',
'brewery'=>'Brouwerij Sterkens N.V.',
'abv'=>'7.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Kirin Lager',
'style'=>'Japanese Rice Lager',
'brewery'=>'Kirin Brewery Company, Limited',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Weihenstephaner Hefeweissbier Dunkel',
'style'=>'Dunkelweizen',
'brewery'=>'Bayerische Staatsbrauerei Weihenstephan',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Magnum',
'style'=>'American Malt Liquor',
'brewery'=>'Miller Brewing Co.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mickey\'s',
'style'=>'American Malt Liquor',
'brewery'=>'Miller Brewing Co.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bass Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Bass Brewers Limited',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Devil',
'style'=>'English Pale Ale',
'brewery'=>'Wychwood Brewery Company Ltd',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'De Dolle Oerbier',
'style'=>'Belgian Strong Dark Ale',
'brewery'=>'Brouwerij De Dolle Brouwers',
'abv'=>'9.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sapporo Draft Beer',
'style'=>'Japanese Rice Lager',
'brewery'=>'Sapporo Breweries Ltd.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Monkman\'s Slaughter Ale',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Cropton Brewery',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Odell Cutthroat Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Odell Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'De Dolle Stille Nacht',
'style'=>'Belgian Strong Pale Ale',
'brewery'=>'Brouwerij De Dolle Brouwers',
'abv'=>'12.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Georgenbräu  Keller Bier',
'style'=>'Kellerbier / Zwickelbier',
'brewery'=>'St. Georgenbräu',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saranac Scotch Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Matt Brewing Company',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Peter\'s English Ale',
'style'=>'English Pale Ale',
'brewery'=>'St. Peter\'s Brewery Co Ltd',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Honey Almond Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Z Street Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nutfield Frank Jones Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Old Nutfield Brewing Company, Ltd.',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Steelhead Extra Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Mad River Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Caffrey\'s Irish Ale',
'style'=>'Irish Red Ale',
'brewery'=>'Thomas Caffrey Brewing Co.',
'abv'=>'3.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Pauli N. A.',
'style'=>'Low Alcohol Beer',
'brewery'=>'St. Pauli Brauerei C.L. Wilh. Brandt Gmbh & Co.',
'abv'=>'0.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sapporo Original Draft Beer',
'style'=>'Japanese Rice Lager',
'brewery'=>'Sapporo Breweries Ltd.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bluebird Bitter',
'style'=>'English Bitter',
'brewery'=>'Coniston Brewing Co. Ltd',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Jamaica Sunset India Pale Ale',
'style'=>'American IPA',
'brewery'=>'Mad River Brewing Company',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'He\'Brew Messiah Stout',
'style'=>'American Stout',
'brewery'=>'Shmaltz Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sagres Cerveja',
'style'=>'American Adjunct Lager',
'brewery'=>'Sociedade Central de Cervejas',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dundee Original Honey Brown Lager',
'style'=>'American Amber / Red Lager',
'brewery'=>'Genesee Brewing Co. / Dundee Brewing Co.',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'5.25'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Crystal Lager Beer',
'style'=>'Czech Pilsener',
'brewery'=>'První Budějovický Pivovar Samson',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brooklyn Ale / Pennant Ale \'55',
'style'=>'English Pale Ale',
'brewery'=>'Brooklyn Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Coors Light',
'style'=>'Light Lager',
'brewery'=>'Coors Brewing Company',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Peter\'s Old-Style Porter',
'style'=>'English Porter',
'brewery'=>'St. Peter\'s Brewery Co Ltd',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Kinsale Irish Lager',
'style'=>'Euro Pale Lager',
'brewery'=>'Kinsale Brewing Company,',
'abv'=>'4.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams I.P.A.',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'5.93'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Peter\'s Wheat Beer',
'style'=>'American Pale Wheat Ale',
'brewery'=>'St. Peter\'s Brewery Co Ltd',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Clausthaler Golden Amber',
'style'=>'Low Alcohol Beer',
'brewery'=>'Binding-Brauerei AG',
'abv'=>'0.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'McNeill\'s Alle Tage Altbier',
'style'=>'Altbier',
'brewery'=>'McNeill\'s Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Genesee 12 Horse Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Genesee Brewing Co. / Dundee Brewing Co.',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Samuel Adams Scotch Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Boston Beer Company (Samuel Adams)',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tecate',
'style'=>'American Adjunct Lager',
'brewery'=>'Cervecería Cuauhtémoc Moctezuma, S.A. de C.V.',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Killarney\'s Red Lager',
'style'=>'American Amber / Red Lager',
'brewery'=>'Anheuser-Busch',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Michael Shea\'s Irish Amber',
'style'=>'Euro Dark Lager',
'brewery'=>'Genesee Brewing Co. / Dundee Brewing Co.',
'abv'=>'4.62'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Genny Light',
'style'=>'Light Lager',
'brewery'=>'Genesee Brewing Co. / Dundee Brewing Co.',
'abv'=>'3.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shakemantle Ginger Ale',
'style'=>'Herbed / Spiced Beer',
'brewery'=>'Freeminer Brewery Ltd.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Trappist Westvleteren 8 (VIII)',
'style'=>'Dubbel',
'brewery'=>'Brouwerij Westvleteren (Sint-Sixtusabdij van Westvleteren)',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tremont Bitter',
'style'=>'English Bitter',
'brewery'=>'Tremont Brewery / Atlantic Coast Brewing, Ltd.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Himalayan Blue',
'style'=>'American Adjunct Lager',
'brewery'=>'Yuksom Breweries, Ltd.',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Harp Lager',
'style'=>'Euro Pale Lager',
'brewery'=>'Guinness Ltd.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Genesee Beer',
'style'=>'American Adjunct Lager',
'brewery'=>'Genesee Brewing Co. / Dundee Brewing Co.',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Birra Moretti',
'style'=>'Euro Pale Lager',
'brewery'=>'Birra Moretti (Heineken)',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gösser',
'style'=>'Euro Pale Lager',
'brewery'=>'Brau Union Österreich AG',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hacker-Pschorr Münchner Hell',
'style'=>'Munich Helles Lager',
'brewery'=>'Hacker-Pschorr Bräu GmbH',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hamm\'s',
'style'=>'American Adjunct Lager',
'brewery'=>'Hamm\'s Brewing Co.',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Moretti La Rossa Birra Doppio Malto',
'style'=>'Doppelbock',
'brewery'=>'Birra Moretti (Heineken)',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Chouffe-Bok',
'style'=>'Bock',
'brewery'=>'Brasserie d\'Achouffe',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hacker-Pschorr Kristall Weisse',
'style'=>'Kristalweizen',
'brewery'=>'Hacker-Pschorr Bräu GmbH',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Vuuve',
'style'=>'Witbier',
'brewery'=>'Brouwerij Smisje',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Engine Oil',
'style'=>'English Porter',
'brewery'=>'Harviestoun Brewery Ltd.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ballantine XXX Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Pabst Brewing Company',
'abv'=>'4.85'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hen\'s Tooth',
'style'=>'English Strong Ale',
'brewery'=>'Greene King / Morland Brewery',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pollenator',
'style'=>'English Pale Ale',
'brewery'=>'Long Trail Brewing Co.',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Moor Porter',
'style'=>'American Porter',
'brewery'=>'Cisco Brewers Inc.',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saranac Caramel Porter',
'style'=>'American Porter',
'brewery'=>'Matt Brewing Company',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saranac Adirondack Lager',
'style'=>'German Pilsener',
'brewery'=>'Matt Brewing Company',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Franziskaner Club-Weisse Kristalklar',
'style'=>'Kristalweizen',
'brewery'=>'Spaten-Franziskaner-Bräu',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saranac Black & Tan',
'style'=>'Black & Tan',
'brewery'=>'Matt Brewing Company',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Casco Bay Winter Ale (Old Port Ale)',
'style'=>'Winter Warmer',
'brewery'=>'Casco Bay Brewing Co.',
'abv'=>'7.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Columbus Nut Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Columbus Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'George Killian\'s Irish Red',
'style'=>'American Amber / Red Lager',
'brewery'=>'Coors Brewing Company',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Abbot Ale',
'style'=>'English Pale Ale',
'brewery'=>'Greene King / Morland Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'McEwan\'s India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'The Caledonian Brewery Company Limited',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Berkshire Ale Traditional Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'6.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Murphy\'s Irish Red',
'style'=>'Irish Red Ale',
'brewery'=>'Murphy Brewery Ireland Limited',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saranac Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Matt Brewing Company',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Centennial Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Coeur d\'Alene Brewing Co.',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lagunitas IPA',
'style'=>'American IPA',
'brewery'=>'Lagunitas Brewing Company',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Foster\'s Special Bitter',
'style'=>'English Bitter',
'brewery'=>'Foster\'s Group Limited',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Foster\'s Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'Foster\'s Group Limited',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Carolina Blonde',
'style'=>'American Blonde Ale',
'brewery'=>'Carolina Beer Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Yuengling Porter (Dark Brewed)',
'style'=>'American Porter',
'brewery'=>'Yuengling Brewery',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'San Miguel Premium Lager',
'style'=>'American Adjunct Lager',
'brewery'=>'San Miguel Brewery Inc.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Berkshire Maibock Lager',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Franziskaner Hefe-Weisse Dunkel',
'style'=>'Dunkelweizen',
'brewery'=>'Spaten-Franziskaner-Bräu',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Summer Of Lager',
'style'=>'Munich Helles Lager',
'brewery'=>'Cisco Brewers Inc.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Theakston Old Peculier',
'style'=>'Old Ale',
'brewery'=>'T & R Theakston Ltd.',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Beamish Irish Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'Beamish & Crawford Plc.',
'abv'=>'4.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ipswich 1722 Commemorative Porter',
'style'=>'American Porter',
'brewery'=>'Ipswich Ale Brewery',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nutfield Hopfest',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Old Nutfield Brewing Company, Ltd.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Tucher Bajuvator Doppelbock',
'style'=>'Doppelbock',
'brewery'=>'Brauerei Tucher Brau',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blue Paddle Pilsner',
'style'=>'Czech Pilsener',
'brewery'=>'New Belgium Brewing',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gold Stock Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'New England Brewing Co.',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Warsteiner Premium Verum',
'style'=>'German Pilsener',
'brewery'=>'Warsteiner Brauerei',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'High Desert Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Bend Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Metolius Golden Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Bend Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Outback Old Ale',
'style'=>'Old Ale',
'brewery'=>'Bend Brewing Company',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pinnacle Porter',
'style'=>'American Porter',
'brewery'=>'Bend Brewing Company',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Full Sail IPA',
'style'=>'American IPA',
'brewery'=>'Full Sail Brewery & Tasting Room & Pub',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Full Sail Brewery & Tasting Room & Pub',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Ruth',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Hair of the Dog Brewing Company / Brewery and Tasting Room',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Adam',
'style'=>'Old Ale',
'brewery'=>'Hair of the Dog Brewing Company / Brewery and Tasting Room',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Prime Time Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Big Time Brewery & Alehouse',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Atlas Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Big Time Brewery & Alehouse',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Coal Creek Porter',
'style'=>'American Porter',
'brewery'=>'Big Time Brewery & Alehouse',
'abv'=>'4.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bhagwan\'s Best IPA',
'style'=>'American IPA',
'brewery'=>'Big Time Brewery & Alehouse',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Flagship Red Alt Ale',
'style'=>'Altbier',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Clipper Gold Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Salmon Bay ESB (Jane\'s Bitter)',
'style'=>'English Bitter',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Islander Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Islander Pale Ale Dry-Hopped',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Nightwatch Dark Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bosun\'s Black Porter',
'style'=>'American Porter',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Imperial Pale Ale',
'style'=>'American Double / Imperial IPA',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'7.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Portage Bay Pilsener',
'style'=>'German Pilsener',
'brewery'=>'Maritime Pacific Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pike Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pike India Pale Ale',
'style'=>'American IPA',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Naughty Nellie',
'style'=>'American Blonde Ale',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pike Kilt Lifter Scotch Style Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pike Old Bawdy Barley Wine',
'style'=>'American Barleywine',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'9.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pike Old 89 Nitro Porter',
'style'=>'American Porter',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pike Weisse',
'style'=>'Hefeweizen',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'3.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pike Street XXXXX Stout',
'style'=>'Foreign / Export Stout',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pike Bootleg Brown',
'style'=>'English Brown Ale',
'brewery'=>'Pike Pub & Brewery',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Half Ton Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Thomas Kemper Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Weizen Berry',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Thomas Kemper Brewing Co.',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Happy Cow Winterbräu',
'style'=>'Winter Warmer',
'brewery'=>'Thomas Kemper Brewing Co.',
'abv'=>'6.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bad Goat Bock',
'style'=>'Bock',
'brewery'=>'Thomas Kemper Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Big Fat Tuba Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Thomas Kemper Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Viking Fest Summer Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Thomas Kemper Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mason Jar Märzen',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Thomas Kemper Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Singha',
'style'=>'Euro Pale Lager',
'brewery'=>'Boon Rawd Brewery Co., Ltd',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wisconsin Amber',
'style'=>'American Amber / Red Lager',
'brewery'=>'Capital Brewery',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Capital Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Capitol 1900',
'style'=>'American Pale Lager',
'brewery'=>'Capital Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bavarian Lager',
'style'=>'Munich Helles Lager',
'brewery'=>'Capital Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Capital Pilsner',
'style'=>'German Pilsener',
'brewery'=>'Capital Brewery',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Kloster Weizen',
'style'=>'Hefeweizen',
'brewery'=>'Capital Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Maibock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Capital Brewery',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fest (Summer Fest)',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Capital Brewery',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Capital Brewery',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Winter Skål',
'style'=>'American Amber / Red Lager',
'brewery'=>'Capital Brewery',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dark Doppelbock',
'style'=>'Doppelbock',
'brewery'=>'Capital Brewery',
'abv'=>'7.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Weizen Doppelbock',
'style'=>'Weizenbock',
'brewery'=>'Capital Brewery',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Autumnal Fire',
'style'=>'Doppelbock',
'brewery'=>'Capital Brewery',
'abv'=>'7.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wild Rice',
'style'=>'Herbed / Spiced Beer',
'brewery'=>'Capital Brewery',
'abv'=>'5.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pub Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pale Lager',
'style'=>'American Pale Lager',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mai Bock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'India Pale Ale',
'style'=>'American IPA',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'7.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dopple Bock',
'style'=>'Doppelbock',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'7.85'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brewmaster\'s Premium Reserve Russian Imperial Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'7.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Winter Brew',
'style'=>'Bock',
'brewery'=>'Sprecher Brewing Company',
'abv'=>'5.75'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Carrabassett Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Casco Bay Brewing Co.',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Victory Lager',
'style'=>'Munich Helles Lager',
'brewery'=>'Victory Brewing Company',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Golden Monkey',
'style'=>'Tripel',
'brewery'=>'Victory Brewing Company',
'abv'=>'9.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hallertauer Pils',
'style'=>'German Pilsener',
'brewery'=>'Victory Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hop Devil Ale',
'style'=>'American IPA',
'brewery'=>'Victory Brewing Company',
'abv'=>'6.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mad King\'s Weiss',
'style'=>'Hefeweizen',
'brewery'=>'Victory Brewing Company',
'abv'=>'6.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Moonglow Weizenbock',
'style'=>'Weizenbock',
'brewery'=>'Victory Brewing Company',
'abv'=>'8.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Horizontal',
'style'=>'American Barleywine',
'brewery'=>'Victory Brewing Company',
'abv'=>'11.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Prima Pils',
'style'=>'German Pilsener',
'brewery'=>'Victory Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Boisterous',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Victory Brewing Company',
'abv'=>'7.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Victorious',
'style'=>'Doppelbock',
'brewery'=>'Victory Brewing Company',
'abv'=>'7.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Storm King Stout',
'style'=>'American Double / Imperial Stout',
'brewery'=>'Victory Brewing Company',
'abv'=>'9.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sunrise Weiss',
'style'=>'Hefeweizen',
'brewery'=>'Victory Brewing Company',
'abv'=>'5.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Whirlwind Witbier',
'style'=>'Witbier',
'brewery'=>'Victory Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Victory Dark Lager',
'style'=>'Munich Dunkel Lager',
'brewery'=>'Victory Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Festbier',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Victory Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Aecht Schlenkerla Rauchbier Weizen',
'style'=>'Rauchbier',
'brewery'=>'Brauerei Heller-Trum / Schlenkerla',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Abbey Dubbel',
'style'=>'Dubbel',
'brewery'=>'Flying Fish Brewing Company',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pine Mountain Pils',
'style'=>'German Pilsener',
'brewery'=>'Deschutes Brewery',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Montgomery Blonde',
'style'=>'American Blonde Ale',
'brewery'=>'Montgomery Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Goat Hill Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'Montgomery Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Riverboat Red',
'style'=>'American Amber / Red Ale',
'brewery'=>'Montgomery Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wipe Out Stout',
'style'=>'American Stout',
'brewery'=>'Montgomery Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Plainsman IPA',
'style'=>'American IPA',
'brewery'=>'Olde Auburn Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Auburn Amber',
'style'=>'American Amber / Red Ale',
'brewery'=>'Olde Auburn Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Striper Stout',
'style'=>'American Stout',
'brewery'=>'Olde Auburn Ale House',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Borealis Classic Pilsener',
'style'=>'German Pilsener',
'brewery'=>'Borealis Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Blonde',
'style'=>'American Blonde Ale',
'brewery'=>'Glacier Brewhouse',
'abv'=>'4.76'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Glacier Brewhouse',
'abv'=>'5.67'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'India Pale Ale',
'style'=>'American IPA',
'brewery'=>'Glacier Brewhouse',
'abv'=>'6.35'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'Glacier Brewhouse',
'abv'=>'5.61'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bohemian Pilsner',
'style'=>'Czech Pilsener',
'brewery'=>'Glacier Brewhouse',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Allagash Speciale Reserve',
'style'=>'Belgian Pale Ale',
'brewery'=>'Allagash Brewing Company',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Oatmeal Stout',
'style'=>'Oatmeal Stout',
'brewery'=>'New England Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bar Harbor Real Ale',
'style'=>'English Brown Ale',
'brewery'=>'Atlantic Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Moosehead Lager',
'style'=>'American Pale Lager',
'brewery'=>'Moosehead Breweries Ltd.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Trippel Belgian Style Ale',
'style'=>'Tripel',
'brewery'=>'New Belgium Brewing',
'abv'=>'7.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Korma Blonde Ale',
'style'=>'Belgian Pale Ale',
'brewery'=>'Brasserie Castelain',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Double Bastard Ale',
'style'=>'American Strong Ale',
'brewery'=>'Stone Brewing Co.',
'abv'=>'11.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gold Rush Golden Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Snowgoose Restaurant & Pub / Sleeping Lady Brewing Company',
'abv'=>'4.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fish On! IPA',
'style'=>'American IPA',
'brewery'=>'Snowgoose Restaurant & Pub / Sleeping Lady Brewing Company',
'abv'=>'6.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Portage Porter',
'style'=>'American Porter',
'brewery'=>'Snowgoose Restaurant & Pub / Sleeping Lady Brewing Company',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Braveheart Scottish Ale',
'style'=>'Scottish Ale',
'brewery'=>'Snowgoose Restaurant & Pub / Sleeping Lady Brewing Company',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Live Oak Pilz',
'style'=>'Czech Pilsener',
'brewery'=>'Live Oak Brewing Company',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Live Oak HefeWeizen',
'style'=>'Hefeweizen',
'brewery'=>'Live Oak Brewing Company',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Live Oak Oaktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Live Oak Brewing Company',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Live Oak Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Live Oak Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saint Arnold Amber Ale',
'style'=>'American Amber / Red Ale',
'brewery'=>'Saint Arnold Brewing Company',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saint Arnold Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Saint Arnold Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saint Arnold Christmas Ale',
'style'=>'Old Ale',
'brewery'=>'Saint Arnold Brewing Company',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saint Arnold Winter Stout',
'style'=>'American Stout',
'brewery'=>'Saint Arnold Brewing Company',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saint Arnold Spring Bock',
'style'=>'Bock',
'brewery'=>'Saint Arnold Brewing Company',
'abv'=>'6.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saint Arnold Summer Pils',
'style'=>'German Pilsener',
'brewery'=>'Saint Arnold Brewing Company',
'abv'=>'4.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Saint Arnold Oktoberfest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Saint Arnold Brewing Company',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shiner Winter Ale',
'style'=>'American Dark Wheat Ale',
'brewery'=>'Spoetzl Brewery',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shiner Blonde',
'style'=>'American Pale Lager',
'brewery'=>'Spoetzl Brewery',
'abv'=>'4.40'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shiner Honey Wheat',
'style'=>'Witbier',
'brewery'=>'Spoetzl Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Casco Bay Summer Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Casco Bay Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Jeezum Jim',
'style'=>'English Pale Mild Ale',
'brewery'=>'Magic Hat Brewing Company',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shelter Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Dogfish Head Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sudwerk Doppel Bock',
'style'=>'Doppelbock',
'brewery'=>'Sudwerk Restaurant and Brewery',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Stan\'s Dark',
'style'=>'Altbier',
'brewery'=>'St. Stan\'s Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Full Curl Wee Heavy Scotch Style Ale',
'style'=>'Scotch Ale / Wee Heavy',
'brewery'=>'Midnight Sun Brewing Co.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Wolf Spirit Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Midnight Sun Brewing Co.',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fireweed Honey Wheat Beer',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Midnight Sun Brewing Co.',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Kodiak Brown Ale',
'style'=>'American Brown Ale',
'brewery'=>'Midnight Sun Brewing Co.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mammoth Extra Stout',
'style'=>'Foreign / Export Stout',
'brewery'=>'Midnight Sun Brewing Co.',
'abv'=>'7.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Whiskers Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Midnight Sun Brewing Co.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Sockeye Red IPA',
'style'=>'American IPA',
'brewery'=>'Midnight Sun Brewing Co.',
'abv'=>'5.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Quelque Chose',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Unibroue',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Our Special Ale 1999 (Anchor Christmas Ale)',
'style'=>'Winter Warmer',
'brewery'=>'Anchor Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Two Hearted Ale',
'style'=>'American IPA',
'brewery'=>'Bell\'s Brewery, Inc.',
'abv'=>'7.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bell\'s Oberon Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Bell\'s Brewery, Inc.',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'India Pale Ale',
'style'=>'American IPA',
'brewery'=>'New Knoxville Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Porter',
'style'=>'American Porter',
'brewery'=>'New Knoxville Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Honey Wheat Ale',
'style'=>'American Pale Wheat Ale',
'brewery'=>'New Knoxville Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'XX Pale Ale',
'style'=>'English Pale Ale',
'brewery'=>'New Knoxville Brewing Company',
'abv'=>'5.25'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Alpenglow Amber',
'style'=>'American Amber / Red Ale',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Barley Wine',
'style'=>'American Barleywine',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fairweather IPA',
'style'=>'American IPA',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'6.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Hefeweizen',
'style'=>'Hefeweizen',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Klondike Golden',
'style'=>'American Blonde Ale',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'4.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Midtown Brown',
'style'=>'English Brown Ale',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pipeline Stout',
'style'=>'American Stout',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'5.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Prince William\'s Porter',
'style'=>'American Porter',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Polar Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Raspberry Wheat',
'style'=>'Fruit / Vegetable Beer',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'4.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Northern Lights Amber',
'style'=>'American Amber / Red Ale',
'brewery'=>'Broken Tooth Brewing',
'abv'=>'4.70'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Berkshire Russian Imperial Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Berkshire Brewing Company Inc.',
'abv'=>'8.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Buzzards Bay Olde Buzzard Pale Ale',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Buzzards Bay Brewing',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lion Stout',
'style'=>'Foreign / Export Stout',
'brewery'=>'Ceylon / Lion Brewery Limited',
'abv'=>'8.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'De Dolle Dulle Teve (Mad Bitch)',
'style'=>'Tripel',
'brewery'=>'Brouwerij De Dolle Brouwers',
'abv'=>'10.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bell\'s Kalamazoo Stout',
'style'=>'American Stout',
'brewery'=>'Bell\'s Brewery, Inc.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Chocolate Stout',
'style'=>'American Stout',
'brewery'=>'Rogue Ales',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Redhook ESB',
'style'=>'Extra Special / Strong Bitter (ESB)',
'brewery'=>'Redhook Ale Brewery',
'abv'=>'5.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Export Ale',
'style'=>'American Blonde Ale',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'5.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Altbier',
'style'=>'Altbier',
'brewery'=>'Bluegrass Brewing Co. - East St. Matthew\'s',
'abv'=>'4.19'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'American Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Bluegrass Brewing Co. - East St. Matthew\'s',
'abv'=>'5.79'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dark Star Porter',
'style'=>'English Porter',
'brewery'=>'Bluegrass Brewing Co. - East St. Matthew\'s',
'abv'=>'5.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Flatpicker Bohemian Pilsner',
'style'=>'Czech Pilsener',
'brewery'=>'Bluegrass Brewing Co. - East St. Matthew\'s',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Old Heathen Imperial Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Weyerbacher Brewing Co.',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'AleSmith Weizenbock',
'style'=>'Weizenbock',
'brewery'=>'AleSmith Brewing Company',
'abv'=>'8.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'MacTarnahan\'s Blackwatch Cream Porter',
'style'=>'American Porter',
'brewery'=>'Portland Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Bourbon Barrel Stout',
'style'=>'Milk / Sweet Stout',
'brewery'=>'Pipkin Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pipkin Brown Ale',
'style'=>'English Brown Ale',
'brewery'=>'Pipkin Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pipkin Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Pipkin Brewery',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Shipyard Light Ale (Pre-2004)',
'style'=>'American Blonde Ale',
'brewery'=>'Shipyard Brewing Co.',
'abv'=>'3.90'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Geary\'s Summer Ale',
'style'=>'Kölsch',
'brewery'=>'D.L. Geary Brewing Company',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Brooklyner Weisse',
'style'=>'Hefeweizen',
'brewery'=>'Brooklyn Brewery',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Boarding House Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'The Brewery Exchange',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Mill City IPA',
'style'=>'American IPA',
'brewery'=>'The Brewery Exchange',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Perkuno\'s Hammer Imperial Porter',
'style'=>'Baltic Porter',
'brewery'=>'Heavyweight Brewing Co.',
'abv'=>'8.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Dogtown Pale Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Lagunitas Brewing Company',
'abv'=>'6.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Gritty McDuff\'s Black Fly Stout',
'style'=>'Irish Dry Stout',
'brewery'=>'Gritty McDuff\'s Brewing Company',
'abv'=>'4.10'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Summer Wheat',
'style'=>'Hefeweizen',
'brewery'=>'Z Street Brewing Company',
'abv'=>'N/A'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Lakeside British Ale',
'style'=>'English Brown Ale',
'brewery'=>'Coeur d\'Alene Brewing Co.',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stoudts Honey Double MaiBock',
'style'=>'Maibock / Helles Bock',
'brewery'=>'Stoudts Brewing Co.',
'abv'=>'6.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Chicory Stout',
'style'=>'American Stout',
'brewery'=>'Dogfish Head Brewery',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stoudt\'s Fest',
'style'=>'Märzen / Oktoberfest',
'brewery'=>'Stoudts Brewing Co.',
'abv'=>'4.75'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Smooth India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'Goose Island Beer Co.',
'abv'=>'5.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Honker\'s Ale',
'style'=>'English Bitter',
'brewery'=>'Goose Island Beer Co.',
'abv'=>'4.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Pride & Joy Mild Ale',
'style'=>'American Pale Ale (APA)',
'brewery'=>'Three Floyds Brewing Co. & Brewpub',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Robert The Bruce Scottish Ale',
'style'=>'Scottish Ale',
'brewery'=>'Three Floyds Brewing Co. & Brewpub',
'abv'=>'6.50'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Stone Imperial Russian Stout',
'style'=>'Russian Imperial Stout',
'brewery'=>'Stone Brewing Co.',
'abv'=>'10.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Indian Brown Ale',
'style'=>'American Brown Ale',
'brewery'=>'Dogfish Head Brewery',
'abv'=>'7.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'High Rollers Wheat',
'style'=>'American Pale Wheat Ale',
'brewery'=>'Anderson Valley Brewing Company',
'abv'=>'5.30'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Belhaven Scottish Ale',
'style'=>'Scottish Ale',
'brewery'=>'Belhaven Brewery Company Ltd.',
'abv'=>'5.20'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'St. Andrew\'s Ale',
'style'=>'Scottish Ale',
'brewery'=>'Belhaven Brewery Company Ltd.',
'abv'=>'4.60'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Beck\'s Dark',
'style'=>'Munich Dunkel Lager',
'brewery'=>'Brauerei Beck & Co.',
'abv'=>'4.80'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Fuller\'s Summer Ale',
'style'=>'English Pale Ale',
'brewery'=>'Fuller Smith & Turner PLC',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'Heineken Dark Lager',
'style'=>'Euro Dark Lager',
'brewery'=>'Heineken Nederland B.V.',
'abv'=>'5.00'));
$beer->save();

$beer=Beer::create(array('beer_name'=>'India Pale Ale',
'style'=>'English India Pale Ale (IPA)',
'brewery'=>'King & Barnes Ltd.',
'abv'=>'N/A'));
$beer->save();




    }

}