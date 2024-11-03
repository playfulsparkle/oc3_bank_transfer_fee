<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Bank átutalási díj';
$_['heading_getting_started']              = 'Kezdő lépések';
$_['heading_setup']                        = 'Bank átutalási díj beállítása';
$_['heading_faq']                          = 'GYIK';
$_['heading_contact']                      = 'Kapcsolatfelvétel a támogatással';

// Text
$_['text_extension']                       = 'Bővítmények';
$_['text_success']                         = 'Siker: Módosította a bank átutalási díjat!';
$_['text_edit']                            = 'Bank átutalási díj szerkesztése';
$_['text_getting_started']                 = '<p><strong>Áttekintés:</strong> A Playful Sparkle - Banki Átutalási Díj kiterjesztés az OpenCart 3.x-hoz lehetőséget biztosít az áruház tulajdonosainak, hogy testreszabható díjat adjanak az olyan rendelésekhez, ahol a banki átutalás fizetési mód van kiválasztva. Ez a funkció segít ellensúlyozni az átutalások feldolgozási költségeit, és nagyobb kontrollt biztosít a végösszeg felett.</p><p><strong>Követelmények:</strong> OpenCart 3.x+, PHP 7.3 vagy újabb verzió, valamint a banki átutalás fizetési mód engedélyezése az áruház beállításaiban.</p>';
$_['text_setup']                           = '<p>A konfigurációhoz adja meg a kívánt díj összegét (Áfá-val), válassza ki a megfelelő adóosztályt, majd engedélyezze a kiterjesztést. A díj automatikusan hozzáadódik és igazodik az áruház adóbeállításaihoz, a nettó összeg újraszámításával a megadott adókulcs alapján. Például, ha a díj 5 EUR és az adókulcs 20%, akkor a díj 4,17 EUR (nettó) összegre módosul a fizetésnél.</p>';
$_['text_faq']                             = '<details><summary>A megadott díj Áfa-val vagy Áfa nélkül van megadva?</summary>A díjat Áfá-val együtt kell megadni. A kiterjesztés automatikusan újraszámítja a nettó összeget az áruház adóbeállításai alapján; például egy 5 EUR díj 20% adókulcs mellett 4,17 EUR (nettó) összegre módosul a fizetésnél.</details><details><summary>Alkalmazható-e külön díj más fizetési módokra?</summary>Nem, ez a kiterjesztés kizárólag a banki átutalás fizetési módnál alkalmaz díjat.</details><details><summary>Megjelenik-e külön tételként a díj a rendelés összesítőjében?</summary>Igen, a díj külön tételként jelenik meg a rendelés összesítőjében a fizetésnél, az áruház adóbeállításai szerint végrehajtott adókiigazításokkal.</details>';
$_['text_contact']                         = '<p>További segítségért kérjük, lépjen kapcsolatba támogatási csapatunkkal:</p><ul><li><strong>Kapcsolat:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentáció:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Felhasználói dokumentáció</a></li></ul>';

// Tab
$_['tab_general']                          = 'Általános';
$_['tab_help_and_support']                 = 'Segítség &amp; Támogatás';

// Entry
$_['entry_fee']                            = 'Díj (Áfa-val)';
$_['entry_tax_class']                      = 'Adóosztály';
$_['entry_status']                         = 'Állapot';
$_['entry_sort_order']                     = 'Rendezési sorrend';

// Error
$_['error_total_ps_bank_transfer_fee_fee'] = 'A díj nem lehet üres, kisebb vagy egyenlő nullával';

// Error
$_['error_permission']                     = 'Figyelem: Nincs jogosultsága módosítani a bank átutalási díjat!';
