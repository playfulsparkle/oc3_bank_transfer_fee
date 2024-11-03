<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Poplatek za bankovní převod';
$_['heading_getting_started']              = 'Začínáme';
$_['heading_setup']                        = 'Nastavení poplatek za bankovní převodu';
$_['heading_faq']                          = 'Často kladené otázky';
$_['heading_contact']                      = 'Kontaktujte podporu';

// Text
$_['text_extension']                       = 'Rozšíření';
$_['text_success']                         = 'Úspěch: Upravil(a) jste celkový poplatek za bankovní převod!';
$_['text_edit']                            = 'Upravit celkový poplatek za bankovní převod';
$_['text_getting_started']                 = '<p><strong>Přehled:</strong> Rozšíření Playful Sparkle - Poplatek za bankovní převod pro OpenCart 3.x umožňuje majitelům obchodů přidat konfigurovatelný poplatek k objednávkám s platební metodou Bankovní převod. Tato funkce pomáhá kompenzovat poplatky za zpracování bankovních převodů a poskytuje větší kontrolu nad celkovou částkou objednávky.</p><p><strong>Požadavky:</strong> OpenCart 3.x+, PHP 7.3 nebo vyšší a platební metoda Bankovní převod povolená v nastavení obchodu.</p>';
$_['text_setup']                           = '<p>Pro nastavení zadejte požadovanou částku poplatku (včetně DPH), vyberte příslušnou daňovou třídu a povolte rozšíření. Poplatek se automaticky aplikuje a přizpůsobí nastavení daní vašeho obchodu, přičemž čistý poplatek se přepočítá podle stanovené daňové sazby. Například pokud je poplatek nastaven na 5 EUR a daňová sazba je 20 %, poplatek se při placení přepočítá na 4,17 EUR (čistá částka).</p>';
$_['text_faq']                             = '<details><summary>Je částka poplatku zadávána s DPH nebo bez DPH?</summary>Částka poplatku by měla být zadána včetně DPH. Rozšíření automaticky přepočítá čistou částku podle nastavení daní v obchodě; například poplatek 5 EUR s 20% daňovou sazbou bude upraven na 4,17 EUR (čistá částka) při placení.</details><details><summary>Mohu nastavit různé poplatky pro jiné platební metody?</summary>Ne, toto rozšíření přidává poplatek pouze k objednávkám s platební metodou Bankovní převod.</details><details><summary>Zobrazí se poplatek samostatně v souhrnu objednávky?</summary>Ano, poplatek se zobrazí jako samostatná položka v přehledu celkové částky při placení, přičemž úpravy daně budou provedeny podle nastavení daní v obchodě.</details>';
$_['text_contact']                         = '<p>Pro další pomoc se prosím obraťte na náš tým podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentace:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentace pro uživatele</a></li></ul>';

// Tab
$_['tab_general']                          = 'Obecné';
$_['tab_help_and_support']                 = 'Nápověda a podpora';

// Entry
$_['entry_fee']                            = 'Poplatek (s daní)';
$_['entry_tax_class']                      = 'Daňová třída';
$_['entry_status']                         = 'Stav';
$_['entry_sort_order']                     = 'Pořadí třídění';

// Error
$_['error_total_ps_bank_transfer_fee_fee'] = 'Poplatek nesmí být prázdný, menší nebo roven nule';

// Error
$_['error_permission']                     = 'Upozornění: Nemáte oprávnění upravovat celkový poplatek za bankovní převod!';
