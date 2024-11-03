<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Poplatok za bankový prevod';
$_['heading_getting_started']              = 'Začíname';
$_['heading_setup']                        = 'Nastavenie poplatok za bankový prevod';
$_['heading_faq']                          = 'Často kladené otázky';
$_['heading_contact']                      = 'Kontaktujte podporu';

// Text
$_['text_extension']                       = 'Rozšírenia';
$_['text_success']                         = 'Úspech: Upravil(a) ste celkový poplatok za bankový prevod!';
$_['text_edit']                            = 'Upraviť celkový poplatok za bankový prevod';
$_['text_getting_started']                 = '<p><strong>Prehľad:</strong> Rozšírenie Playful Sparkle - Poplatok za bankový prevod pre OpenCart 3.x umožňuje vlastníkom obchodov pridať konfigurovateľný poplatok k objednávkam využívajúcim metódu platby bankovým prevodom. Táto funkcia pomáha vyrovnať náklady na spracovanie bankových prevodov a poskytuje väčšiu kontrolu nad celkovými nákladmi na objednávky.</p><p><strong>Požiadavky:</strong> OpenCart 3.x+, PHP 7.3 alebo vyšší, a metóda platby bankovým prevodom musí byť povolená v nastaveniach obchodu.</p>';
$_['text_setup']                           = '<p>Na konfiguráciu zadajte požadovanú výšku poplatku (vrátane DPH), vyberte príslušnú daňovú triedu a aktivujte rozšírenie. Poplatok sa automaticky aplikuje a prispôsobí nastaveniam DPH vo vašom obchode, pričom sa prepočíta čistý poplatok na základe uvedenej sadzby DPH. Napríklad, ak je poplatok nastavený na 5 EUR a sadzba DPH je 20%, poplatok sa pri pokladni prepočíta na 4.17 EUR (čistý).</p>';
$_['text_faq']                             = '<details><summary>Je poplatok zadaný s DPH alebo bez DPH?</summary>Výška poplatku by mala byť zadaná vrátane DPH. Rozšírenie automaticky prepočíta čistú sumu na základe nastavení DPH obchodu; napríklad, poplatok 5 EUR so sadzbou DPH 20% sa pri pokladni prepočíta na 4.17 EUR (čistý).</details><details><summary>Môžem aplikovať rôzne poplatky pre iné metódy platby?</summary>Nie, toto rozšírenie sa aplikuje iba na objednávky využívajúce metódu platby bankovým prevodom.</details><details><summary>Bude poplatok zobrazený samostatne v súhrne objednávky?</summary>Áno, poplatok sa zobrazí ako samostatná položka v súhrne objednávky počas pokladne, pričom úpravy DPH sa vykonajú podľa nastavení DPH obchodu.</details>';
$_['text_contact']                         = '<p>Pre ďalšiu pomoc, prosím, kontaktujte náš tím podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentácia:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentácia pre používateľov</a></li></ul>';

// Tab
$_['tab_general']                          = 'Všeobecné';
$_['tab_help_and_support']                 = 'Pomoc &amp; Podpora';

// Entry
$_['entry_fee']                            = 'Poplatok (s daňou)';
$_['entry_tax_class']                      = 'Daňová trieda';
$_['entry_status']                         = 'Stav';
$_['entry_sort_order']                     = 'Poradie triedenia';

// Error
$_['error_total_ps_bank_transfer_fee_fee'] = 'Poplatok nesmie byť prázdny, menší alebo rovný nule';

// Error
$_['error_permission']                     = 'Upozornenie: Nemáte oprávnenie upravovať celkový poplatok za bankový prevod!';
